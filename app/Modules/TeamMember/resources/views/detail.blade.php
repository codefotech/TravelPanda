<!-- resources/views/dashboard/destination/details.blade.php -->

@extends('dashboard')

@section('title', 'Team Member Details')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content-header">
            <div style="" class="row py-3">
                <div class="col">
                    <h4>Team Member Details</h4>
                </div>
                <div style="text-align: right;" class="col">
                    <a href="{{ url('/dashboard/team_member') }}" class="btn btn-primary codefotech_color">
                        List
                    </a>
                </div>
            </div>
        </div>

        <div class="row py-4 align-items-center justify-content-center">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="card overflow-auto">
                    <table class="table table-striped table-bordered dt-responsive" cellspacing="0" width="100%">
                        <thead>
                        <tr class="bg-label-primary">
                            <th>Field</th>
                            <th>Value</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="d-none">ID</td>
                            <td class="d-none">{{ $team_member->id }}</td>
                        </tr>
                        <tr>
                            <td>Member Name</td>
                            <td class="">{{ $team_member->member_name }}</td>
                        </tr>
                        <tr>
                            <td>Designation</td>
                            <td class="">{{ $team_member->designation }}</td>
                        </tr>
                        <tr>
                            <td>Details</td>
                            <td>{{ $team_member->details }}</td>
                        </tr>
                        <tr>
                            <td>Facebook</td>
                            <td>{{ $team_member->facebook }}</td>
                        </tr>
                        <tr>
                            <td>Instagram</td>
                            <td>{{ $team_member->instagram }}</td>
                        </tr>
                        <tr>
                            <td>Twitter</td>
                            <td>{{ $team_member->twitter }}</td>
                        </tr>
                        <tr>
                            <td>Linkedin</td>
                            <td>{{ $team_member->linkedin }}</td>
                        </tr>
                        <tr>
                            <td>YouTube</td>
                            <td>{{ $team_member->youtube }}</td>
                        </tr>
                        <tr>
                            <td>Facebook</td>
                            <td>{{ $team_member->google }}</td>
                        </tr>
                        <tr>
                            <td>Flickr</td>
                            <td>{{ $team_member->flickr }}</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>{{ $team_member->phone }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $team_member->email }}</td>
                        </tr>
                        <tr>
                            <td>Website</td>
                            <td>{{ $team_member->website }}</td>
                        </tr>
                        <tr>
                            <td>Meta Title</td>
                            <td>{{ $team_member->meta_title }}</td>
                        </tr>
                        <tr>
                            <td>Meta Keywords</td>
                            <td>{{ $team_member->meta_keywords }}</td>
                        </tr>
                        <tr>
                            <td>Meta Description</td>
                            <td>{{ $team_member->meta_description }}</td>
                        </tr>
                        <tr>
                            <td>Photo</td>
                            <td><img style="height:120px;" src="{{ $team_member->photo }}"></td>
                        </tr>
                        <tr>
                            <td>Banner</td>
                            <td><img style="height:120px;" src="{{ $team_member->banner }}"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
