<?php

namespace App\Modules\Destination\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Destination\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\File;
use Exception;

class DestinationController extends Controller
{
    public function index(): View
    {
        return view("Destination::index");
    }

    public function destinationCreate(): View
    {
        return view("Destination::create");
    }

    public function destinationUpdate($id): View
    {
        return view("Destination::update", ['id' => $id]);
    }

    public function allDestination()
    {
        try {
            $destination = Destination::get();
            if (!$destination) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'No Destination Found!!'
                ], 404);
            }
            return response()->json([
                'status' => 'success',
                'message' => 'Destination Retrieved Successfully',
                'data' => $destination
            ], 200);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch destination',
                'error' => $exception->getMessage()
            ], 500);
        }
    }

    public function getDestination($id)
    {
        try {
            $destination = Destination::findOrFail($id);
            return response()->json([
                'status' => 'success',
                'message' => 'Destination Retrieved Successfully',
                'data' => $destination
            ], 200);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch destination',
                'error' => $exception->getMessage()
            ], 500);
        }
    }


    public function destinationDetails($id)
    {
        $destination = Destination::find($id);
        return view('Destination::detail', compact('destination'));
    }


    public function createDestination(Request $request)
    {
        try {
            // Delete Old Files if any
            $this->deleteOldFiles($request);

            // Prepare File Names & Paths
            $photoUrl = $this->handleFileUpload('photo', $request);
            $bannerUrl = $this->handleFileUpload('banner', $request);

            $destination = Destination::create([
                'destination_name' => $request->input('destination_name'),
                'heading' => $request->input('heading'),
                'short_description' => $request->input('short_description'),
                'package_heading' => $request->input('package_heading'),
                'package_subheading' => $request->input('package_subheading'),
                'detail_heading' => $request->input('detail_heading'),
                'detail_subheading' => $request->input('detail_subheading'),
                'introduction' => $request->input('introduction'),
                'experience' => $request->input('experience'),
                'weather' => $request->input('weather'),
                'hotel' => $request->input('hotel'),
                'transportation' => $request->input('transportation'),
                'culture' => $request->input('culture'),
                'photo' => $photoUrl,
                'banner' => $bannerUrl
            ]);



            // Save image paths to the database
            $destination->photo = $photoUrl;
            $destination->banner = $bannerUrl;
            $destination->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Destination Created Successfully!!',
            ], 201);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failure',
                'message' => 'Failed to create destination',
                'error' => $exception->getMessage(),
            ], 500);
        }
    }

    public function updateDestination(Request $request, $id)
    {
        try {
            $destination = Destination::findOrFail($id);
            if (!$destination) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'Destination Not Found!!'
                ], 404);
            }

            // Delete Old Files if any
            $this->deleteOldFiles($request);

            // Prepare File Names & Paths
            $photoUrl = $this->handleFileUpload('photo', $request);
            $bannerUrl = $this->handleFileUpload('banner', $request);

            $destination->update([
                'destination_name' => $request->input('destination_name'),
                'heading' => $request->input('heading'),
                'short_description' => $request->input('short_description'),
                'package_heading' => $request->input('package_heading'),
                'package_subheading' => $request->input('package_subheading'),
                'detail_heading' => $request->input('detail_heading'),
                'detail_subheading' => $request->input('detail_subheading'),
                'introduction' => $request->input('introduction'),
                'experience' => $request->input('experience'),
                'weather' => $request->input('weather'),
                'hotel' => $request->input('hotel'),
                'transportation' => $request->input('transportation'),
                'culture' => $request->input('culture'),
                'photo' => $photoUrl ?: $destination->photo,
                'banner' => $bannerUrl ?: $destination->banner
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Destination Updated Successfully!!',
            ], 200);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failure',
                'message' => 'Update Failed',
                'error' => $exception->getMessage()
            ], 500);
        }
    }



    public function deleteDestination($id)
    {
        try {
            $destination = Destination::findOrFail($id);
            if (!$destination) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'Destination Not Found!!'
                ], 404);
            }
            $destination->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Destination Deleted Successfully!!',
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
        $oldBannerPath = $request->input('banner_path');

        if ($oldPhotoPath && File::exists(public_path($oldPhotoPath))) {
            File::delete(public_path($oldPhotoPath));
        }
        if ($oldBannerPath && File::exists(public_path($oldBannerPath))) {
            File::delete(public_path($oldBannerPath));
        }
    }
}
