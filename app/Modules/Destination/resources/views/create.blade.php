@extends('dashboard')

@section('title', 'Destination Create')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content-header">
            <div style="" class="row py-3">
                <div class="col">
                    <h4>Destination Create</h4>
                </div>
                <div style="text-align: right;" class="col">
                    <a href="{{ url('/dashboard/destination') }}" class="btn btn-primary codefotech_color">
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
                                        <label for="destination_name" class="control-label">Destination Name
                                            <span>*</span></label>
                                        <div class="">
                                            <input type="text" class="form-control" id="destination_name" maxlength="255"
                                                autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="heading" class="control-label">Heading
                                            <span>*</span></label>
                                        <div class="">
                                            <input type="text" class="form-control" id="heading" maxlength="255"
                                                autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="short_description" class="control-label">Short Description </label>
                                        <div class="">
                                            <textarea class="form-control" id="short_description" style="height:70px;"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="package_heading" class="control-label">Package Heading
                                            <span>*</span></label>
                                        <div class="">
                                            <input type="text" class="form-control" id="package_heading" maxlength="255"
                                                autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="package_subheading" class="control-label">Package Subheading
                                            <span>*</span></label>
                                        <div class="">
                                            <input type="text" class="form-control" id="package_subheading"
                                                maxlength="255" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="detail_heading" class="control-label">Detail Heading
                                            <span>*</span></label>
                                        <div class="">
                                            <input type="text" class="form-control" id="detail_heading" maxlength="255"
                                                autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="detail_subheading" class="control-label">Detail Subheading
                                            <span>*</span></label>
                                        <div class="">
                                            <input type="text" class="form-control" id="detail_subheading"
                                                maxlength="255" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="introduction" class="control-label">Introduction </label>
                                        <div class="">
                                            <textarea class="form-control" id="introduction" style="height:120px;"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="experience" class="control-label">Experience </label>
                                        <div class="">
                                            <textarea class="form-control" id="experience" style="height:120px;"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="weather" class="control-label">Weather </label>
                                        <div class="">
                                            <textarea class="form-control" id="weather" style="height:120px;"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="hotel" class="control-label">Hotel </label>
                                        <div class="">
                                            <textarea class="form-control" id="hotel" style="height:120px;"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="transportation" class="control-label">Transportation </label>
                                        <div class="">
                                            <textarea class="form-control" id="transportation" style="height:120px;"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="culture" class="control-label">Culture </label>
                                        <div class="">
                                            <textarea class="form-control" id="culture" style="height:120px;"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <img id="newPhoto" src="{{ asset('assets-1/img/default-img.jpg') }}"
                                            style="height:80px;" />
                                        <br />

                                        <label class="form-label">Existing Photo</label>
                                        <input
                                            oninput="document.getElementById('newPhoto').src=window.URL.createObjectURL(this.files[0])"
                                            type="file" class="form-control" id="photoCreate">
                                    </div>

                                    <div class="form-group pb-3">
                                        <img id="newBanner" src="{{ asset('assets-1/img/default-img.jpg') }}"
                                            style="height:80px;" />
                                        <br />

                                        <label class="form-label">Existing Banner</label>
                                        <input
                                            oninput="document.getElementById('newBanner').src=window.URL.createObjectURL(this.files[0])"
                                            type="file" class="form-control" id="bannerCreate">
                                    </div>

                                    <div class="form-group">
                                        <div class="">
                                            <button class="btn btn-primary codefotech_color pull-left"
                                                onclick="createDestination()">Create</button>
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
        async function createDestination() {
            event.preventDefault();

            try {
                let destinationName = document.getElementById('destination_name').value;
                let heading = document.getElementById('heading').value;
                let shortDescription = document.getElementById('short_description').value;
                let packageHeading = document.getElementById('package_heading').value;
                let packageSubheading = document.getElementById('package_subheading').value;
                let detailHeading = document.getElementById('detail_heading').value;
                let detailSubheading = document.getElementById('detail_subheading').value;
                let introduction = document.getElementById('introduction').value;
                let experience = document.getElementById('experience').value;
                let weather = document.getElementById('weather').value;
                let hotel = document.getElementById('hotel').value;
                let transportation = document.getElementById('transportation').value;
                let culture = document.getElementById('culture').value;

                let photoCreate = document.getElementById('photoCreate').files[0];
                let bannerCreate = document.getElementById('bannerCreate').files[0];

                if (destinationName.length === 0) {
                    errorToast("Destination Name Required !");
                } else if (heading.length === 0) {
                    errorToast("Heading Required !");
                } else if (shortDescription.length === 0) {
                    errorToast("Short Description Required !");
                } else if (packageHeading.length === 0) {
                    errorToast("Package Heading Required !");
                } else if (packageSubheading.length === 0) {
                    errorToast("Package Subheading Required !");
                } else if (detailHeading.length === 0) {
                    errorToast("Detail Heading Required !");
                } else if (detailSubheading.length === 0) {
                    errorToast("Detail Subheading Required !");
                } else if (introduction.length === 0) {
                    errorToast("Introduction Required !");
                } else if (experience.length === 0) {
                    errorToast("Experience Required !");
                } else if (weather.length === 0) {
                    errorToast("Weather Required !");
                } else if (hotel.length === 0) {
                    errorToast("Hotel Required !");
                } else if (transportation.length === 0) {
                    errorToast("Transportation Required !");
                } else if (culture.length === 0) {
                    errorToast("Culture Required !");
                } else if (!photoCreate) {
                    errorToast("Photo Required !");
                } else if (!bannerCreate) {
                    errorToast("Banner Required !");
                } else {
                    let formData = new FormData();

                    formData.append('destination_name', destinationName);
                    formData.append('heading', heading);
                    formData.append('short_description', shortDescription);
                    formData.append('package_heading', packageHeading);
                    formData.append('package_subheading', packageSubheading);
                    formData.append('detail_heading', detailHeading);
                    formData.append('detail_subheading', detailSubheading);
                    formData.append('introduction', introduction);
                    formData.append('experience', experience);
                    formData.append('weather', weather);
                    formData.append('hotel', hotel);
                    formData.append('transportation', transportation);
                    formData.append('culture', culture);
                    formData.append('photo', photoCreate);
                    formData.append('banner', bannerCreate);


                    const config = {
                        header: {
                            'content-type': 'multipart/form-data'
                        }
                    }

                    let res = await axios.post('/dashboard/destination/create', formData, config);
                    console.log(res);

                    if (res.status === 201 && res.data.status === 'success') {
                        successToast(res.data.message);
                        // Redirect to the list page
                        window.location.href = '/dashboard/destination';
                    } else {
                        errorToast(res.data.message);
                    }
                }
            } catch (error) {
                console.error('Error creating destination:', error);
                errorToast('An error occurred while creating destination');
            }
        }
    </script>
@endsection
