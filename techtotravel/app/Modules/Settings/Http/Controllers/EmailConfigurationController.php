<?php

namespace App\Modules\Settings\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Settings\Models\EmailConfiguration;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Mockery\Exception;

class EmailConfigurationController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function emailConfiguration():View{
        return view("Settings::email_configuration");
    }


    public function emailConfigurationList()
    {
        return EmailConfiguration::all();
    }

    public function emailConfigurationCreate(Request $request)
    {
        try {
            EmailConfiguration::create([
                'send_email' => $request->input('send_email'),
                'receive_email' => $request->input('receive_email'),
                'smtp_host' => $request->input('smtp_host'),
                'smtp_port' => $request->input('smtp_port'),
                'smtp_user' => $request->input('smtp_user'),
                'smtp_password' => $request->input('smtp_password'),
            ]);

            return response()->json([
                'success' => 'success',
                'message' => 'Email Configuration Created Successfully!!'
            ], 201);
        } catch (Exception $exception) {
            return response()->json([
                'success' => 'failure',
                'message' => $exception->getMessage()
            ], 404);
        }
    }

    public function emailConfigurationDelete(Request $request)
    {
        $email_configuration_id = $request->input('id');
        $emailConfiguration = EmailConfiguration::find($email_configuration_id);

        if ($emailConfiguration) {
            $emailConfiguration->delete();
            return response()->json([
                'success' => 'success',
                'message' => 'Email Configuration Deleted Successfully!!'
            ], 200);
        }

        return response()->json([
            'success' => 'failure',
            'message' => 'Email Configuration Not Found!!'
        ], 404);
    }


    public function emailConfigurationUpdate(Request $request)
    {
        $email_configuration_id = $request->input('id');
        $emailConfiguration = EmailConfiguration::find($email_configuration_id);

        if ($emailConfiguration) {
            $emailConfiguration->update([
                'send_email' => $request->input('send_email'),
                'receive_email' => $request->input('receive_email'),
                'smtp_host' => $request->input('smtp_host'),
                'smtp_port' => $request->input('smtp_port'),
                'smtp_user' => $request->input('smtp_user'),
                'smtp_password' => $request->input('smtp_password'),
            ]);

            return response()->json([
                'success' => 'success',
                'message' => 'Email Configuration Updated Successfully!!'
            ], 200);
        }

        return response()->json([
            'success' => 'failure',
            'message' => 'Email Configuration Not Found!!'
        ], 404);
    }


    public function emailConfigurationIdCheck($id)
    {
        try {
            $emailConfig = EmailConfiguration::find($id);

            if (!$emailConfig) {
                return response()->json([
                    'success' => false,
                    'message' => 'Email Configuration ID not found.'
                ], 404);
            }

            return response()->json([
                'success' => true,
                'data' => $emailConfig
            ], 200);

        } catch (Exception $exception) {
            return response()->json([
                'success' => false,
                'message' => $exception->getMessage()
            ], 500);
        }
    }


}
