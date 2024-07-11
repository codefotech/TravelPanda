<?php

namespace App\Modules\Settings\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Settings\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Exception;

class SocialMediaController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function socialMedia():View{
        return view("Settings::social_media");
    }




    public function getSocialMedia()
    {
        try {
            $socialMedia = SocialMedia::first();

            if (!$socialMedia) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'Social Media Not Found!!'
                ], 404);
            }

            $socialMediaData = $socialMedia->toArray();

            return response()->json([
                'status' => 'success',
                'message' => 'Email Configuration Retrieved Successfully',
                'data' => $socialMediaData
            ], 200);

        } catch (Exception $exception) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch social media',
                'error' => $exception->getMessage()
            ], 500);
        }
    }

    public function socialMediaCreate(Request $request)
    {
        try {
            SocialMedia::create([
                'facebook' => $request->input('facebook'),
                'twitter' => $request->input('twitter'),
                'linkedin' => $request->input('linkedin'),
                'google' => $request->input('google'),
                'printerest' => $request->input('printerest'),
                'youtube' => $request->input('youtube'),
                'instagram' => $request->input('instagram'),
                'tumblr' => $request->input('tumblr'),
                'flickr' => $request->input('flickr'),
                'reddit' => $request->input('reddit'),
                'snapchat' => $request->input('snapchat'),
                'whatsapp' => $request->input('whatsapp'),
                'quora' => $request->input('quora'),
                'stumbleupon' => $request->input('stumbleupon'),
                'delicious' => $request->input('delicious'),
                'digg' => $request->input('digg')
            ]);

            return response()->json([
                'success' => 'success',
                'message' => 'Social Media Created Successfully!!'
            ], 201);
        } catch (Exception $exception) {
            return response()->json([
                'success' => 'failure',
                'message' => $exception->getMessage()
            ], 404);
        }
    }

    public function socialMediaUpdate(Request $request)
    {
        try {
            $socialMedia = SocialMedia::first();

            if (!$socialMedia) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'Social Media Not Found!!'
                ], 404);
            }

            $socialMedia->update([
                'facebook' => $request->input('facebook'),
                'twitter' => $request->input('twitter'),
                'linkedin' => $request->input('linkedin'),
                'google' => $request->input('google'),
                'printerest' => $request->input('printerest'),
                'youtube' => $request->input('youtube'),
                'instagram' => $request->input('instagram'),
                'tumblr' => $request->input('tumblr'),
                'flickr' => $request->input('flickr'),
                'reddit' => $request->input('reddit'),
                'snapchat' => $request->input('snapchat'),
                'whatsapp' => $request->input('whatsapp'),
                'quora' => $request->input('quora'),
                'stumbleupon' => $request->input('stumbleupon'),
                'delicious' => $request->input('delicious'),
                'digg' => $request->input('digg')
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Social Media Updated Successfully!!',
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
