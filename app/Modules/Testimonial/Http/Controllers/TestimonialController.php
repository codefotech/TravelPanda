<?php

namespace App\Modules\Testimonial\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Testimonial\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\File;
use Exception;

class TestimonialController extends Controller
{
    public function index(): View
    {
        return view("Testimonial::index");
    }

    public function testimonialCreate(): View
    {
        return view("Testimonial::create");
    }

    public function testimonialUpdate($id): View
    {
        return view("Testimonial::update", ['id' => $id]);
    }

    public function allTestimonial()
    {
        try {
            $testimonial = Testimonial::get();
            if (!$testimonial) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'No Testimonial Found!!'
                ], 404);
            }
            return response()->json([
                'status' => 'success',
                'message' => 'Testimonial Retrieved Successfully',
                'data' => $testimonial
            ], 200);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch testimonial',
                'error' => $exception->getMessage()
            ], 500);
        }
    }

    public function getTestimonial($id)
    {
        try {
            $testimonial = Testimonial::findOrFail($id);
            return response()->json([
                'status' => 'success',
                'message' => 'Testimonial Retrieved Successfully',
                'data' => $testimonial
            ], 200);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch testimonial',
                'error' => $exception->getMessage()
            ], 500);
        }
    }


    public function testimonialDetails($id)
    {
        $testimonial = Testimonial::find($id);
        return view('Testimonial::detail', compact('testimonial'));
    }


    public function createTestimonial(Request $request)
    {
        try {
            // Delete Old Files if any
            $this->deleteOldFiles($request);

            // Prepare File Names & Paths
            $photoUrl = $this->handleFileUpload('photo', $request);

            $testimonial = Testimonial::create([
                'name' => $request->input('name'),
                'designation' => $request->input('designation'),
                'comment' => $request->input('comment'),
                'photo' => $photoUrl,
            ]);

            // Save image paths to the database
            $testimonial->photo = $photoUrl;
            $testimonial->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Testimonial Created Successfully!!',
            ], 201);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failure',
                'message' => 'Failed to create testimonial',
                'error' => $exception->getMessage(),
            ], 500);
        }
    }

    public function updateTestimonial(Request $request, $id)
    {
        try {
            $testimonial = Testimonial::findOrFail($id);
            if (!$testimonial) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'Testimonial Not Found!!'
                ], 404);
            }

            // Delete Old Files if any
            $this->deleteOldFiles($request);

            // Prepare File Names & Paths
            $photoUrl = $this->handleFileUpload('photo', $request);

            $testimonial->update([
                'name' => $request->input('name'),
                'designation' => $request->input('designation'),
                'comment' => $request->input('comment'),
                'photo' => $photoUrl ?: $testimonial->photo
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Testimonial Updated Successfully!!',
            ], 200);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failure',
                'message' => 'Update Failed',
                'error' => $exception->getMessage()
            ], 500);
        }
    }



    public function deleteTestimonial($id)
    {
        try {
            $slider = Testimonial::findOrFail($id);
            if (!$slider) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'Testimonial Not Found!!'
                ], 404);
            }
            $slider->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Testimonial Deleted Successfully!!',
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
