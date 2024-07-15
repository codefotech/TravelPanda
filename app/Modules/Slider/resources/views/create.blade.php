@extends('dashboard')

@section('title', 'Slider Create')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content-header">
            <div style="" class="row py-3">
                <div class="col">
                    <h4>Slider Create</h4>
                </div>
                <div style="text-align: right;" class="col">
                    <a href="{{ url('/dashboard/slider') }}" class="btn btn-primary codefotech_color">
                        List
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="settings_nav" class="nav-tabs-custom">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="card shadow-sm p-3">
                                    <div class="form-group pb-3">
                                        <label for="heading" class="control-label">Heading
                                            <span>*</span></label>
                                        <div class="">
                                            <input type="text" class="form-control" id="heading" maxlength="255"
                                                   autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="content" class="control-label">Content </label>
                                        <div class="">
                                            <textarea class="form-control" id="content" style="height:70px;"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="button_text" class="control-label">Button Text
                                            <span>*</span></label>
                                        <div class="">
                                            <input type="text" class="form-control" id="button_text" maxlength="255"
                                                   autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="button_url" class="control-label">Button Url
                                            <span>*</span></label>
                                        <div class="">
                                            <input type="text" class="form-control" id="button_url" maxlength="255"
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
                                                    onclick="createSlider()">Create</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        async function createSlider() {
            event.preventDefault();

            try {
                let heading = document.getElementById('heading').value;
                let content = document.getElementById('content').value;
                let buttonText = document.getElementById('button_text').value;
                let buttonUrl = document.getElementById('button_url').value;

                let photoCreate = document.getElementById('photoCreate').files[0];

                if (heading.length === 0) {
                    errorToast("Heading Required !");
                } else if (content.length === 0) {
                    errorToast("Content Required !");
                } else if (buttonText.length === 0) {
                    errorToast("Button Text Required !");
                } else if (buttonUrl.length === 0) {
                    errorToast("Button Url Required !");
                } else if (!photoCreate) {
                    errorToast("Photo Required !");
                } else {
                    let formData = new FormData();

                    formData.append('heading', heading);
                    formData.append('content', content);
                    formData.append('button_text', buttonText);
                    formData.append('button_url', buttonUrl);
                    formData.append('photo', photoCreate);

                    const config = {
                        header: {
                            'content-type': 'multipart/form-data'
                        }
                    }

                    let res = await axios.post('/dashboard/slider/create', formData, config);
                    console.log(res);

                    if (res.status === 201 && res.data.status === 'success') {
                        successToast(res.data.message);
                        // Redirect to the list page
                        window.location.href = '/dashboard/slider';
                    } else {
                        errorToast(res.data.message);
                    }
                }
            } catch (error) {
                console.error('Error creating slider:', error);
                errorToast('An error occurred while creating slider');
            }
        }
    </script>
@endsection
