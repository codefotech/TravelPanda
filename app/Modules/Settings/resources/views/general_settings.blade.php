<!-- general_settings.blade.php -->

@extends('dashboard')

@section('title', 'General Settings')

@section('main_content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content-header">
            <h4>General Settings</h4>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="settings_nav" class="nav-tabs-custom">
                    <div class="row">

                        <div class="col-md-4">
                            <aside id="layout-menu" style="overflow-y: auto; overflow-x: hidden;"
                                class="menu-vertical menu bg-menu-theme py-3 rounded ps w-100">

                                <ul class="nav flex-column nav-pills menu-inner py-1 px-4 ps" role="tablist">
                                    <!-- Logo Menu Button -->
                                    <li class="nav-item">
                                        <a href="#tab_1" class="nav-link active" data-bs-toggle="pill" role="tab">
                                            <i class="menu-icon tf-icons bx bx-right-arrow-circle"></i>
                                            <div>Logo</div>
                                        </a>
                                    </li>

                                    <!-- Favicon Menu Button -->
                                    <li class="nav-item">
                                        <a href="#tab_2" class="nav-link" data-bs-toggle="pill" role="tab">
                                            <i class="menu-icon tf-icons bx bx-right-arrow-circle"></i>
                                            <div>Favicon</div>
                                        </a>
                                    </li>

                                    <!-- Global Content Menu Button -->
                                    <li class="nav-item">
                                        <a href="#tab_3" class="nav-link" data-bs-toggle="pill" role="tab">
                                            <i class="menu-icon tf-icons bx bx-right-arrow-circle"></i>
                                            <div>Global Content</div>
                                        </a>
                                    </li>

                                    <!-- Pages Menu Button -->
                                    <li class="nav-item">
                                        <a href="#tab_4" class="nav-link" data-bs-toggle="pill" role="tab">
                                            <i class="menu-icon tf-icons bx bx-right-arrow-circle"></i>
                                            <div>Pages</div>
                                        </a>
                                    </li>

                                    <!-- Content Quantity Menu Button -->
                                    <li class="nav-item">
                                        <a href="#tab_5" class="nav-link" data-bs-toggle="pill" role="tab">
                                            <i class="menu-icon tf-icons bx bx-right-arrow-circle"></i>
                                            <div>Content Quantity</div>
                                        </a>
                                    </li>

                                    <!-- Banner Table Menu Button -->
                                    <li class="nav-item">
                                        <a href="#tab_6" class="nav-link" data-bs-toggle="pill" role="tab">
                                            <i class="menu-icon tf-icons bx bx-right-arrow-circle"></i>
                                            <div>Banner Table</div>
                                        </a>
                                    </li>
                                </ul>
                            </aside>
                        </div>

                        <div class="col-md-8">
                            <div class="tab-content p-0" style="height: 100vh; overflow-y: auto; overflow-x: hidden;">
                                <!-- Logo Tab Start -->
                                <div class="tab-pane fade show active" id="tab_1" role="tabpanel">
                                    @include('Settings::general_settings.logo')
                                </div>
                                <!-- Logo Tab End -->

                                <!-- Favicon Tab Start -->
                                <div class="tab-pane fade" id="tab_2" role="tabpanel">
                                    @include('Settings::general_settings.favicon')
                                </div>
                                <!-- Favicon Tab End -->

                                <!-- Global Content Form Start -->
                                <div class="tab-pane fade" id="tab_3" role="tabpanel">
                                    @include('Settings::general_settings.global_content')
                                </div>
                                <!-- Global Content Form End -->

                                <!-- Pages Form Start -->
                                <div class="tab-pane fade" id="tab_4" role="tabpanel">
                                    @include('Settings::general_settings.pages')
                                </div>
                                <!-- Pages Form End -->

                                <!-- Content Quantity Form Start -->
                                <div class="tab-pane fade" id="tab_5" role="tabpanel">
                                    @include('Settings::general_settings.content_quantity')
                                </div>
                                <!-- Content Quantity Form End -->

                                <!-- Banner Form Start -->
                                <div class="tab-pane fade" id="tab_6" role="tabpanel">
                                    @include('Settings::general_settings.banner')
                                </div>
                                <!-- Banner Form End -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Import Axios and Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        async function getGeneralSettings() {
            try {
                let res = await axios.get('/dashboard/settings/general_settings');
                if (res.status === 200 && res.data.status === 'success') {
                    let data = res.data.data;
                    // Set paths for images
                    document.getElementById('logoFilePath').value = data.logo ?? '';
                    document.getElementById('old_logo_path').src = data.logo ??
                        '{{ asset('assets-1/img/default-img.jpg') }}';
                    document.getElementById('faviconFilePath').value = data.favicon ?? '';
                    document.getElementById('favicon_old_image').src = data.favicon ??
                        '{{ asset('assets-1/img/default-img.jpg') }}';
                    document.getElementById('bannerFilePath').value = data.banner ?? '';
                    document.getElementById('banner_old_image').src = data.banner ??
                        '{{ asset('assets-1/img/default-img.jpg') }}';

                    // Set other form fields here
                    document.getElementById('email').value = data.email ?? '';
                    document.getElementById('phone').value = data.phone ?? '';
                    document.getElementById('address').value = data.address ?? '';
                    document.getElementById('copyright_text').value = data.copyright_text ?? '';
                    document.getElementById('stunning_place').value = data.stunning_place ?? '';
                    document.getElementById('satisfied_customer').value = data.satisfied_customer ?? '';
                    document.getElementById('travel_places').value = data.travel_places ?? '';
                } else {
                    errorToast('Failed to fetch general settings');
                }
            } catch (error) {
                console.error('Error fetching general settings:', error);
                errorToast('An error occurred while fetching general settings');
            }
        }

        async function updateGeneralSettings() {
            try {
                let formData = new FormData();
                // Append form data with updated values
                formData.append('email', document.getElementById('email').value);
                formData.append('phone', document.getElementById('phone').value);
                formData.append('address', document.getElementById('address').value);
                formData.append('copyright_text', document.getElementById('copyright_text').value);
                formData.append('stunning_place', document.getElementById('stunning_place').value);
                formData.append('satisfied_customer', document.getElementById('satisfied_customer').value);
                formData.append('travel_places', document.getElementById('travel_places').value);

                // Append logo file if selected
                let logoImgUpdate = document.getElementById('logoImgUpdate').files[0];
                let faviconImgUpdate = document.getElementById('faviconImgUpdate').files[0];
                let bannerImgUpdate = document.getElementById('bannerImgUpdate').files[0];
                if (logoImgUpdate) {
                    formData.append('logo', logoImgUpdate);
                }
                if (faviconImgUpdate) {
                    formData.append('favicon', faviconImgUpdate);
                }
                if (bannerImgUpdate) {
                    formData.append('banner', bannerImgUpdate);
                }

                const config = {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                };

                let res = await axios.post('/dashboard/settings/general_settings/update', formData, config);

                if (res.status === 200 && res.data.status === 'success') {
                    successToast(res.data.message);
                    // Optionally refresh specific data after successful update
                    await getGeneralSettings(); // Ensure this function exists and is correct
                } else {
                    errorToast(res.data.message);
                }
            } catch (error) {
                console.error('Error updating general settings:', error);
                errorToast('An error occurred while updating general settings');
            }
        }

        async function getPages() {
            try {
                let res = await axios.get('/dashboard/settings/pages');
                if (res.status === 200 && res.data.status === 'success') {
                    let data = res.data.data;
                    // Set paths for images
                    document.getElementById('imgFilePath').value = data.image ?? '';
                    document.getElementById('old_image').src = data.image ??
                        '{{ asset('assets-1/img/default-img.jpg') }}';

                    // Set other form fields here
                    document.getElementById('slug').value = data.slug ?? '';
                    document.getElementById('title').value = data.title ?? '';
                    document.getElementById('subtitle').value = data.subtitle ?? '';
                    document.getElementById('description').value = data.description ?? '';

                    document.getElementById('heroform_desination').value = data.content_data.heroform_desination;
                    document.getElementById('heroform_trip_type').value = data.content_data.heroform_trip_type;
                    document.getElementById('heroform_trip_activities').value = data.content_data
                        .heroform_trip_activities;
                    document.getElementById('heroform_days').value = data.content_data.heroform_days;
                    document.getElementById('heroform_budget').value = data.content_data.heroform_budget;
                    document.getElementById('trips_and_tours').value = data.content_data.trips_and_tours;
                    document.getElementById('outdoor_section_activities').value = data.content_data
                        .outdoor_section_activities;
                    document.getElementById('countries').value = data.content_data.countries;
                    document.getElementById('happy_customers').value = data.content_data.happy_customers;
                    document.getElementById('trip_section_days').value = data.content_data.trip_section_days;
                    document.getElementById('trip_section_people').value = data.content_data.trip_section_people;
                    document.getElementById('trip_section_old_price').value = data.content_data.trip_section_old_price;
                    document.getElementById('trip_section_new_price').value = data.content_data.trip_section_new_price;
                    document.getElementById('trip_section_discount').value = data.content_data.trip_section_discount;
                    document.getElementById('place_section_name').value = data.content_data.place_section_name;
                    document.getElementById('place_section_activity').value = data.content_data.place_section_activity;
                    document.getElementById('trip_activities').value = data.content_data.trip_activities;
                    document.getElementById('trip_activities_title').value = data.content_data.trip_activities_title;

                } else {
                    errorToast('Failed to fetch general settings');
                }
            } catch (error) {
                console.error('Error fetching general settings:', error);
                errorToast('An error occurred while fetching general settings');
            }
        }


        async function updatePages() {
            try {
                let formData = new FormData();
                // Append form data with updated values
                formData.append('slug', document.getElementById('slug').value);
                formData.append('title', document.getElementById('title').value);
                formData.append('subtitle', document.getElementById('subtitle').value);
                formData.append('description', document.getElementById('description').value);
                formData.append('heroform_desination', document.getElementById('heroform_desination').value);
                formData.append('heroform_trip_type', document.getElementById('heroform_trip_type').value);
                formData.append('heroform_trip_activities', document.getElementById('heroform_trip_activities').value);
                formData.append('heroform_days', document.getElementById('heroform_days').value);
                formData.append('heroform_budget', document.getElementById('heroform_budget').value);
                formData.append('trips_and_tours', document.getElementById('trips_and_tours').value);
                formData.append('outdoor_section_activities', document.getElementById('outdoor_section_activities')
                    .value);
                formData.append('countries', document.getElementById('countries').value);
                formData.append('happy_customers', document.getElementById('happy_customers').value);
                formData.append('trip_section_days', document.getElementById('trip_section_days').value);
                formData.append('trip_section_people', document.getElementById('trip_section_people').value);
                formData.append('trip_section_old_price', document.getElementById('trip_section_old_price').value);
                formData.append('trip_section_new_price', document.getElementById('trip_section_new_price').value);
                formData.append('trip_section_discount', document.getElementById('trip_section_discount').value);
                formData.append('place_section_name', document.getElementById('place_section_name').value);
                formData.append('place_section_activity', document.getElementById('place_section_activity').value);
                formData.append('trip_activities', document.getElementById('trip_activities').value);
                formData.append('trip_activities_title', document.getElementById('trip_activities_title').value);
                formData.append('img_path', document.getElementById('imgFilePath').value);
                // Append files if changed
                let imgUpdate = document.getElementById('imgUpdate').files[0];

                if (imgUpdate) {
                    formData.append('image', imgUpdate);
                }

                const config = {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                };

                let res = await axios.post('/dashboard/settings/general_settings/update', formData, config);

                if (res.status === 200 && res.data.status === 'success') {
                    successToast(res.data.message);
                    await getGeneralSettings(); // Refresh data after successful update
                } else {
                    errorToast(res.data.message);
                }
            } catch (error) {
                console.error('Error updating general settings:', error);
                errorToast('An error occurred while updating general settings');
            }
        }

        document.addEventListener('DOMContentLoaded', async () => {
            await getGeneralSettings();
            await getPages();
        });
    </script>
@endsection
