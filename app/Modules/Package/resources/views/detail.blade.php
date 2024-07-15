<!-- resources/views/dashboard/package/details.blade.php -->

@extends('dashboard')

@section('title', 'Package Details')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content-header">
            <div style="" class="row py-3">
                <div class="col">
                    <h4>Package Details</h4>
                </div>
                <div style="text-align: right;" class="col">
                    <a href="{{ url('/dashboard/package') }}" class="btn btn-primary codefotech_color">
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
                            <td class="d-none">{{ $package->id }}</td>
                        </tr>
                        <tr>
                            <td>Package Name</td>
                            <td class="">{{ $package->package_name }}</td>
                        </tr>
                        <tr>
                            <td>Destination Name</td>
                            <td>{{ $package->destination_name }}</td>
                        </tr>
                        <tr>
                            <td>Short Description</td>
                            <td>{{ $package->short_description }}</td>
                        </tr>
                        <tr>
                            <td>Location</td>
                            <td>{{ $package->location }}</td>
                        </tr>
                        <tr>
                            <td>Tour Start Date</td>
                            <td>{{ $package->tour_start_date }}</td>
                        </tr>
                        <tr>
                            <td>Tour End Date</td>
                            <td>{{ $package->tour_end_date }}</td>
                        </tr>
                        <tr>
                            <td>Last Booking Date</td>
                            <td>{{ $package->last_booking_date }}</td>
                        </tr>
                        <tr>
                            <td>Map</td>
                            <td>{{ $package->map }}</td>
                        </tr>
                        <tr>
                            <td>Itinerary</td>
                            <td>{{ $package->itinerary }}</td>
                        </tr>
                        <tr>
                            <td>Price (per person)</td>
                            <td>{{ $package->price }}</td>
                        </tr>
                        <tr>
                            <td>Policy</td>
                            <td>{{ $package->policy }}</td>
                        </tr>
                        <tr>
                            <td>Terms and Conditions</td>
                            <td>{{ $package->terms_and_conditions }}</td>
                        </tr>
                        <tr>
                            <td>Is Featured?</td>
                            <td>{{ $package->featured }}</td>
                        </tr>
                        <tr>
                            <td>Featured Photo</td>
                            <td><img style="height:120px;" src="{{ $package->photo }}"></td>
                        </tr>
                        <tr>
                            <td>Banner</td>
                            <td><img style="height:200px; width: 100%" src="{{ $package->banner }}"></td>
                        </tr>
                        <tr>
                            <td>Tour Photos</td>
                            <td><img style="height:120px;" src="{{ $package->tour_photos }}"></td>
                        </tr>
                        <tr>
                            <td>Tour Videos</td>
                            <td><img style="height:auto;" src="{{ $package->tour_videos }}"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
