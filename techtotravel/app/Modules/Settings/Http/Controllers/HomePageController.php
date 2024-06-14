<?php

namespace App\Modules\Settings\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Settings\Models\HomePage;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomePageController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */

    public function homePageList(Request $request){
        return HomePage::all();
    }
    public function homePageCreate(Request $request){

    }
    public function homePageDelete(Request $request){
        $home_page_id = $request->input('id');
        $homePage = HomePage::find($home_page_id);

        if ($homePage) {
            $homePage->delete();
            return response()->json([
                'success' => 'success',
                'message' => 'Home Page Deleted Successfully!!'
            ], 200);
        }

        return response()->json([
            'success' => 'failure',
            'message' => 'Home Page Not Found!!'
        ], 404);
    }
    public function homePageUpdate(Request $request){

    }
    public function homePageIdCheck(Request $request){
        $home_page_id = $request->input('id');
        $homePage = HomePage::find($home_page_id);

        if ($homePage) {
            return response()->json([
                'success' => 'success',
                'message' => 'Home Page Found'
            ], 200);
        }

        return response()->json([
            'success' => 'failure',
            'message' => 'Home Page Not Found'
        ], 404);
    }


}
