<?php

namespace App\Modules\Traveller\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Traveller\Models\Traveller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Mockery\Exception;

class TravellerController extends Controller
{
    public function index():View {
        return view("Traveller::index");
    }
    public function travellerCreate():View{
        return view("Traveller::create");
    }
    public function travellerUpdate():View{
        return view("Traveller::update");
    }





    public function get_traveller() {
        try {
            $travellers = Traveller::all();

            if ($travellers->isEmpty()) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'No Travellers Found!!'
                ], 404);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Travellers Retrieved Successfully',
                'data' => $travellers
            ], 200);

        } catch (Exception $exception) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch travellers',
                'error' => $exception->getMessage()
            ], 500);
        }
    }


    public function create(Request $request){
        try {
            Traveller::create([
                'traveller_name' => $request->input('traveller_name'),
                'traveller_email' => $request->input('traveller_email'),
                'traveller_phone' => $request->input('traveller_phone'),
                'city' => $request->input('city'),
                'state' => $request->input('state'),
                'country' => $request->input('country'),
                'address' => $request->input('address'),
                'status' => $request->input('status')
            ]);

            return response()->json([
                'success' => 'success',
                'message' => 'Traveller Created Successfully!!'
            ], 201);
        } catch (Exception $exception) {
            return response()->json([
                'success' => 'failure',
                'message' => $exception->getMessage()
            ], 404);
        }
    }
    public function update(Request $request){
        try {
            $traveller = Traveller::first();

            if (!$traveller) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'Traveller Not Found!!'
                ], 404);
            }

            $traveller->update([
                'traveller_name' => $request->input('traveller_name'),
                'traveller_email' => $request->input('traveller_email'),
                'traveller_phone' => $request->input('traveller_phone'),
                'city' => $request->input('city'),
                'state' => $request->input('state'),
                'country' => $request->input('country'),
                'address' => $request->input('address'),
                'status' => $request->input('status')
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Traveller Updated Successfully!!',
            ], 200);

        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Update Failed',
                'error' => $exception->getMessage()
            ], 500);
        }
    }
    public function delete(Request $request){

    }
}
