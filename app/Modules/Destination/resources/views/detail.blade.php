<!-- resources/views/dashboard/destination/details.blade.php -->

@extends('dashboard')

@section('title', 'Destination Details')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content-header">
            <div style="" class="row py-3">
                <div class="col">
                    <h4>Destination Details</h4>
                </div>
                <div style="text-align: right;" class="col">
                    <a href="{{ url('/dashboard/destination') }}" class="btn btn-primary codefotech_color">
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
                            <td class="d-none">{{ $destination->id }}</td>
                        </tr>
                        <tr>
                            <td>Destination Name</td>
                            <td class="">{{ $destination->destination_name }}</td>
                        </tr>
                        <tr>
                            <td>Featured Photo</td>
                            <td>{{ $destination->heading }}</td>
                        </tr>
                        <tr>
                            <td>Short Description</td>
                            <td>{{ $destination->short_description }}</td>
                        </tr>
                        <tr>
                            <td>Package Heading</td>
                            <td>{{ $destination->package_heading }}</td>
                        </tr>
                        <tr>
                            <td>Package Subheading</td>
                            <td>{{ $destination->package_subheading }}</td>
                        </tr>
                        <tr>
                            <td>Detail Heading</td>
                            <td>{{ $destination->detail_heading }}</td>
                        </tr>
                        <tr>
                            <td>Detail Subheading</td>
                            <td>{{ $destination->detail_subheading }}</td>
                        </tr>
                        <tr>
                            <td>Introduction</td>
                            <td>{{ $destination->introduction }}</td>
                        </tr>
                        <tr>
                            <td>Experience</td>
                            <td>{{ $destination->experience }}</td>
                        </tr>
                        <tr>
                            <td>Weather</td>
                            <td>{{ $destination->weather }}</td>
                        </tr>
                        <tr>
                            <td>Hotel</td>
                            <td>{{ $destination->hotel }}</td>
                        </tr>
                        <tr>
                            <td>Transportation</td>
                            <td>{{ $destination->transportation }}</td>
                        </tr>
                        <tr>
                            <td>Culture</td>
                            <td>{{ $destination->culture }}</td>
                        </tr>
                        <tr>
                            <td>Photo</td>
                            <td><img style="width:120px;" src="{{ $destination->photo }}"></td>
                        </tr>
                        <tr>
                            <td>Banner</td>
                            <td><img style="height:200px; width: 100%" src="{{ $destination->banner }}"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
