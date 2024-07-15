<?php

use App\Modules\TeamMember\Http\Controllers\TeamMemberController;
use Illuminate\Support\Facades\Route;


Route::group(['Module'=>'TeamMember'], function () {
// Web routes
    Route::get('/dashboard/team_member', [TeamMemberController::class, 'index']);
    Route::get('/dashboard/team_member_create', [TeamMemberController::class, 'teamMemberCreate']);
    Route::get('/dashboard/team_member_update/{id}', [TeamMemberController::class, 'teamMemberUpdate']);
    Route::get('/dashboard/team_member_details/{id}', [TeamMemberController::class, 'teamMemberDetails']);

// API routes
    Route::get('/dashboard/team_member/all', [TeamMemberController::class, 'allTeamMember']);
    Route::get('/dashboard/team_member/get/{id}', [TeamMemberController::class, 'getTeamMember']);
    Route::post('/dashboard/team_member/create', [TeamMemberController::class, 'createTeamMember']);
    Route::post('/dashboard/team_member/update/{id}', [TeamMemberController::class, 'updateTeamMember']);
    Route::post('/dashboard/team_member/delete/{id}', [TeamMemberController::class, 'deleteTeamMember']);
});
