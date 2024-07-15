<?php

namespace App\Modules\Traveller\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Traveller\Models\Traveller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Exception;

class TravellerController extends Controller
{
    public function index(): View
    {
        return view("Traveller::index");
    }

    public function travellerCreate(): View
    {
        return view("Traveller::create");
    }

    public function travellerUpdate($id): View
    {
        return view("Traveller::update", ['id' => $id]);
    }

    public function allTraveller()
    {
        try {
            $travellers = Traveller::get();
            if (!$travellers) {
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

    public function getTraveller($id)
    {
        try {
            $traveller = Traveller::findOrFail($id);
            return response()->json([
                'status' => 'success',
                'message' => 'Traveller Retrieved Successfully',
                'data' => $traveller
            ], 200);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch traveller',
                'error' => $exception->getMessage()
            ], 500);
        }
    }

    public function travellerDetails($id)
    {
        $traveller = Traveller::find($id);
        return view('Traveller::detail', compact('traveller'));
    }


    public function createTraveller(Request $request)
    {
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
                'status' => 'success',
                'message' => 'Traveller Created Successfully!!'
            ], 201);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failure',
                'message' => $exception->getMessage()
            ], 500);
        }
    }

    public function updateTraveller(Request $request, $id)
    {
        try {
            $traveller = Traveller::findOrFail($id);
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
                'status' => 'failure',
                'message' => 'Update Failed',
                'error' => $exception->getMessage()
            ], 500);
        }
    }


    public function deleteTraveller($id)
    {
        try {
            $traveller = Traveller::findOrFail($id);
            if (!$traveller) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'Traveller Not Found!!'
                ], 404);
            }
            $traveller->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Traveller Deleted Successfully!!',
            ], 200);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failure',
                'message' => 'Delete Failed',
                'error' => $exception->getMessage()
            ], 500);
        }
    }
}

