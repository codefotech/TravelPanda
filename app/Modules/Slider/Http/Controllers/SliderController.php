<?php

namespace App\Modules\Slider\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Slider\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\File;
use Exception;

class SliderController extends Controller
{
    public function index(): View
    {
        return view("Slider::index");
    }

    public function sliderCreate(): View
    {
        return view("Slider::create");
    }

    public function sliderUpdate($id): View
    {
        return view("Slider::update", ['id' => $id]);
    }

    public function allSlider()
    {
        try {
            $slider = Slider::get();
            if (!$slider) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'No Slider Found!!'
                ], 404);
            }
            return response()->json([
                'status' => 'success',
                'message' => 'Slider Retrieved Successfully',
                'data' => $slider
            ], 200);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch slider',
                'error' => $exception->getMessage()
            ], 500);
        }
    }

    public function getSlider($id)
    {
        try {
            $slider = Slider::findOrFail($id);
            return response()->json([
                'status' => 'success',
                'message' => 'Slider Retrieved Successfully',
                'data' => $slider
            ], 200);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch slider',
                'error' => $exception->getMessage()
            ], 500);
        }
    }


    public function sliderDetails($id)
    {
        $slider = Slider::find($id);
        return view('Slider::detail', compact('slider'));
    }


    public function createSlider(Request $request)
    {
        try {
            // Delete Old Files if any
            $this->deleteOldFiles($request);

            // Prepare File Names & Paths
            $photoUrl = $this->handleFileUpload('photo', $request);

            $slider = Slider::create([
                'heading' => $request->input('heading'),
                'content' => $request->input('content'),
                'button_text' => $request->input('button_text'),
                'button_url' => $request->input('button_url'),
                'photo' => $photoUrl,
            ]);

            // Save image paths to the database
            $slider->photo = $photoUrl;
            $slider->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Slider Created Successfully!!',
            ], 201);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failure',
                'message' => 'Failed to create slider',
                'error' => $exception->getMessage(),
            ], 500);
        }
    }

    public function updateSlider(Request $request, $id)
    {
        try {
            $slider = Slider::findOrFail($id);
            if (!$slider) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'Slider Not Found!!'
                ], 404);
            }

            // Delete Old Files if any
            $this->deleteOldFiles($request);

            // Prepare File Names & Paths
            $photoUrl = $this->handleFileUpload('photo', $request);

            $slider->update([
                'heading' => $request->input('heading'),
                'content' => $request->input('content'),
                'button_text' => $request->input('button_text'),
                'button_url' => $request->input('button_url'),
                'photo' => $photoUrl ?: $slider->photo
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Slider Updated Successfully!!',
            ], 200);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failure',
                'message' => 'Update Failed',
                'error' => $exception->getMessage()
            ], 500);
        }
    }



    public function deleteSlider($id)
    {
        try {
            $slider = Slider::findOrFail($id);
            if (!$slider) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'Slider Not Found!!'
                ], 404);
            }
            $slider->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Slider Deleted Successfully!!',
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

