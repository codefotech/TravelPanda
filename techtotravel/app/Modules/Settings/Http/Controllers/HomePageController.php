<?php

namespace App\Modules\Settings\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Settings\Models\HomePage;
use Exception;
use Illuminate\Http\Request;
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
            HomePage::create([
                'logo' => $request->input('logo'),
                'favicon' => $request->input('favicon'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'copyright_text' => $request->input('copyright_text'),
                'social_icon' => $request->input('social_icon'),
                'social_icon_url' => $request->input('social_icon_url'),
                'banner' => $request->input('banner')
            ]);

            return response()->json([
                'success' => 'success',
                'message' => 'Home Page Created Successfully!!'
            ], 201);
        } catch (Exception $exception) {
            return response()->json([
                'success' => 'failure',
                'message' => $exception->getMessage()
            ], 404);
        }
    }

    public function homePageUpdate(Request $request)
    {
        try {
            $homePage = HomePage::first();

            if (!$homePage) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'Home Page Not Found!!'
                ], 404);
            }

            $homePage->update([
                'logo' => $request->input('logo'),
                'favicon' => $request->input('favicon'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'copyright_text' => $request->input('copyright_text'),
                'social_icon' => $request->input('social_icon'),
                'social_icon_url' => $request->input('social_icon_url'),
                'banner' => $request->input('banner')
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


}
