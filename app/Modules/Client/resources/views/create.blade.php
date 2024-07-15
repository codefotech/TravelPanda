@extends('dashboard')

@section('title', 'Client Create')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content-header">
            <div style="" class="row py-3">
                <div class="col">
                    <h4>Client Create</h4>
                </div>
                <div style="text-align: right;" class="col">
                    <a href="{{ url('/dashboard/client') }}" class="btn btn-primary codefotech_color">
                        List
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="card shadow-sm p-3">
                        <div class="form-group pb-3">
                            <label for="client_name" class="control-label">Client Name
                                <span>*</span></label>
                            <div class="">
                                <input type="text" class="form-control" id="client_name" maxlength="255"
                                       autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group pb-3">
                            <label for="url" class="control-label">Url
                                <span>*</span></label>
                            <div class="">
                                <input type="text" class="form-control" id="url" maxlength="255"
                                       autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group pb-3">
                            <img id="newPhoto" src="{{ asset('assets-1/img/default-img.jpg') }}"
                                 style="height:120px;" />
                            <br />

                            <label class="form-label">Existing Photo</label>
                            <input
                                oninput="document.getElementById('newPhoto').src=window.URL.createObjectURL(this.files[0])"
                                type="file" class="form-control" id="photoCreate">
                        </div>

                        <div class="form-group">
                            <div class="">
                                <button class="btn btn-primary codefotech_color pull-left"
                                        onclick="createClient()">Create</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        async function createClient() {
            event.preventDefault();

            try {
                let clientName = document.getElementById('client_name').value;
                let url = document.getElementById('url').value;

                let photoCreate = document.getElementById('photoCreate').files[0];

                if (clientName.length === 0) {
                    errorToast("Client Name Required !");
                } else if (url.length === 0) {
                    errorToast("Url Required !");
                } else if (!photoCreate) {
                    errorToast("Photo Required !");
                } else {
                    let formData = new FormData();

                    formData.append('client_name', clientName);
                    formData.append('url', url);
                    formData.append('photo', photoCreate);

                    const config = {
                        header: {
                            'content-type': 'multipart/form-data'
                        }
                    }

                    let res = await axios.post('/dashboard/client/create', formData, config);
                    console.log(res);

                    if (res.status === 201 && res.data.status === 'success') {
                        successToast(res.data.message);
                        // Redirect to the list page
                        window.location.href = '/dashboard/client';
                    } else {
                        errorToast(res.data.message);
                    }
                }
            } catch (error) {
                console.error('Error creating client:', error);
                errorToast('An error occurred while creating client');
            }
        }
    </script>
@endsection
