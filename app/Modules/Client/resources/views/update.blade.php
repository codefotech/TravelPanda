@extends('dashboard')

@section('title', 'Client Update')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content-header">
            <div style="" class="row py-3">
                <div class="col">
                    <h4>Client Update</h4>
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
                        <input type="hidden" id="client_id" value="{{ $id }}">

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
                            <label for="" class="control-label">Existing Photo</label>
                            <div class="pt-3">
                                <img src="{{ asset($clientData['photo'] ?? 'assets-1/img/default-img.jpg') }}"
                                     class="existing-photo" id="oldPhoto" style="height:80px;">
                                <br><br>
                                <input
                                    oninput="document.getElementById('oldPhoto').src = window.URL.createObjectURL(this.files[0])"
                                    type="file" class="form-control" id="photoUpdate">
                                <br>
                                <input type="text" class="form-control" id="photoFilePath"
                                       value="{{ $clientData['photo'] ?? '' }}" readonly disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="">
                                <div class="">
                                    <button class="btn btn-success pull-left" type="button"
                                            onclick="updateClient()">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        async function getClient() {
            let id = document.getElementById('client_id').value;
            try {
                let res = await axios.get(`/dashboard/client/get/${id}`);
                if (res.status === 200 && res.data.status === 'success') {
                    let data = res.data.data;
                    document.getElementById('client_name').value = data.client_name;
                    document.getElementById('url').value = data.url;

                    // Set paths for images
                    document.getElementById('photoFilePath').value = data.photo ?? '';
                    document.getElementById('oldPhoto').src = data.photo ??
                        '{{ asset('assets-1/img/default-img.jpg') }}';
                } else {
                    errorToast('Failed to fetch client');
                }
            } catch (error) {
                console.error('Error fetching client:', error);
                errorToast('An error occurred while fetching client');
            }
        }


        async function updateClient() {
            event.preventDefault();
            try {
                let id = document.getElementById('client_id').value;
                let clientName = document.getElementById('client_name').value;
                let url = document.getElementById('url').value;

                // Get file inputs
                let photoUpdate = document.getElementById('photoUpdate').files[0];

                if (clientName.length === 0) {
                    errorToast("Client Name Required !");
                } else if (url.length === 0) {
                    errorToast("Url Required !");
                } else {
                    let formData = new FormData();

                    formData.append('client_name', clientName);
                    formData.append('url', url);
                    formData.append('photo', photoUpdate);

                    const config = {
                        header: {
                            'content-type': 'multipart/form-data'
                        }
                    }

                    let res = await axios.post(`/dashboard/client/update/${id}`, formData, config);
                    console.log(res);

                    if (res.status === 200 && res.data.status === 'success') {
                        successToast(res.data.message);
                        // refresh update page
                        await getClient();
                    } else {
                        errorToast(res.data.message);
                    }
                }

            } catch (error) {
                console.error('Error updating client:', error);
                errorToast('An error occurred while updating client');
            }
        }

        // Initial fetch of destination data when page loads
        document.addEventListener('DOMContentLoaded', async () => {
            await getClient();
        });
    </script>

@endsection
