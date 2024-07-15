<?php

namespace App\Modules\Client\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Client\Models\Client;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\File;
use Exception;

class ClientController extends Controller
{
    public function index(): View
    {
        return view("Client::index");
    }

    public function clientCreate(): View
    {
        return view("Client::create");
    }

    public function clientUpdate($id): View
    {
        return view("Client::update", ['id' => $id]);
    }

    public function allClient()
    {
        try {
            $client = Client::get();
            if (!$client) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'No Client Found!!'
                ], 404);
            }
            return response()->json([
                'status' => 'success',
                'message' => 'Client Retrieved Successfully',
                'data' => $client
            ], 200);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch client',
                'error' => $exception->getMessage()
            ], 500);
        }
    }

    public function getClient($id)
    {
        try {
            $client = Client::findOrFail($id);
            return response()->json([
                'status' => 'success',
                'message' => 'Client Retrieved Successfully',
                'data' => $client
            ], 200);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch client',
                'error' => $exception->getMessage()
            ], 500);
        }
    }


    public function clientDetails($id)
    {
        $client = Client::find($id);
        return view('Client::detail', compact('client'));
    }


    public function createClient(Request $request)
    {
        try {
            // Delete Old Files if any
            $this->deleteOldFiles($request);

            // Prepare File Names & Paths
            $photoUrl = $this->handleFileUpload('photo', $request);

            $client = Client::create([
                'client_name' => $request->input('client_name'),
                'url' => $request->input('url'),
                'photo' => $photoUrl,
            ]);

            // Save image paths to the database
            $client->photo = $photoUrl;
            $client->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Client Created Successfully!!',
            ], 201);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failure',
                'message' => 'Failed to create client',
                'error' => $exception->getMessage(),
            ], 500);
        }
    }

    public function updateClient(Request $request, $id)
    {
        try {
            $client = Client::findOrFail($id);
            if (!$client) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'Client Not Found!!'
                ], 404);
            }

            // Delete Old Files if any
            $this->deleteOldFiles($request);

            // Prepare File Names & Paths
            $photoUrl = $this->handleFileUpload('photo', $request);

            $client->update([
                'button_text' => $request->input('name'),
                'button_url' => $request->input('url'),
                'photo' => $photoUrl ?: $client->photo
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Client Updated Successfully!!',
            ], 200);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failure',
                'message' => 'Update Failed',
                'error' => $exception->getMessage()
            ], 500);
        }
    }



    public function deleteClient($id)
    {
        try {
            $client = Client::findOrFail($id);
            if (!$client) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'Client Not Found!!'
                ], 404);
            }
            $client->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Client Deleted Successfully!!',
            ], 200);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failure',
                'message' => 'Delete Failed',
                'error' => $exception->getMessage()
            ], 500);
        }
    }



    // Helper function to handle file upload
    private function handleFileUpload($fileInputName, Request $request)
    {
        if ($request->hasFile($fileInputName)) {
            $file = $request->file($fileInputName);
            $time = time();
            $fileName = "{$time}-{$file->getClientOriginalName()}";
            $filePath = "/images/uploads/{$fileName}";
            $file->move(public_path('/images/uploads'), $fileName);
            return $filePath;
        }
        return null;
    }


    // Helper function to delete old files
    private function deleteOldFiles(Request $request)
    {
        $oldPhotoPath = $request->input('photo_path');

        if ($oldPhotoPath && File::exists(public_path($oldPhotoPath))) {
            File::delete(public_path($oldPhotoPath));
        }
    }
}
