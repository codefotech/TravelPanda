@extends('dashboard')

@section('title', 'Client Details')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content-header">
            <div style="" class="row py-3">
                <div class="col">
                    <h4>Client Details</h4>
                </div>
                <div style="text-align: right;" class="col">
                    <a href="{{ url('/dashboard/client') }}" class="btn btn-primary codefotech_color">
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
                            <td class="d-none">{{ $client->id }}</td>
                        </tr>
                        <tr>
                            <td>Client Name</td>
                            <td class="">{{ $client->client_name }}</td>
                        </tr>
                        <tr>
                            <td>Url</td>
                            <td class="">{{ $client->url }}</td>
                        </tr>
                        <tr>
                            <td>Photo</td>
                            <td><img style="width:120px;" src="{{ $client->photo }}"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
