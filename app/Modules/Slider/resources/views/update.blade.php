@extends('dashboard')

@section('title', 'Slider Update')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content-header">
            <div style="" class="row py-3">
                <div class="col">
                    <h4>Slider Update</h4>
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
                                    <input type="hidden" id="slider_id" value="{{ $id }}">

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
                                        <label for="" class="control-label">Existing Photo</label>
                                        <div class="pt-3">
                                            <img src="{{ asset($sliderData['photo'] ?? 'assets-1/img/default-img.jpg') }}"
                                                 class="existing-photo" id="oldPhoto" style="height:80px;">
                                            <br><br>
                                            <input
                                                oninput="document.getElementById('oldPhoto').src = window.URL.createObjectURL(this.files[0])"
                                                type="file" class="form-control" id="photoUpdate">
                                            <br>
                                            <input type="text" class="form-control" id="photoFilePath"
                                                   value="{{ $sliderData['photo'] ?? '' }}" readonly disabled>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="">
                                            <div class="">
                                                <button class="btn btn-success pull-left" type="button"
                                                        onclick="updateSlider()">Update</button>
                                            </div>
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
        async function getSlider() {
            let id = document.getElementById('slider_id').value;
            try {
                let res = await axios.get(`/dashboard/slider/get/${id}`);
                if (res.status === 200 && res.data.status === 'success') {
                    let data = res.data.data;
                    document.getElementById('heading').value = data.heading;
                    document.getElementById('content').value = data.content;
                    document.getElementById('button_text').value = data.button_text;
                    document.getElementById('button_url').value = data.button_url;

                    // Set paths for images
                    document.getElementById('photoFilePath').value = data.photo ?? '';
                    document.getElementById('oldPhoto').src = data.photo ??
                        '{{ asset('assets-1/img/default-img.jpg') }}';
                } else {
                    errorToast('Failed to fetch slider');
                }
            } catch (error) {
                console.error('Error fetching slider:', error);
                errorToast('An error occurred while fetching slider');
            }
        }


        async function updateSlider() {
            event.preventDefault();
            try {
                let id = document.getElementById('slider_id').value;
                let heading = document.getElementById('heading').value;
                let content = document.getElementById('content').value;
                let buttonText = document.getElementById('button_text').value;
                let buttonUrl = document.getElementById('button_url').value;

                // Get file inputs
                let photoUpdate = document.getElementById('photoUpdate').files[0];

                if (heading.length === 0) {
                    errorToast("Heading Required !");
                } else if (content.length === 0) {
                    errorToast("Content Required !");
                } else if (buttonText.length === 0) {
                    errorToast("Button Text Required !");
                } else if (buttonUrl.length === 0) {
                    errorToast("Button Url Required !");
                } else {
                    let formData = new FormData();

                    formData.append('heading', heading);
                    formData.append('content', content);
                    formData.append('button_text', buttonText);
                    formData.append('button_url', buttonUrl);
                    formData.append('photo', photoUpdate);

                    const config = {
                        header: {
                            'content-type': 'multipart/form-data'
                        }
                    }

                    let res = await axios.post(`/dashboard/slider/update/${id}`, formData, config);
                    console.log(res);

                    if (res.status === 200 && res.data.status === 'success') {
                        successToast(res.data.message);
                        // refresh update page
                        await getSlider();
                    } else {
                        errorToast(res.data.message);
                    }
                }

            } catch (error) {
                console.error('Error updating slider:', error);
                errorToast('An error occurred while updating slider');
            }
        }

        // Initial fetch of destination data when page loads
        document.addEventListener('DOMContentLoaded', async () => {
            await getSlider();
        });
    </script>

@endsection
