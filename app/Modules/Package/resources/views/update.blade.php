@extends('dashboard')

@section('title', 'Update Package')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content-header">
            <div class="row py-3">
                <div class="col">
                    <h4>Package Update</h4>
                </div>
                <div style="text-align: right;" class="col">
                    <a href="{{ url('/dashboard/packageList') }}" class="btn btn-primary codefotech_color">
                        List
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form id="updatePackageForm" class="form-horizontal" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="card shadow-sm p-3">

                        <input type="hidden" id="package_id" value="{{ $id }}">

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

                        <!-- Photo -->
                        <div class="form-group pb-3">
                            <label for="" class="control-label">Existing Photo</label>
                            <div class="pt-3">
                                <img src="{{ asset($packageData['photo'] ?? 'assets-1/img/default-img.jpg') }}"
                                    class="existing-photo" id="oldPhoto" style="height:80px;">
                                <br><br>
                                <input
                                    oninput="document.getElementById('oldPhoto').src = window.URL.createObjectURL(this.files[0])"
                                    type="file" class="form-control" id="photoUpdate">

                                <br>
                                <input type="text" class="form-control" id="photoFilePath"
                                    value="{{ $packageData['photo'] ?? '' }}" readonly disabled>
                            </div>
                        </div>


                        <!-- Banner -->
                        <div class="form-group pb-3">
                            <label for="" class="control-label">Existing Banner</label>
                            <div class="pt-3">
                                <img src="{{ asset($packageData['banner'] ?? 'assets-1/img/default-img.jpg') }}"
                                    class="existing-photo" id="oldBanner" style="height:200px; width: 100%">
                                <br><br>
                                <input
                                    oninput="document.getElementById('oldBanner').src = window.URL.createObjectURL(this.files[0])"
                                    type="file" class="form-control" id="bannerUpdate">
                                <br>
                                <input type="text" class="form-control" id="bannerFilePath"
                                    value="{{ $packageData['banner'] ?? '' }}" readonly disabled>
                            </div>
                        </div>

                        <!-- Tour Photos -->
                        <div class="form-group pb-3">
                            <label for="" class="control-label">Existing Photo</label>
                            <div class="pt-3">
                                <img src="{{ asset($packageData['tour_photos'] ?? 'assets-1/img/default-img.jpg') }}"
                                    class="existing-photo" id="oldTourPhotos" style="height:80px;">
                                <br><br>
                                <input
                                    oninput="document.getElementById('oldTourPhotos').src = window.URL.createObjectURL(this.files[0])"
                                    type="file" class="form-control" id="tourPhotosUpdate">
                                <br>
                                <input type="text" class="form-control" id="tourPhotosFilePath"
                                    value="{{ $packageData['tour_photos'] ?? '' }}" readonly disabled>
                            </div>
                        </div>

                        <!-- Tour Videos -->
                        <div class="form-group pb-3">
                            <label for="" class="control-label">Existing Tour Videos</label>
                            <div class="pt-3">
                                <video controls style="height: auto; max-width: 100%;" id="oldTourVideos">
                                    <source
                                        src="{{ asset($packageData['tour_videos'] ?? 'assets-1/video/default-video.mp4') }}"
                                        type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <br><br>
                                <input
                                    oninput="document.getElementById('tourVideos').src = window.URL.createObjectURL(this.files[0])"
                                    type="file" class="form-control" id="tourVideosUpdate">
                                <br>
                                <input type="text" class="form-control" id="tourVideosFilePath"
                                    value="{{ $packageData['tour_videos'] ?? '' }}" readonly disabled>
                            </div>
                        </div>


                        <!-- Submit Button -->
                        <div class="form-group">
                            <button onclick="updatePackage()" class="btn btn-success codefotech_color">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        async function getPackages() {

            let id = document.getElementById('package_id').value;
            try {
                let res = await axios.get(`/dashboard/package/get/${id}`);
                if (res.status === 200 && res.data.status === 'success') {
                    let data = res.data.data;
                    document.getElementById('package_name').value = data.package_name;
                    document.getElementById('destination_name').value = data.destination_name;
                    document.getElementById('description').value = data.description;
                    document.getElementById('short_description').value = data.short_description;
                    document.getElementById('location').value = data.location;
                    document.getElementById('tour_start_date').value = data.tour_start_date;
                    document.getElementById('tour_end_date').value = data.tour_end_date;
                    document.getElementById('last_booking_date').value = data.last_booking_date;
                    document.getElementById('map').value = data.map;
                    document.getElementById('itinerary').value = data.itinerary;
                    document.getElementById('price').value = data.price;
                    document.getElementById('policy').value = data.policy;
                    document.getElementById('terms_and_conditions').value = data.terms_and_conditions;
                    document.getElementById('featured').value = data.featured;
                    // Set paths for images
                    document.getElementById('photoFilePath').value = data.photo ?? '';
                    document.getElementById('oldPhoto').src = data.photo ??
                        '{{ asset('assets-1/img/default-img.jpg') }}';

                    document.getElementById('bannerFilePath').value = data.banner ?? '';
                    document.getElementById('oldBanner').src = data.banner ??
                        '{{ asset('assets-1/img/default-img.jpg') }}';

                    document.getElementById('tourPhotosFilePath').value = data.tour_photos ?? '';
                    document.getElementById('oldTourPhotos').src = data.tour_photos ??
                        '{{ asset('assets-1/img/default-img.jpg') }}';

                    document.getElementById('tourVideosFilePath').value = data.tour_videos ?? '';
                    document.getElementById('oldTourVideos').src = data.tour_videos ??
                        '{{ asset('assets-1/video/default-video.mp4') }}';
                } else {
                    errorToast('Failed to fetch package');
                }
            }
            catch (error) {
                console.error('Error fetching package:', error);
                errorToast('An error occurred while fetching package');
            }
        }



        async function updatePackage() {
            event.preventDefault();
            try {
                let id = document.getElementById('package_id').value;

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

                let featuredPhoto = document.getElementById('photoUpdate').files[0];
                let banner = document.getElementById('bannerUpdate').files[0];
                let tourPhotos = document.getElementById('tourPhotosUpdate').files[0];
                let tourVideos = document.getElementById('tourVideosUpdate').files[0];

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
                } else if (price.length === 0) {
                    errorToast("price Required !");
                } else if (policy.length === 0) {
                    errorToast("Policy Required !");
                } else if (termsAndConditions.length === 0) {
                    errorToast("Terms And Conditions Required !");
                } else if (featured.length === 0) {
                    errorToast("Featured Required !");
                } else {
                    let formData = new FormData();

                    formData.append('package_name', packageName);
                    formData.append('destination_name', destinationName);
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
                    formData.append('photo', featuredPhoto);
                    formData.append('banner', banner);
                    formData.append('tour_photos', tourPhotos);
                    formData.append('tour_videos', tourVideos);

                    const config = {
                        header: {
                            'content-type': 'multipart/form-data'
                        }
                    }

                    let res = await axios.post(`/dashboard/package/update/${id}`, formData, config);
                    console.log(res);

                    if (res.status === 201 && res.data.status === 'success') {
                        successToast(res.data.message);
                        // // Redirect to the list page
                        // window.location.href = '/dashboard/packageList';
                    } else {
                        errorToast(res.data.message);
                    }
                }

            } catch (error) {
                console.error('Error updating package:', error);
                errorToast('An error occurred while updating package');
            }
        }

        // Initial fetch of package data when page loads
        document.addEventListener('DOMContentLoaded', async () => {
            await getPackages();
        });
    </script>
@endsection
