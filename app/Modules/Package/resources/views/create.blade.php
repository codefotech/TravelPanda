@extends('dashboard')

@section('title', 'Create Package')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content-header">
            <div class="row py-3">
                <div class="col">
                    <h4>Create Package</h4>
                </div>
                <div style="text-align: right;" class="col">
                    <a href="{{ url('/dashboard/packageList') }}" class="btn btn-primary codefotech_color">
                        Back to List
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="card shadow-sm p-3">
                        <!-- Package Name -->
                        <div class="form-group pb-3">
                            <label for="package_name" class="control-label">Package Name <span>*</span></label>
                            <input type="text" class="form-control" id="package_name" name="package_name" maxlength="255"
                                autocomplete="off">
                        </div>

                        <!-- Destination Name -->
                        <div class="form-group pb-3">
                            <label for="destination_name" class="control-label">Destination Name <span>*</span></label>
                            <input type="text" class="form-control" id="destination_name" name="destination_name"
                                maxlength="255" autocomplete="off">
                        </div>

                        <!-- Description -->
                        <div class="form-group pb-3">
                            <label for="description" class="control-label">Description</label>
                            <textarea class="form-control" id="description" name="description" style="height:120px;"></textarea>
                        </div>

                        <!-- Short Description -->
                        <div class="form-group pb-3">
                            <label for="short_description" class="control-label">Short Description</label>
                            <textarea class="form-control" id="short_description" name="short_description" style="height:70px;"></textarea>
                        </div>

                        <!-- Location -->
                        <div class="form-group pb-3">
                            <label for="location" class="control-label">Location</label>
                            <textarea class="form-control" id="location" name="location" style="height:70px;"></textarea>
                        </div>

                        <!-- Tour Dates -->
                        <div class="form-group pb-3">
                            <label for="tour_start_date" class="control-label">Tour Start Date <span>*</span></label>
                            <input type="date" class="form-control" id="tour_start_date" name="tour_start_date"
                                maxlength="255" autocomplete="off">
                        </div>

                        <div class="form-group pb-3">
                            <label for="tour_end_date" class="control-label">Tour End Date <span>*</span></label>
                            <input type="date" class="form-control" id="tour_end_date" name="tour_end_date"
                                maxlength="255" autocomplete="off">
                        </div>

                        <!-- Last Booking Date -->
                        <div class="form-group pb-3">
                            <label for="last_booking_date" class="control-label">Last Booking Date <span>*</span></label>
                            <input type="date" class="form-control" id="last_booking_date" name="last_booking_date"
                                maxlength="255" autocomplete="off">
                        </div>

                        <!-- Map -->
                        <div class="form-group pb-3">
                            <label for="map" class="control-label">Map</label>
                            <textarea class="form-control" id="map" name="map" style="height:120px;"></textarea>
                        </div>

                        <!-- Itinerary -->
                        <div class="form-group pb-3">
                            <label for="itinerary" class="control-label">Itinerary</label>
                            <textarea class="form-control" id="itinerary" name="itinerary" style="height:120px;"></textarea>
                        </div>

                        <!-- Price -->
                        <div class="form-group pb-3">
                            <label for="price" class="control-label">Price (per person) <span>*</span></label>
                            <input type="text" class="form-control" id="price" name="price" maxlength="255"
                                autocomplete="off">
                        </div>

                        <!-- Policy -->
                        <div class="form-group pb-3">
                            <label for="policy" class="control-label">Policy</label>
                            <textarea class="form-control" id="policy" name="policy" style="height:120px;"></textarea>
                        </div>

                        <!-- Terms and Conditions -->
                        <div class="form-group pb-3">
                            <label for="terms_and_conditions" class="control-label">Terms and Conditions</label>
                            <textarea class="form-control" id="terms_and_conditions" name="terms_and_conditions" style="height:120px;"></textarea>
                        </div>

                        <!-- Featured -->
                        <div class="form-group pb-3">
                            <label for="featured" class="control-label">Is Featured?</label>
                            <select id="featured" class="form-control" name="featured">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        <!-- Featured Photo -->
                        <div class="form-group pb-3">
                            <img id="newPhoto" src="{{ asset('assets-1/img/default-img.jpg') }}"
                                style="height:80px;" />
                            <br />

                            <label class="form-label">Existing Photo</label>
                            <input
                                oninput="document.getElementById('newPhoto').src=window.URL.createObjectURL(this.files[0])"
                                type="file" class="form-control" id="photoCreate">
                        </div>

                        <!-- Banner -->
                        <div class="form-group pb-3">
                            <img id="newBanner" src="{{ asset('assets-1/img/default-img.jpg') }}"
                                style="height:80px;" />
                            <br />

                            <label class="form-label">Existing Banner</label>
                            <input
                                oninput="document.getElementById('newBanner').src=window.URL.createObjectURL(this.files[0])"
                                type="file" class="form-control" id="bannerCreate">
                        </div>

                        <!-- Tour Photos -->
                        <div class="form-group pb-3">
                            <img id="newTourPhotos" src="{{ asset('assets-1/img/default-img.jpg') }}"
                                style="height:80px;" />
                            <br />

                            <label class="form-label">Existing Tour Photos</label>
                            <input
                                oninput="document.getElementById('newTourPhotos').src=window.URL.createObjectURL(this.files[0])"
                                type="file" class="form-control" id="TourPhotosCreate">
                        </div>

                        <!-- Tour Videos -->
                        <div class="form-group pb-3">
                            <iframe id="newTourVideos" width="100%" height="480"
                                src="https://www.youtube.com/embed/F2sepCUnENg"
                                title="Buenos Aires Vacation Travel Guide | Expedia" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <br />
                            <label class="form-label">Tour Videos</label>
                            <input
                                oninput="newTourVideos.src=window.URL.createObjectURL(this.files[0]); newTourVideos.style.display='block';"
                                type="file" class="form-control" id="TourVideosCreate">
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group">
                            <button onclick="createPackage()" class="btn btn-primary codefotech_color">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        async function createPackage() {
            event.preventDefault();

            try {
                let packageName = document.getElementById('package_name').value;
                let destinationName = document.getElementById('destination_name').value;
                let description = document.getElementById('description').value;
                let shortDescription = document.getElementById('short_description').value;
                let location = document.getElementById('location').value;
                let tourStartDate = document.getElementById('tour_start_date').value;
                let tourEndDate = document.getElementById('tour_end_date').value;
                let lastBookingDate = document.getElementById('last_booking_date').value;
                let map = document.getElementById('map').value;
                let itinerary = document.getElementById('itinerary').value;
                let price = document.getElementById('price').value;
                let policy = document.getElementById('policy').value;
                let termsAndConditions = document.getElementById('terms_and_conditions').value;
                let featured = document.getElementById('featured').value;

                let photoCreate = document.getElementById('photoCreate').files[0];
                let bannerCreate = document.getElementById('bannerCreate').files[0];
                let tourPhotosCreate = document.getElementById('TourPhotosCreate').files[0];
                let tourVideosCreate = document.getElementById('TourVideosCreate').files[0];


                if (packageName.length === 0) {
                    errorToast("Package Name Required !");
                } else if (destinationName.length === 0) {
                    errorToast("Destination Name Required !");
                } else if (description.length === 0) {
                    errorToast("Description Required !");
                } else if (shortDescription.length === 0) {
                    errorToast("Short Description Required !");
                } else if (location.length === 0) {
                    errorToast("Location Required !");
                } else if (tourStartDate.length === 0) {
                    errorToast("Tour Start Date Required !");
                } else if (tourEndDate.length === 0) {
                    errorToast("Tour End Date Required !");
                } else if (lastBookingDate.length === 0) {
                    errorToast("Last Booking Date Required !");
                } else if (map.length === 0) {
                    errorToast("Map Required !");
                } else if (itinerary.length === 0) {
                    errorToast("Itinerary Required !");
                } else if (price.length === 0 || isNaN(price)) {
                    errorToast("Price Required and must be a number!");
                } else if (policy.length === 0) {
                    errorToast("Policy Required !");
                } else if (termsAndConditions.length === 0) {
                    errorToast("Terms And Conditions Required !");
                } else if (featured.length === 0) {
                    errorToast("Featured Required !");
                } else if (!photoCreate) {
                    errorToast("Photo Required !");
                } else if (!bannerCreate) {
                    errorToast("Banner Required !");
                } else if (!tourPhotosCreate) {
                    errorToast("Tour Photos Required !");
                } else if (!tourVideosCreate) {
                    errorToast("Tour Videos Required !");
                } else {
                    let formData = new FormData();

                    formData.append('package_name', packageName);
                    formData.append('destination_name',destinationName);
                    formData.append('description', description);
                    formData.append('short_description', shortDescription);
                    formData.append('location', location);
                    formData.append('tour_start_date', tourStartDate);
                    formData.append('tour_end_date', tourEndDate);
                    formData.append('last_booking_date', lastBookingDate);
                    formData.append('map', map);
                    formData.append('itinerary', itinerary);
                    formData.append('price', price);
                    formData.append('policy', policy);
                    formData.append('terms_and_conditions', termsAndConditions);
                    formData.append('featured', featured);
                    formData.append('featured_photo', photoCreate);
                    formData.append('banner', bannerCreate);
                    formData.append('tour_photos', tourPhotosCreate);
                    formData.append('tour_videos', tourVideosCreate);

                    const config = {
                        headers: {
                            'content-type': 'multipart/form-data'
                        }
                    }

                    let res = await axios.post('/dashboard/package/create', formData, config);
                    console.log(res);

                    if (res.status === 201 && res.data.status === 'success') {
                        successToast(res.data.message);
                        // Redirect to the list page
                        window.location.href = '/dashboard/packageList';
                    } else {
                        errorToast(res.data.message);
                    }
                }
            } catch (error) {
                console.error('Error creating package:', error);
                errorToast('An error occurred while creating package');
            }
        }
    </script>
@endsection
