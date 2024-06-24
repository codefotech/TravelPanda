@extends('dashboard')

@section('title', 'General Settings')

@section('settings_content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="content-header">
        <div class="d-flex position-relative">
            <i style="font-size: 30px;top: 18px;" class="fas fa-arrow-alt-circle-right position-relative"></i>
            <h2 class="py-3 pl-2">&nbsp; General Settings</h2>
        </div>
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
                            <!-- Logo Form Start -->
                            <div class="tab-pane fade show active" id="tab_1" role="tabpanel">
                                <form class="form-horizontal" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="card shadow-sm p-3">
                                        <div class="form-group pb-3">
                                            <label for="" class="control-label">Existing Logo</label>
                                            <div class="pt-3">
                                                <img src="{{ asset($generalSettingsData['logo'] ?? 'assets-1/img/default-img.jpg') }}" class="existing-photo" id="logo_old_image" style="height:80px;">
                                                <br><br>
                                                <input oninput="logo_old_image.src=window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="logoImgUpdate">
                                                <br>
                                                <input type="text" class="form-control" id="logoFilePath" value="{{ $generalSettingsData['logo'] ?? '' }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="control-label"></label>
                                            <div class="">
                                                <button type="button" class="btn codefotech_color pull-left" onclick="updateGeneralSettings()">Update Logo</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Logo Form End -->


                            <!-- Favicon Form Start -->
                            <div class="tab-pane fade" id="tab_2" role="tabpanel">
                                <form class="form-horizontal" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="card shadow-sm p-3">
                                        <div class="form-group pb-3">
                                            <label for="" class="control-label">Existing Favicon</label>
                                            <div class="" style="padding-top:6px;">
                                                <img src="{{ asset($generalSettingsData['favicon'] ?? 'assets-1/img/default-img.jpg') }}" class="existing-photo" id="favicon_old_image" style="height:40px;">
                                                <br><br>
                                                <input oninput="favicon_old_image.src=window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="faviconImgUpdate">
                                                <br>
                                                <input type="text" class="form-control" id="faviconFilePath" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="control-label"></label>
                                            <div class="">
                                                <button type="button" class="btn codefotech_color pull-left" onclick="updateGeneralSettings()">Update Favicon</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Favicon Form End -->

                            <!-- Global Content Form Start -->
                            <div class="tab-pane fade" id="tab_3" role="tabpanel">
                                <form class="form-horizontal" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="card shadow-sm p-3">
                                        <div class="form-group pb-3">
                                            <label for="email" class="control-label">Email </label>
                                            <div class="">
                                                <input type="text" class="form-control" id="email" name="email">
                                            </div>
                                        </div>
                                        <div class="form-group pb-3">
                                            <label for="phone" class="control-label">Phone Number </label>
                                            <div class="">
                                                <input type="text" class="form-control" id="phone" name="phone">
                                            </div>
                                        </div>

                                        <div class="form-group pb-3">
                                            <label for="address" class="control-label">Address </label>
                                            <div class="">
                                            <textarea class="form-control" id="address" name="address"
                                                      style="height:70px;"></textarea>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="form-group pb-3">
                                            <label for="copyright_text" class="control-label">Copyright Text </label>
                                            <div class="">
                                                <input class="form-control" type="text" name="copyright_text" id="copyright_text">
                                            </div>
                                        </div>

                                        <div class="form-group pb-3">
                                            <label for="social_icon" class="control-label">Social Icon </label>
                                            <div class="form-group mb-3">
                                                <select class="form-control" id="social_icon" name="social_icon">
                                                    <option value="Facebook" {{ isset($generalSettingsData['social_icon']) && $generalSettingsData['social_icon'] == 'Facebook' ? 'selected' : '' }}>Facebook</option>
                                                    <option value="Instagram" {{ isset($generalSettingsData['social_icon']) && $generalSettingsData['social_icon'] == 'Instagram' ? 'selected' : '' }}>Instagram</option>
                                                    <option value="Twitter" {{ isset($generalSettingsData['social_icon']) && $generalSettingsData['social_icon'] == 'Twitter' ? 'selected' : '' }}>Twitter</option>
                                                    <option value="Dribbble" {{ isset($generalSettingsData['social_icon']) && $generalSettingsData['social_icon'] == 'Dribbble' ? 'selected' : '' }}>Dribbble</option>
                                                    <option value="Linkedin" {{ isset($generalSettingsData['social_icon']) && $generalSettingsData['social_icon'] == 'Linkedin' ? 'selected' : '' }}>Linkedin</option>
                                                    <option value="Others" {{ isset($generalSettingsData['social_icon']) && $generalSettingsData['social_icon'] == 'Others' ? 'selected' : '' }}>Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group pb-3">
                                            <label for="social_icon_url" class="control-label">Social Icon Url </label>
                                            <div class="">
                                                <input type="text" class="form-control" id="social_icon_url" name="social_icon_url">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="control-label"></label>
                                            <div class="">
                                                <button onclick="updateGeneralSettings()" class="btn codefotech_color pull-left" onclick="updateGlobalContent()">
                                                    Update Global Content
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Global Content Form End -->



                            <!-- Content Quantity Form Start -->
                            <div class="tab-pane fade" id="tab_5" role="tabpanel">
                                <form class="form-horizontal" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="card shadow-sm p-3">
                                        <div class="form-group pb-3">
                                            <label for="about_section_stunning_places" class="control-label">Stunning Places -<span>*</span></label>
                                            <div class="">
                                                <input type="text" class="form-control" id="stunning_place"
                                                       name="stunning_place">
                                            </div>
                                        </div>
                                        <div class="form-group pb-3">
                                            <label for="about_section_satisfied_customer" class="control-label">Satisfied Customer
                                                -<span>*</span></label>
                                            <div class="">
                                                <input type="text" class="form-control" id="satisfied_customer"
                                                       name="satisfied_customer">
                                            </div>
                                        </div>
                                        <div class="form-group pb-3">
                                            <label for="about_section_travel_places" class="control-label">Travel Places -<span>*</span></label>
                                            <div class="">
                                                <input type="text" class="form-control" id="travel_places"
                                                       name="travel_places">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="control-label"></label>
                                            <div class="">
                                                <button onclick="updateGeneralSettings()" class="btn codefotech_color pull-left" onclick="updateContentQuantity()">
                                                    Update Content Quantity
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Content Quantity Form End -->

                            <!-- Banner Form Start -->
                            <div class="tab-pane fade" id="tab_6" role="tabpanel">
                                <form class="form-horizontal" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="card shadow-sm p-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                    <tr>
                                                        <form enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                                            <td style="width:50%">
                                                                <h4>Existing Banner</h4>
                                                                <p>
                                                                    <img src="{{ asset($generalSettingsData['banner'] ?? 'assets-1/img/default-img.jpg') }}"
                                                                         class="existing-photo" id="banner_old_image" style="width:100%; height: 200px">
                                                                    <br><br>
                                                                    <input oninput="banner_old_image.src=window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="bannerImgUpdate">
                                                                    <br>
                                                                    <input type="text" class="form-control" id="bannerFilePath" readonly>
                                                                </p>
                                                                <button onclick="updateGeneralSettings()" class="btn codefotech_color pull-left" onclick="updateContentQuantity()">
                                                                    Update Banner
                                                                </button>
                                                            </td>
                                                        </form>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Banner Form End -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<script>
    async function getGeneralSettings() {
        try {
            let res = await axios.get('/dashboard/settings/general_settings');
            if (res.status === 200 && res.data.status === 'success') {
                let data = res.data.data;
                // Set paths for images
                document.getElementById('logoFilePath').value = data.logo ?? '';
                document.getElementById('logo_old_image').src = data.logo ?? '{{ asset('assets-1/img/default-img.jpg') }}';
                document.getElementById('faviconFilePath').value = data.favicon ?? '';
                document.getElementById('favicon_old_image').src = data.favicon ?? '{{ asset('assets-1/img/default-img.jpg') }}';
                document.getElementById('bannerFilePath').value = data.banner ?? '';
                document.getElementById('banner_old_image').src = data.banner ?? '{{ asset('assets-1/img/default-img.jpg') }}';

                // Set other form fields here
                document.getElementById('email').value = data.email ?? '';
                document.getElementById('phone').value = data.phone ?? '';
                document.getElementById('address').value = data.address ?? '';
                document.getElementById('social_icon').value = data.social_icon ?? '';
                document.getElementById('social_icon_url').value = data.social_icon_url ?? '';
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
            formData.append('social_icon', document.getElementById('social_icon').value);
            formData.append('social_icon_url', document.getElementById('social_icon_url').value);
            formData.append('stunning_place', document.getElementById('stunning_place').value);
            formData.append('satisfied_customer', document.getElementById('satisfied_customer').value);
            formData.append('travel_places', document.getElementById('travel_places').value);
            formData.append('logo_path', document.getElementById('logoFilePath').value);
            formData.append('favicon_path', document.getElementById('faviconFilePath').value);
            formData.append('banner_path', document.getElementById('bannerFilePath').value);
            // Append files if changed
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
    });
</script>
@endsection
