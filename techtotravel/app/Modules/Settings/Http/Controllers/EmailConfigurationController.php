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




    public function getEmailConfiguration()
    {
        try {
            $emailConfiguration = EmailConfiguration::first();

            if (!$emailConfiguration) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'Email Configuration Not Found!!'
                ], 404);
            }

            $emailData = $emailConfiguration->toArray();

            return response()->json([
                'status' => 'success',
                'message' => 'Email Configuration Retrieved Successfully',
                'data' => $emailData
            ], 200);

        } catch (\Exception $exception) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch email configuration',
                'error' => $exception->getMessage()
            ], 500);
        }
    }



    public function emailConfigurationUpdate(Request $request)
    {
        try {
            $emailConfiguration = EmailConfiguration::first();

            if (!$emailConfiguration) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'Email Configuration Not Found!!'
                ], 404);
            }

            $sendEmail = $request->input('send_email');
            $receiveEmail = $request->input('receive_email');
            $smtpHost = $request->input('smtp_host');
            $smtpPort = $request->input('smtp_port');
            $smtpUser = $request->input('smtp_user');
            $smtpPassword = $request->input('smtp_password');

            $emailConfiguration->update([
                'send_email' => $sendEmail,
                'receive_email' => $receiveEmail,
                'smtp_host' => $smtpHost,
                'smtp_port' => $smtpPort,
                'smtp_user' => $smtpUser,
                'smtp_password' => $smtpPassword,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Email Configuration Updated Successfully!!',
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
