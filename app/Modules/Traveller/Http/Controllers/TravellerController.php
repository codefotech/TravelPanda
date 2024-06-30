<?php

namespace App\Modules\Traveller\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Traveller\Models\Traveller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Mockery\Exception;

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

    public function get_travellers()
    {
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

    public function get_traveller($id)
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


    public function create(Request $request)
    {
        try {
            Traveller::create($request->all());
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

    public function update(Request $request, $id)
    {
        try {
            $traveller = Traveller::findOrFail($id);
            $traveller->update($request->all());
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


    public function delete($id)
    {
        try {
            $traveller = Traveller::findOrFail($id);
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

