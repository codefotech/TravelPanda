<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Exception;

class UserController extends Controller
{
    function LoginPage():View{
        return view('auth.login');
    }
    function RegistrationPage():View{
        return view('auth.registration');
    }
    function SendOtpPage():View{
        return view('auth.send-otp');
    }
    function VerifyOtpPage():View{
        return view('auth.verify-otp');
    }
    function ResetPasswordPage():View{
        return view('auth.reset-password');
    }




    function Registration(Request $request){
        try {
            $email = $request->input('email');
            $existingUser = User::where('email', $email)->first();
            if($existingUser){
                return response()->json([
                    'status' => 'failed',
                    'message' => 'Duplicate Email!',
                ],400);
            } else {
                User::create([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'phone' => $request->input('phone'),
                    'address' => $request->input('address'),
                    'city' => $request->input('city'),
                    'state' => $request->input('state'),
                    'country' => $request->input('country'),
                    'password' => Hash::make($request->input('password')),
                    'user_type_id' => $request->input('user_type_id')
                ]);

                return response()->json([
                    'success' => 'success',
                    'message' => 'User Registration Successful!'
                ], 201);
            }
        } catch(Exception $exception){
            return response()->json([
                'success' => 'failed',
                // 'message' => 'User Registration Failed!',
                'message' => $exception->getMessage()
            ], 401);
        }
    }

    function Login(Request $request){
        try {
            // Retrieve the user by email
            $user = User::where('email', $request->input('email'))->first();

            // Check if the user exists and if the password matches
            if ($user && Hash::check($request->input('password'), $user->password)){
                return response()->json([
                    'status' => 'success',
                    'message' => 'User Login Successful',
                ]);
            } else {
                return response()->json([
                    'status' => 'failed',
                    'message' => 'Invalid email or password',
                ], 401);
            }
        } catch(Exception $exception){
            return response()->json([
                'status' => 'failed',
                'message' => $exception->getMessage()
            ], 401);
        }
    }


    function userid(Request $request){
        $user_id = $request->input('id');
        if (User::where('id',$user_id)){
            return response()->json([
                'success' => 'sussessful',
                'message' => 'find'
            ]);
        }
    }


}
