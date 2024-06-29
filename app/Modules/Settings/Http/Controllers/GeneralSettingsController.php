<?php

namespace App\Modules\Settings\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Settings\Models\GeneralSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;
use Mockery\Exception;

class GeneralSettingsController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function generalSettings():View{
        return view("Settings::general_settings");
    }






    public function getGeneralSettings()
    {
        try {
            $generalSettings = GeneralSettings::first();

            if (!$generalSettings) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'General Settings Not Found!!'
                ], 404);
            }

            $generalSettingsData = $generalSettings->toArray();

            return response()->json([
                'status' => 'success',
                'message' => 'General Settings Retrieved Successfully',
                'data' => $generalSettingsData
            ], 200);

        } catch (Exception $exception) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch general settings',
                'error' => $exception->getMessage()
            ], 500);
        }
    }

    public function generalSettingsCreate(Request $request)
    {
        try {
            // Delete Old Files if any
            $this->deleteOldFiles($request);

            // Prepare File Names & Paths
            $logoUrl = $this->handleFileUpload('logo', $request);
            $faviconUrl = $this->handleFileUpload('favicon', $request);
            $bannerUrl = $this->handleFileUpload('banner', $request);

            // Set default value for copyright_text if not provided
            $copyrightText = $request->input('copyright_text', '© Your Company'); // Default value here

            // Create General Settings
            $generalSettings = GeneralSettings::create([
                'logo' => $logoUrl,
                'favicon' => $faviconUrl,
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'copyright_text' => $copyrightText,
                'stunning_place' => $request->input('stunning_place'),
                'satisfied_customer' => $request->input('satisfied_customer'),
                'travel_places' => $request->input('travel_places'),
                'banner' => $bannerUrl
            ]);

            // Save image paths to the database
            $generalSettings->logo = $logoUrl;
            $generalSettings->favicon = $faviconUrl;
            $generalSettings->banner = $bannerUrl;
            $generalSettings->save();

            return response()->json([
                'status' => 'success',
                'message' => 'General Settings Created Successfully!!'
            ], 201);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failure',
                'message' => $exception->getMessage()
            ], 500);
        }
    }


    public function generalSettingsUpdate(Request $request)
    {
        try {
            $generalSettings = GeneralSettings::first();

            if (!$generalSettings) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'General Settings Not Found!!'
                ], 404);
            }

            // Delete old files if new ones are provided
            $this->deleteOldFiles($request);

            // Prepare File Names & Paths
            $logoUrl = $this->handleFileUpload('logo', $request);
            $faviconUrl = $this->handleFileUpload('favicon', $request);
            $bannerUrl = $this->handleFileUpload('banner', $request);

            // Set default value for copyright_text if not provided
            $copyrightText = $request->input('copyright_text', $generalSettings->copyright_text); // Retain existing value

            // Update general settings
            $generalSettings->update([
                'logo' => $logoUrl ?: $generalSettings->logo,
                'favicon' => $faviconUrl ?: $generalSettings->favicon,
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'copyright_text' => $copyrightText,
                'stunning_place' => $request->input('stunning_place'),
                'satisfied_customer' => $request->input('satisfied_customer'),
                'travel_places' => $request->input('travel_places'),
                'banner' => $bannerUrl ?: $generalSettings->banner
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'General Settings Updated Successfully'
            ], 200);

        } catch (Exception $exception) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update general settings',
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
        $oldLogoPath = $request->input('logo_path');
        $oldFaviconPath = $request->input('favicon_path');
        $oldBannerPath = $request->input('banner_path');

        if ($oldLogoPath && File::exists(public_path($oldLogoPath))) {
            File::delete(public_path($oldLogoPath));
        }
        if ($oldFaviconPath && File::exists(public_path($oldFaviconPath))) {
            File::delete(public_path($oldFaviconPath));
        }
        if ($oldBannerPath && File::exists(public_path($oldBannerPath))) {
            File::delete(public_path($oldBannerPath));
        }
    }



}
