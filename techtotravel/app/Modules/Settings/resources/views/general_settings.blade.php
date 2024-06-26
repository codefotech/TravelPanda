@extends('dashboard')

@section('title', 'General Settings')

@section('main_content')

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

                                <!-- Home Page Menu Button -->
                                <li class="nav-item">
                                    <a href="#tab_4" class="nav-link" data-bs-toggle="pill" role="tab">
                                        <i class="menu-icon tf-icons bx bx-right-arrow-circle"></i>
                                        <div>Home Page</div>
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
                                                <input type="text" class="form-control" id="logoFilePath" value="{{ $generalSettingsData['logo'] ?? '' }}" readonly disabled>
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
                                                <input type="text" class="form-control" id="faviconFilePath" readonly disabled>
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



                            <!-- Home Page Form Start -->
                            <div class="tab-pane fade" id="tab_4" role="tabpanel">
                                <form class="form-horizontal" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="card shadow-sm p-3">

                                        <!-- Common Section Start -->
                                        <h3 class="text-center">Common Section</h3>
                                        <form class="form-horizontal" enctype="multipart/form-data"
                                              method="post"
                                              accept-charset="utf-8">

                                            <div class="card shadow-sm p-3">
                                                <div class="form-group pb-3" style="padding-top:7px;">
                                                    <label for="user_types" class="control-label">Types </label>
                                                    <select name="user_types" id="user_types" class="form-control">
                                                        <option value="Admin" {{ isset($generalSettingsData['user_types']) && $generalSettingsData['user_types'] == 'Admin' ? 'selected' : '' }}>Admin</option>
                                                        <option value="User" {{ isset($generalSettingsData['user_types']) && $generalSettingsData['user_types'] == 'User' ? 'selected' : '' }}>User</option>
                                                    </select>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="title" class="control-label">Title </label>
                                                    <div class="">
                                                        <input type="text" name="title" id="title" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="subtitle" class="control-label">Subtitle </label>
                                                    <div class="">
                                                    <textarea name="subtitle" id="subtitle" class="form-control"
                                                              cols="30"
                                                              rows="10" style="height: 80px;"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="description" class="control-label">Description </label>
                                                    <div class="">
                                                    <textarea name="description" id="description" class="form-control"
                                                              cols="30"
                                                              rows="10" style="height: 120px;"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class=control-label">Existing Photo</label>
                                                    <div class="" style="padding-top:6px;">
                                                        <img src="{{ asset($homePageData['image'] ?? 'assets-1/img/default-img.jpg') }}" class="existing-photo" id="old_image" style="height:80px;">
                                                        <br><br>
                                                        <input oninput="old_image.src=window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="imgUpdate">
                                                        <br>
                                                        <input type="text" class="form-control" id="imgFilePath" readonly disabled>
                                                    </div>
                                                </div>

                                                <hr>

                                                <h3 class="text-center">Home Section</h3>
                                                <div class="form-group pb-3" style="padding-top:7px;">
                                                    <label for="" class="control-label">Destination </label>
                                                    <select name="heroform_desination" id="heroform_desination" class="form-control">
                                                        <option value="Dhaka" {{ isset($homePageData['heroform_desination']) && $homePageData['heroform_desination'] == 'Dhaka' ? 'selected' : '' }}>Dhaka</option>
                                                        <option value="Chattogram" {{ isset($homePageData['heroform_desination']) && $homePageData['heroform_desination'] == 'Chattogram' ? 'selected' : '' }}>Chattogram</option>
                                                        <option value="Barishal" {{ isset($homePageData['heroform_desination']) && $homePageData['heroform_desination'] == 'Barishal' ? 'selected' : '' }}>Barishal</option>
                                                        <option value="Dhaka" {{ isset($homePageData['heroform_desination']) && $homePageData['heroform_desination'] == 'Dhaka' ? 'selected' : '' }}>Dhaka</option>
                                                        <option value="Khulna" {{ isset($homePageData['heroform_desination']) && $homePageData['heroform_desination'] == 'Khulna' ? 'selected' : '' }}>Khulna</option>
                                                        <option value="Rajshahi" {{ isset($homePageData['heroform_desination']) && $homePageData['heroform_desination'] == 'Rajshahi' ? 'selected' : '' }}>Rajshahi</option>
                                                        <option value="Rangpur" {{ isset($homePageData['heroform_desination']) && $homePageData['heroform_desination'] == 'Rangpur' ? 'selected' : '' }}>Rangpur</option>
                                                        <option value="Mymensingh" {{ isset($homePageData['heroform_desination']) && $homePageData['heroform_desination'] == 'Mymensingh' ? 'selected' : '' }}>Mymensingh</option>
                                                        <option value="Sylhet" {{ isset($homePageData['heroform_desination']) && $homePageData['heroform_desination'] == 'Sylhet' ? 'selected' : '' }}>Sylhet</option>
                                                    </select>
                                                </div>

                                                <div class="form-group pb-3" style="padding-top:7px;">
                                                    <label for="" class="control-label">Trip Types </label>
                                                    <select name="heroform_trip_type" id="heroform_trip_type" class="form-control">
                                                        <option value="Holiday Package" {{ isset($homePageData['heroform_trip_type']) && $homePageData['heroform_trip_type'] == 'Holiday Package' ? 'selected' : '' }}>Holiday Package</option>
                                                        <option value="Full Of FamJam" {{ isset($homePageData['heroform_trip_type']) && $homePageData['heroform_trip_type'] == 'Full Of FamJam' ? 'selected' : '' }}>Full Of FamJam</option>
                                                        <option value="Friends-Only Trip" {{ isset($homePageData['heroform_trip_type']) && $homePageData['heroform_trip_type'] == 'Friends-Only Trip' ? 'selected' : '' }}>Friends-Only Trip</option>
                                                        <option value="Siblings-Only Trip" {{ isset($homePageData['heroform_trip_type']) && $homePageData['heroform_trip_type'] == 'Siblings-Only Trip' ? 'selected' : '' }}>Siblings-Only Trip</option>
                                                        <option value="All-Girls Or An All-Boys Trip" {{ isset($homePageData['heroform_trip_type']) && $homePageData['heroform_trip_type'] == 'All-Girls Or An All-Boys Trip' ? 'selected' : '' }}>All-Girls Or An All-Boys Trip</option>
                                                        <option value="Volunteer Trip" {{ isset($homePageData['heroform_trip_type']) && $homePageData['heroform_trip_type'] == 'Volunteer Trip' ? 'selected' : '' }}>Volunteer Trip</option>
                                                        <option value="Impromptu Trip" {{ isset($homePageData['heroform_trip_type']) && $homePageData['heroform_trip_type'] == 'Impromptu Trip' ? 'selected' : '' }}>Impromptu Trip</option>
                                                        <option value="Solo Trip" {{ isset($homePageData['heroform_trip_type']) && $homePageData['heroform_trip_type'] == 'Solo Trip' ? 'selected' : '' }}>Solo Trip</option>
                                                        <option value="Adventure Trip" {{ isset($homePageData['heroform_trip_type']) && $homePageData['heroform_trip_type'] == 'Adventure Trip' ? 'selected' : '' }}>Adventure Trip</option>
                                                        <option value="Luxury Trip" {{ isset($homePageData['heroform_trip_type']) && $homePageData['heroform_trip_type'] == 'Luxury Trip' ? 'selected' : '' }}>Luxury Trip</option>
                                                    </select>
                                                </div>

                                                <div class="form-group pb-3" style="padding-top:7px;">
                                                    <label for="" class="control-label">Activity </label>
                                                    <select name="heroform_trip_activities" id="heroform_trip_activities" class="form-control">
                                                        <option value="Star Line" {{ isset($homePageData['heroform_trip_activities']) && $homePageData['heroform_trip_activities'] == 'Star Line' ? 'selected' : '' }}>Star Line</option>
                                                        <option value="Green Line" {{ isset($homePageData['heroform_trip_activities']) && $homePageData['heroform_trip_activities'] == 'Green Line' ? 'selected' : '' }}>Green Line</option>
                                                        <option value="Hanif Enterprise" {{ isset($homePageData['heroform_trip_activities']) && $homePageData['heroform_trip_activities'] == 'Hanif Enterprise' ? 'selected' : '' }}>Hanif Enterprise</option>
                                                        <option value="Shyamoli Paribahan" {{ isset($homePageData['heroform_trip_activities']) && $homePageData['heroform_trip_activities'] == 'Shyamoli Paribahan' ? 'selected' : '' }}>Shyamoli Paribahan</option>
                                                        <option value="Shohag Paribahan" {{ isset($homePageData['heroform_trip_activities']) && $homePageData['heroform_trip_activities'] == 'Shohag Paribahan' ? 'selected' : '' }}>Shohag Paribahan</option>
                                                        <option value="Ena Transport" {{ isset($homePageData['heroform_trip_activities']) && $homePageData['heroform_trip_activities'] == 'Ena Transport' ? 'selected' : '' }}>Ena Transport</option>
                                                        <option value="London Express" {{ isset($homePageData['heroform_trip_activities']) && $homePageData['heroform_trip_activities'] == 'London Express' ? 'selected' : '' }}>London Express</option>
                                                        <option value="Saint Martin Paribahan" {{ isset($homePageData['heroform_trip_activities']) && $homePageData['heroform_trip_activities'] == 'Saint Martin Paribahan' ? 'selected' : '' }}>Saint Martin Paribahan</option>
                                                    </select>
                                                </div>

                                                <div class="form-group pb-3" style="padding-top:7px;">
                                                    <label for="" class="control-label">Days </label>
                                                    <select name="heroform_days" id="heroform_days" class="form-control">
                                                        <option value="0 Days - 1 Days" {{ isset($homePageData['heroform_days']) && $homePageData['heroform_days'] == '0 Days - 1 Days' ? 'selected' : '' }}>0 Days - 1 Days</option>
                                                        <option value="0 Days - 3 Days" {{ isset($homePageData['heroform_days']) && $homePageData['heroform_days'] == '0 Days - 3 Days' ? 'selected' : '' }}>0 Days - 3 Days</option>
                                                        <option value="0 Days - 5 Days" {{ isset($homePageData['heroform_days']) && $homePageData['heroform_days'] == '0 Days - 5 Days' ? 'selected' : '' }}>0 Days - 5 Days</option>
                                                        <option value="0 Days - 7 Days" {{ isset($homePageData['heroform_days']) && $homePageData['heroform_days'] == '0 Days - 7 Days' ? 'selected' : '' }}>0 Days - 7 Days</option>
                                                        <option value="0 Days - 10 Days" {{ isset($homePageData['heroform_days']) && $homePageData['heroform_days'] == '0 Days - 10 Days' ? 'selected' : '' }}>0 Days - 10 Days</option>
                                                        <option value="0 Days - 14 Days" {{ isset($homePageData['heroform_days']) && $homePageData['heroform_days'] == '0 Days - 14 Days' ? 'selected' : '' }}>0 Days - 14 Days</option>
                                                        <option value="0 Days - 30 Days" {{ isset($homePageData['heroform_days']) && $homePageData['heroform_days'] == '0 Days - 30 Days' ? 'selected' : '' }}>0 Days - 30 Days</option>
                                                    </select>
                                                </div>

                                                <div class="form-group pb-3" style="padding-top:7px;">
                                                    <label for="" class="control-label">Package </label>
                                                    <select name="heroform_budget" id="heroform_budget" class="form-control">
                                                        <option value="$100 - $150" {{ isset($homePageData['heroform_budget']) && $homePageData['heroform_budget'] == '$100 - $150' ? 'selected' : '' }}>$100 - $150</option>
                                                        <option value="$150 - $200" {{ isset($homePageData['heroform_budget']) && $homePageData['heroform_budget'] == '$150 - $200' ? 'selected' : '' }}>$150 - $200</option>
                                                        <option value="$200 - $250" {{ isset($homePageData['heroform_budget']) && $homePageData['heroform_budget'] == '$200 - $250' ? 'selected' : '' }}>$200 - $250</option>
                                                        <option value="$250 - $350" {{ isset($homePageData['heroform_budget']) && $homePageData['heroform_budget'] == '$250 - $350' ? 'selected' : '' }}>$250 - $350</option>
                                                        <option value="$250 - $500" {{ isset($homePageData['heroform_budget']) && $homePageData['heroform_budget'] == '$250 - $500' ? 'selected' : '' }}>$250 - $500</option>
                                                        <option value="$500 - $1000" {{ isset($homePageData['heroform_budget']) && $homePageData['heroform_budget'] == '$500 - $1000' ? 'selected' : '' }}>$500 - $1000</option>
                                                    </select>
                                                </div>

                                                <hr>


                                                <h3 class="text-center">Counter Section</h3>
                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Trips & Tours</label>
                                                    <div class="">
                                                        <input type="text" name="trips_and_tours" id="trips_and_tours" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Outdoor Activities</label>
                                                    <div class="">
                                                        <input type="text" name="outdoor_section_activities" id="outdoor_section_activities"
                                                               class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Countries</label>
                                                    <div class="">
                                                        <input type="text" name="countries" id="countries"
                                                               class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Happy Customers</label>
                                                    <div class="">
                                                        <input type="text" name="happy_customers" id="happy_customers"
                                                               class="form-control">
                                                    </div>
                                                </div>

                                                <hr>

                                                <h3 class="text-center">Trip Section</h3>
                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Days</label>
                                                    <div class="">
                                                        <input type="text" name="trip_section_days" id="trip_section_days" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">People</label>
                                                    <div class="">
                                                        <input type="text" name="trip_section_people" id="trip_section_people"
                                                               class="form-control">
                                                    </div>
                                                </div>


                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Old Price</label>
                                                    <div class="">
                                                        <input type="text" name="trip_section_old_price" id="trip_section_old_price"
                                                               class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">New Price</label>
                                                    <div class="">
                                                        <input type="text" name="trip_section_new_price" id="trip_section_new_price"
                                                               class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Discount</label>
                                                    <div class="">
                                                        <input type="text" name="trip_section_discount" id="trip_section_discount"
                                                               class="form-control">
                                                    </div>
                                                </div>

                                                <hr>

                                                <h3 class="text-center">Place Section</h3>
                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Place Name</label>
                                                    <div class="">
                                                        <input type="text" name="place_section_name" id="place_section_name"
                                                               class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Place Activities</label>
                                                    <div class="">
                                                        <input type="text" name="place_section_activity" id="place_section_activity"
                                                               class="form-control">
                                                    </div>
                                                </div>

                                                <hr>

                                                <h3 class="text-center">Trip Activities Section</h3>
                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Activities</label>
                                                    <div class="">
                                                        <input type="text" name="trip_activities" id="trip_activities"
                                                               class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Trip Activities Title</label>
                                                    <div class="">
                                                        <input type="text" name="trip_activities_title" id="trip_activities_title"
                                                               class="form-control">
                                                    </div>
                                                </div>


                                                <hr>


                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label"></label>
                                                    <div class="text-center">
                                                        <button type="submit"
                                                                class="btn codefotech_color pull-left"
                                                                name="form_logo">Update
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                        <!-- Common Section End -->


                                        <!-- ================================= -->

                                        <!-- ================================= -->

                                    </div>
                                </form>
                            </div>
                            <!-- Home Page Form End -->



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
                                                                    <input type="text" class="form-control" id="bannerFilePath" readonly disabled>
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

    async function getHomePage() {
        try {
            let res = await axios.get('/dashboard/settings/home_page');
            if (res.status === 200 && res.data.status === 'success') {
                let data = res.data.data;
                // Set paths for images
                document.getElementById('imgFilePath').value = data.image ?? '';
                document.getElementById('old_image').src = data.image ?? '{{ asset('assets-1/img/default-img.jpg') }}';

                document.getElementById('user_types').value = data.user_types;
                document.getElementById('title').value = data.title;
                document.getElementById('subtitle').value = data.subtitle;
                document.getElementById('description').value = data.description;

                document.getElementById('heroform_desination').value = data.content_data.heroform_desination;
                document.getElementById('heroform_trip_type').value = data.content_data.heroform_trip_type;
                document.getElementById('heroform_trip_activities').value = data.content_data.heroform_trip_activities;
                document.getElementById('heroform_days').value = data.content_data.heroform_days;
                document.getElementById('heroform_budget').value = data.content_data.heroform_budget;
                document.getElementById('trips_and_tours').value = data.content_data.trips_and_tours;
                document.getElementById('outdoor_section_activities').value = data.content_data.outdoor_section_activities;
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
                errorToast('Failed to fetch payment configuration');
            }
        } catch (error) {
            console.error('Error fetching payment configuration:', error);
            errorToast('An error occurred while fetching payment configuration');
        }
    }

    async function updateHomePage() {
        try {
            let formData = new FormData();
            // Append form data with updated values
            formData.append('user_types', document.getElementById('user_types').value);
            formData.append('title', document.getElementById('title').value);
            formData.append('subtitle', document.getElementById('subtitle').value);
            formData.append('description', document.getElementById('description').value);
            formData.append('heroform_desination', document.getElementById('heroform_desination').value);
            formData.append('heroform_trip_type', document.getElementById('heroform_trip_type').value);
            formData.append('heroform_trip_activities', document.getElementById('heroform_trip_activities').value);
            formData.append('heroform_days', document.getElementById('heroform_days').value);
            formData.append('heroform_budget', document.getElementById('heroform_budget').value);
            formData.append('trips_and_tours', document.getElementById('trips_and_tours').value);
            formData.append('outdoor_section_activities', document.getElementById('outdoor_section_activities').value);
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
            formData.append('img_path', document.getElementById('logoFilePath').value);
            // Append files if changed
            let logoImgUpdate = document.getElementById('imgImgUpdate').files[0];

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
        await getHomePage();
    });
</script>
@endsection
