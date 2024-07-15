<?php

namespace App\Modules\TeamMember\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\TeamMember\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\File;
use Exception;

class TeamMemberController extends Controller
{
    public function index(): View
    {
        return view("TeamMember::index");
    }

    public function teamMemberCreate(): View
    {
        return view("TeamMember::create");
    }

    public function teamMemberUpdate($id): View
    {
        return view("TeamMember::update", ['id' => $id]);
    }

    public function allTeamMember()
    {
        try {
            $team_member = TeamMember::get();
            if (!$team_member) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'No Team Member Found!!'
                ], 404);
            }
            return response()->json([
                'status' => 'success',
                'message' => 'Team Member Retrieved Successfully',
                'data' => $team_member
            ], 200);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch team member',
                'error' => $exception->getMessage()
            ], 500);
        }
    }

    public function getTeamMember($id)
    {
        try {
            $team_member = TeamMember::findOrFail($id);
            return response()->json([
                'status' => 'success',
                'message' => 'Team Member Retrieved Successfully',
                'data' => $team_member
            ], 200);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch team member',
                'error' => $exception->getMessage()
            ], 500);
        }
    }


    public function teamMemberDetails($id)
    {
        $team_member = TeamMember::find($id);
        return view('TeamMember::detail', compact('team_member'));
    }


    public function createTeamMember(Request $request)
    {
        try {
            // Delete Old Files if any
            $this->deleteOldFiles($request);

            // Prepare File Names & Paths
            $photoUrl = $this->handleFileUpload('photo', $request);
            $bannerUrl = $this->handleFileUpload('banner', $request);

            $team_member = TeamMember::create([
                'member_name' => $request->input('member_name'),
                'designation' => $request->input('designation'),
                'details' => $request->input('details'),
                'facebook' => $request->input('facebook'),
                'instagram' => $request->input('instagram'),
                'twitter' => $request->input('twitter'),
                'linkedin' => $request->input('linkedin'),
                'youtube' => $request->input('youtube'),
                'google' => $request->input('google'),
                'flickr' => $request->input('flickr'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'website' => $request->input('website'),
                'meta_title' => $request->input('meta_title'),
                'meta_keywords' => $request->input('meta_keywords'),
                'meta_description' => $request->input('meta_description'),
                'photo' => $photoUrl,
                'banner' => $bannerUrl,
            ]);

            // Save image paths to the database
            $team_member->photo = $photoUrl;
            $team_member->banner = $bannerUrl;
            $team_member->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Team Member Created Successfully!!',
            ], 201);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failure',
                'message' => 'Failed to create team member',
                'error' => $exception->getMessage(),
            ], 500);
        }
    }


    public function updateTeamMember(Request $request, $id)
    {
        try {
            $team_member = TeamMember::findOrFail($id);
            if (!$team_member) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'Team Member Not Found!!'
                ], 404);
            }

            // Delete Old Files if any
            $this->deleteOldFiles($request);

            // Prepare File Names & Paths
            $photoUrl = $this->handleFileUpload('photo', $request);
            $bannerUrl = $this->handleFileUpload('banner', $request);

            $team_member->update([
                'member_name' => $request->input('member_name'),
                'designation' => $request->input('designation'),
                'details' => $request->input('details'),
                'facebook' => $request->input('facebook'),
                'instagram' => $request->input('instagram'),
                'twitter' => $request->input('twitter'),
                'linkedin' => $request->input('linkedin'),
                'youtube' => $request->input('youtube'),
                'google' => $request->input('google'),
                'flickr' => $request->input('flickr'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'website' => $request->input('website'),
                'meta_title' => $request->input('meta_title'),
                'meta_keywords' => $request->input('meta_keywords'),
                'meta_description' => $request->input('meta_description'),
                'photo' => $photoUrl,
                'banner' => $bannerUrl,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Team Member Updated Successfully!!',
            ], 200);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failure',
                'message' => 'Update Failed',
                'error' => $exception->getMessage()
            ], 500);
        }
    }



    public function deleteTeamMember($id)
    {
        try {
            $team_member = TeamMember::findOrFail($id);
            if (!$team_member) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'Team Member Not Found!!'
                ], 404);
            }
            $team_member->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Team Member Deleted Successfully!!',
            ], 200);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failure',
                'message' => 'Delete Failed',
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
            $filePath = "/images/uploads/{$fileName}";
            $file->move(public_path('/images/uploads'), $fileName);
            return $filePath;
        }
        return null;
    }


    // Helper function to delete old files
    private function deleteOldFiles(Request $request)
    {
        $oldPhotoPath = $request->input('photo_path');
        $oldBannerPath = $request->input('banner_path');

        if ($oldPhotoPath && File::exists(public_path($oldPhotoPath))) {
            File::delete(public_path($oldPhotoPath));
        }
        if ($oldBannerPath && File::exists(public_path($oldBannerPath))) {
            File::delete(public_path($oldBannerPath));
        }
    }
}
