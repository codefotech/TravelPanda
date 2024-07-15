<?php
// declare(strict_types = 1);

namespace App\Modules\Package\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Package\Models\Package;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class PackageController extends Controller {
    public function index(): View {
        return view( "Package::index" );
    }

    public function packageCreate(): View {
        return view( "Package::create" );
    }

    public function packageUpdate( $id ): View {
        return view("Package::update", ['id' => $id]);
    }

    public function allPackage() {
        try {
            $package = Package::get();
            if ( !$package ) {
                return response()->json([
                    'status'  => 'failure',
                    'message' => 'No Package Found!!',
                ], 404 );
            }
            return response()->json([
                'status'  => 'success',
                'message' => 'Package Retrieved Successfully',
                'data'    => $package,
            ], 200 );
        } catch ( Exception $exception ) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Failed to fetch package',
                'error'   => $exception->getMessage(),
            ], 500 );
        }
    }

    public function getPackage( $id ) {
        try {
            $package = Package::findOrFail( $id );
            return response()->json([
                'status'  => 'success',
                'message' => 'Package Retrieved Successfully',
                'data'    => $package,
            ], 200 );
        } catch ( Exception $exception ) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Failed to fetch package',
                'error'   => $exception->getMessage(),
            ], 500 );
        }
    }

    public function packageDetails( $id ) {
        $package = Package::find( $id );
        return view( 'Package::detail', compact( 'package' ) );
    }

    public function createPackage(Request $request)
    {
        try {
            $photoUrl = $this->handleFileUpload('photo', $request);
            $bannerUrl = $this->handleFileUpload('banner', $request);
            $tourPhotosUrl = $this->handleFileUpload('tour_photos', $request);
            $tourVideosUrl = $this->handleVideoUpload('tour_videos', $request);

            $package = Package::create([
                'package_name' => $request->input('package_name'),
                'destination_name' => $request->input('destination_name'),
                'description' => $request->input('description'),
                'short_description' => $request->input('short_description'),
                'location' => $request->input('location'),
                'tour_start_date' => $request->input('tour_start_date'),
                'tour_end_date' => $request->input('tour_end_date'),
                'last_booking_date' => $request->input('last_booking_date'),
                'map' => $request->input('map'),
                'itinerary' => $request->input('itinerary'),
                'price' => $request->input('price'),
                'policy' => $request->input('policy'),
                'terms_and_conditions' => $request->input('terms_and_conditions'),
                'featured' => $request->input('featured'),
                'photo' => $photoUrl,
                'banner' => $bannerUrl,
                'tour_photos' => $tourPhotosUrl,
                'tour_videos' => $tourVideosUrl,
            ]);



            // Save image paths to the database
            $package->photo = $photoUrl;
            $package->banner = $bannerUrl;
            $package->tour_photos = $tourPhotosUrl;
            $package->tour_videos = $tourVideosUrl;
            $package->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Package created successfully',
            ], 201);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create package',
                'error' => $exception->getMessage(),
            ], 500);
        }
    }

    public function updatePackage(Request $request, $id)
    {
        try {
            $package = Package::findOrFail($id);
            if (!$package) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'Package Not Found!!'
                ], 404);
            }

            // Delete Old Files if any
            $this->deleteOldFiles($request);

            // Prepare File Names & Paths
            $photoUrl = $this->handleFileUpload('photo', $request);
            $bannerUrl = $this->handleFileUpload('banner', $request);
            $tourPhotosUrl = $this->handleFileUpload('tour_photos', $request);
            $tourVideosUrl = $this->handleVideoUpload('tour_videos', $request);


            $package->update([
                'package_name' => $request->input('package_name'),
                'destination_name' => $request->input('destination_name'),
                'description' => $request->input('description'),
                'short_description' => $request->input('short_description'),
                'location' => $request->input('location'),
                'tour_start_date' => $request->input('tour_start_date'),
                'tour_end_date' => $request->input('tour_end_date'),
                'last_booking_date' => $request->input('last_booking_date'),
                'map' => $request->input('map'),
                'itinerary' => $request->input('itinerary'),
                'price' => $request->input('price'),
                'policy' => $request->input('policy'),
                'terms_and_conditions' => $request->input('terms_and_conditions'),
                'featured' => $request->input('featured'),
                'photo' => $photoUrl ?: $package->photo,
                'banner' => $bannerUrl ?: $package->banner,
                'tour_photos' => $tourPhotosUrl ?: $package->tour_photos,
                'tour_videos' => $tourVideosUrl ?: $package->tour_videos
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Package updated successfully'
            ], 200);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failure',
                'message' => 'Update Failed',
                'error' => $exception->getMessage(),
            ], 500);
        }
    }

    public function deletePackage( $id ) {
        try {
            $package = Package::findOrFail( $id );
            if ( !$package ) {
                return response()->json( array(
                    'status'  => 'failure',
                    'message' => 'Package Not Found!!',
                ), 404 );
            }
            $package->delete();
            return response()->json( array(
                'status'  => 'success',
                'message' => 'Package Deleted Successfully!!',
            ), 200 );
        } catch ( Exception $exception ) {
            return response()->json( array(
                'status'  => 'failure',
                'message' => 'Delete Failed',
                'error'   => $exception->getMessage(),
            ), 500 );
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

    // Helper function to handle video file upload
    private function handleVideoUpload($fileInputName, Request $request)
    {
        if ($request->hasFile($fileInputName) && $request->file($fileInputName)->isValid()) {
            $video = $request->file($fileInputName);
            $time = time();
            $videoName = "{$time}-{$video->getClientOriginalName()}";
            $video->move(public_path('/video/uploads'), $videoName);
            $filePath = "/video/uploads/{$videoName}";
            return $filePath;
        }
        return null;
    }

    // Helper function to delete old files
    private function deleteOldFiles(Request $request)
    {
        $oldPhotoPath = $request->input('photo_path');
        $oldBannerPath = $request->input('banner_path');
        $oldTourPhotosPath = $request->input('tour_photos_path');
        $oldTourVideosPath = $request->input('tour_videos_path');

        if ($oldPhotoPath && File::exists(public_path($oldPhotoPath))) {
            File::delete(public_path($oldPhotoPath));
        }
        if ($oldBannerPath && File::exists(public_path($oldBannerPath))) {
            File::delete(public_path($oldBannerPath));
        }
        if ($oldTourPhotosPath && File::exists(public_path($oldTourPhotosPath))) {
            File::delete(public_path($oldTourPhotosPath));
        }
        if ($oldTourVideosPath && File::exists(public_path($oldTourVideosPath))) {
            File::delete(public_path($oldTourVideosPath));
        }
    }
}
