<?php

namespace App\Modules\Settings\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Settings\Models\HomePage;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class HomePageController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */


    public function getHomePage()
    {
        try {
            $homePage = HomePage::first();

            if (!$homePage) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'Home Page Not Found!!'
                ], 404);
            }

            $homePageData = $homePage->toArray();

            // Decode content_data JSON field
            $contentData = json_decode($homePage->content_data, true);
            $homePageData['content_data'] = $contentData;

            // Return data in JSON format
            return response()->json([
                'status' => 'success',
                'message' => 'Home Page Retrieved Successfully',
                'data' => $homePageData
            ], 200);

        } catch (Exception $exception) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch home page',
                'error' => $exception->getMessage()
            ], 500);
        }
    }


    public function homePageCreate(Request $request)
    {
        try {
            // Delete old files if new ones are provided
            $this->deleteOldFiles($request);
            // Prepare File Names & Paths
            $imgUrl = $this->handleFileUpload('image', $request);
            $contentData = [
                'heroform_desination' => $request->input('heroform_desination'),
                'heroform_trip_type' => $request->input('heroform_trip_type'),
                'heroform_trip_activities' => $request->input('heroform_trip_activities'),
                'heroform_days' => $request->input('heroform_days'),
                'heroform_budget' => $request->input('heroform_budget'),
                'trips_and_tours' => $request->input('trips_and_tours'),
                'outdoor_section_activities' => $request->input('outdoor_section_activities'),
                'countries' => $request->input('countries'),
                'happy_customers' => $request->input('happy_customers'),
                'trip_section_days' => $request->input('trip_section_days'),
                'trip_section_people' => $request->input('trip_section_people'),
                'trip_section_old_price' => $request->input('trip_section_old_price'),
                'trip_section_new_price' => $request->input('trip_section_new_price'),
                'trip_section_discount' => $request->input('trip_section_discount'),
                'place_section_name' => $request->input('place_section_name'),
                'place_section_activity' => $request->input('place_section_activity'),
                'trip_activities' => $request->input('trip_activities'),
                'trip_activities_title' => $request->input('trip_activities_title')
            ];
            HomePage::create([
                'user_types' => $request->input('user_types'),
                'title' => $request->input('title'),
                'subtitle' => $request->input('subtitle'),
                'description' => $request->input('description'),
                'image' => $imgUrl,
                'content_data' => json_encode($contentData),
                'order' => '0'
            ]);
            return response()->json([
                'status' => 'success',
                'message' => 'Home Page Created Successfully!!'
            ], 201);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failure',
                'message' => $exception->getMessage()
            ], 500);
        }
    }


    public function homePageUpdate(Request $request)
    {
        try {
            $homePage = HomePage::get();

            if (!$homePage) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'Home Page Not Found!!'
                ], 404);
            }

            // Delete old files if new ones are provided
            $this->deleteOldFiles($request);

            // Prepare File Names & Paths
            $imgUrl = $this->handleFileUpload('image', $request);

            // Decode content_data from request
            $contentData = [
                'heroform_desination' => $request->input('content_data.heroform_desination'),
                'heroform_trip_type' => $request->input('content_data.heroform_trip_type'),
                'heroform_trip_activities' => $request->input('content_data.heroform_trip_activities'),
                'heroform_days' => $request->input('content_data.heroform_days'),
                'heroform_budget' => $request->input('content_data.heroform_budget'),
                'trips_and_tours' => $request->input('content_data.trips_and_tours'),
                'outdoor_section_activities' => $request->input('content_data.outdoor_section_activities'),
                'countries' => $request->input('content_data.countries'),
                'happy_customers' => $request->input('content_data.happy_customers'),
                'trip_section_days' => $request->input('content_data.trip_section_days'),
                'trip_section_people' => $request->input('content_data.trip_section_people'),
                'trip_section_new_price' => $request->input('content_data.trip_section_new_price'),
                'trip_section_discount' => $request->input('content_data.trip_section_discount'),
                'place_section_name' => $request->input('content_data.place_section_name'),
                'place_section_activity' => $request->input('content_data.place_section_activity'),
                'trip_activities' => $request->input('content_data.trip_activities'),
                'trip_activities_title' => $request->input('content_data.trip_activities_title')
            ];

            // Update home page
            $homePage->update([
                'user_types' => $request->input('user_types'),
                'title' => $request->input('title'),
                'subtitle' => $request->input('subtitle'),
                'description' => $request->input('description'),
                'image' => $imgUrl,
                'content_data' => json_encode($contentData)
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Home Page Updated Successfully!!',
            ], 200);

        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Update Failed',
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
            $filePath = "images/uploads/{$fileName}";
            $file->move(public_path('images/uploads'), $fileName);
            return $filePath;
        }
        return null;
    }


    // Helper function to delete old files
    private function deleteOldFiles(Request $request)
    {
        $oldImgPath = $request->input('img_path');

        if ($oldImgPath && File::exists(public_path($oldImgPath))) {
            File::delete(public_path($oldImgPath));
        }
    }

}
