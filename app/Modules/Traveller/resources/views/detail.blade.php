<!-- resources/views/dashboard/destination/details.blade.php -->

@extends('dashboard')

@section('title', 'Traveller Details')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content-header">
            <div style="" class="row py-3">
                <div class="col">
                    <h4>Traveller Details</h4>
                </div>
                <div style="text-align: right;" class="col">
                    <a href="{{ url('/dashboard/traveller') }}" class="btn btn-primary codefotech_color">
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
                                <td class="d-none">{{ $traveller->id }}</td>
                            </tr>
                            <tr>
                                <td>Traveller Name</td>
                                <td class="">{{ $traveller->traveller_name }}</td>
                            </tr>
                            <tr>
                                <td>Traveller Email</td>
                                <td>{{ $traveller->traveller_email }}</td>
                            </tr>
                            <tr>
                                <td>Traveller Phone</td>
                                <td>{{ $traveller->traveller_phone }}</td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td>{{ $traveller->city }}</td>
                            </tr>
                            <tr>
                                <td>State</td>
                                <td>{{ $traveller->state }}</td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td>{{ $traveller->country }}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>{{ $traveller->address }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>{{ $traveller->status }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
