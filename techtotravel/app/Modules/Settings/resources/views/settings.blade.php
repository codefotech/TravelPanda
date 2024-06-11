<div class="container-xxl flex-grow-1 container-p-y">
    <div class="content-header">
        <div class="d-flex position-relative">
            <i style="font-size: 30px;top: 18px;" class="fas fa-arrow-alt-circle-right position-relative"></i>
            <h2 class="py-3 pl-2">&nbsp; Settings Section</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div id="settings_nav" class="nav-tabs-custom">
                <div class="row">
                    <div class="col-md-4">
                        <aside id="layout-menu" class="menu-vertical menu bg-menu-theme py-3 overflow-hidden rounded"
                               style="width: 100% !important;">
                            <ul class="menu-inner py-1 overflow-y-scroll" style="height: 250px;">
                                <!-- Logo Menu Button -->
                                <li class="menu-item">
                                    <a href="#logo" data-toggle="tab" aria-expanded="true"
                                       class="menu-link menu-toggle">
                                        <i class="menu-icon tf-icons bx bx-right-arrow-circle"></i>
                                        <div data-i18n="Dashboards">Logo</div>
                                    </a>
                                </li>

                                <!-- Favicon Menu Button -->
                                <li class="menu-item">
                                    <a href="#favicon" data-toggle="tab" aria-expanded="true"
                                       class="menu-link menu-toggle">
                                        <i class="menu-icon tf-icons bx bx-right-arrow-circle"></i>
                                        <div data-i18n="Dashboards">Favicon</div>
                                    </a>
                                </li>

                                <!-- Global Content Menu Button -->
                                <li class="menu-item">
                                    <a href="#global_content" data-toggle="tab" aria-expanded="true"
                                       class="menu-link menu-toggle">
                                        <i class="menu-icon tf-icons bx bx-right-arrow-circle"></i>
                                        <div data-i18n="Dashboards">Global Content</div>
                                    </a>
                                </li>

                                <!-- Home Page Menu Button -->
                                <li class="menu-item active">
                                    <a href="#home_page" data-toggle="tab" aria-expanded="true"
                                       class="menu-link menu-toggle">
                                        <i class="menu-icon tf-icons bx bx-right-arrow-circle"></i>
                                        <div data-i18n="Dashboards">Home Page</div>
                                    </a>
                                </li>

                                <!-- Content Quantity Menu Button -->
                                <li class="menu-item">
                                    <a href="#content_quantity" data-toggle="tab" aria-expanded="true"
                                       class="menu-link menu-toggle">
                                        <i class="menu-icon tf-icons bx bx-right-arrow-circle"></i>
                                        <div data-i18n="Dashboards">Content Quantity</div>
                                    </a>
                                </li>

                                <!-- Banner Table Menu Button -->
                                <li class="menu-item">
                                    <a href="#banner_table" data-toggle="tab" aria-expanded="true"
                                       class="menu-link menu-toggle">
                                        <i class="menu-icon tf-icons bx bx-right-arrow-circle"></i>
                                        <div data-i18n="Dashboards">Banner Table</div>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>

                    <div class="col-md-8">
                        <div class="tab-content p-0">
                            <!-- Logo Form Start -->
                            <div class="tab-pane" id="tab_1">
                                <form action="#" class="form-horizontal" enctype="multipart/form-data" method="post">
                                    <div class="card shadow-sm p-3">
                                        <div class="form-group pb-3">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="{{ asset('assets-1/img/default-img.jpg') }}"
                                                     class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group pb-3">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="photo_logo">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-primary codefotech_color pull-left"
                                                        name="form_logo">Update Logo
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Logo Form End -->

                            <!-- Favicon Form Start-->
                            <div class="tab-pane" id="tab_2">
                                <form action="#" class="form-horizontal" enctype="multipart/form-data" method="post">
                                    <div class="card shadow-sm p-3">
                                        <div class="form-group pb-3">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img
                                                    src="https://demo.phpscriptpoint.com/travelfresh/public/uploads/favicon.png"
                                                    class="existing-photo" style="height:40px;">
                                            </div>
                                        </div>
                                        <div class="form-group pb-3">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="photo_favicon">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-primary codefotech_color pull-left"
                                                        name="form_favicon">Update Favicon
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Favicon Form End-->

                            <!-- Global Content Form Start -->
                            <div class="tab-pane" id="tab_3">
                                <form action="#" class="form-horizontal" enctype="multipart/form-data" method="post">
                                    <div class="card shadow-sm p-3">
                                        <div class="form-group pb-3">
                                            <label for="" class="col-sm-3 control-label">Footer - Copyright </label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="footer_copyright"
                                                       value="Copyright 2022, TravelFresh. All Rights Reserved.">
                                            </div>
                                        </div>
                                        <div class="form-group pb-3">
                                            <label for="" class="col-sm-3 control-label">Footer Address </label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" name="footer_address" style="height:70px;">3153 Foley Street Miami, FL 33176</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group pb-3">
                                            <label for="" class="col-sm-3 control-label">Footer Email </label>
                                            <div class="col-sm-6">
                                                <input type="email" class="form-control" name="footer_email"
                                                       value="info@yourwebsite.com">
                                            </div>
                                        </div>
                                        <div class="form-group pb-3">
                                            <label for="" class="col-sm-3 control-label">Footer Phone </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="footer_phone"
                                                       value="954-648-1802">
                                            </div>
                                        </div>
                                        <div class="form-group pb-3">
                                            <label for="" class="col-sm-3 control-label">Top Bar Email </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="top_bar_email"
                                                       value="info@yourwebsite.com">
                                            </div>
                                        </div>
                                        <div class="form-group pb-3">
                                            <label for="" class="col-sm-3 control-label">Top Bar Phone Number </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="top_bar_phone"
                                                       value="954-648-1802">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-primary codefotech_color pull-left"
                                                        name="form_general">
                                                    Update
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Global Content Form End -->

                            <!-- Home Page Form Start -->
                            <div class="tab-pane active" id="tab_4">
                                <form action="#" class="form-horizontal" enctype="multipart/form-data" method="post">
                                    <div class="card shadow-sm p-3">

                                        <!-- Hero Section Start -->
                                        <h3 class="text-center">Hero Section</h3>
                                        <form action="#" class="form-horizontal" enctype="multipart/form-data" method="post"
                                              accept-charset="utf-8">
                                            <div class="card shadow-sm p-3">
                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Title </label>
                                                    <div class="">
                                                        <input type="text" name="hero_section_title" class="form-control"
                                                               value="Escape your comfort zone">
                                                    </div>
                                                </div>
                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Content </label>
                                                    <div class="">
                                                        <textarea name="hero_section_content" class="form-control" cols="30"
                                                                              rows="10" style="height: 120px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid fugit expedita, iure ullam cum vero ex sint aperiam maxime.</textarea>
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="form-group pb-3" style="padding-top:7px;">
                                                    <label for="" class="control-label">Destination </label>
                                                    <select name="heroform_desination" class="form-control">
                                                        <option value="Dhaka" selected="">Dhaka</option>
                                                        <option value="Chattogram">Chattogram</option>
                                                        <option value="Barishal">Barishal</option>
                                                        <option value="Dhaka">Dhaka</option>
                                                        <option value="Khulna">Khulna</option>
                                                        <option value="Rajshahi">Rajshahi</option>
                                                        <option value="Rangpur">Rangpur</option>
                                                        <option value="Mymensingh">Mymensingh </option>
                                                        <option value="Sylhet">Sylhet</option>
                                                    </select>
                                                </div>

                                                <div class="form-group pb-3" style="padding-top:7px;">
                                                    <label for="" class="control-label">Trip Types </label>
                                                    <select name="heroform_trip_type" class="form-control">
                                                        <option value="Holiday Package" selected="">Holiday Package</option>
                                                        <option value="Full Of FamJam">Full Of FamJam</option>
                                                        <option value="Friends-Only Trip">Friends-Only Trip</option>
                                                        <option value="Siblings-Only Trip">Siblings-Only Trip</option>
                                                        <option value="All-Girls Or An All-Boys Trip">All-Girls Or An All-Boys Trip</option>
                                                        <option value="Volunteer Trip">Volunteer Trip</option>
                                                        <option value="Impromptu Trip">Impromptu Trip</option>
                                                        <option value="Solo Trip">Solo Trip </option>
                                                        <option value="Adventure Trip">Adventure Trip</option>
                                                        <option value="Luxury Trip">Luxury Trip</option>
                                                    </select>
                                                </div>

                                                <div class="form-group pb-3" style="padding-top:7px;">
                                                    <label for="" class="control-label">Activity </label>
                                                    <select name="heroform_trip_type" class="form-control">
                                                        <option value="Star Line" selected="">Star Line</option>
                                                        <option value="Green Line">Green Line</option>
                                                        <option value="Hanif Enterprise">Hanif Enterprise</option>
                                                        <option value="Shyamoli Paribahan">Shyamoli Paribahan</option>
                                                        <option value="Shohag Paribahan">Shohag Paribahan</option>
                                                        <option value="Ena Transport">Ena Transport</option>
                                                        <option value="London Express">London Express</option>
                                                        <option value="Saint Martin Paribahan">Saint Martin Paribahan </option>
                                                        <option value="Desh Travels">Desh Travels</option>
                                                        <option value="Saudia Paribahan">Saudia Paribahan</option>
                                                    </select>
                                                </div>

                                                <div class="form-group pb-3" style="padding-top:7px;">
                                                    <label for="" class="control-label">Days </label>
                                                    <select name="heroform_days" class="form-control">
                                                        <option value="0 Days - 1 Days" selected="">0 Days - 1 Days</option>
                                                        <option value="0 Days - 3 Days">0 Days - 3 Days</option>
                                                        <option value="0 Days - 5 Days">0 Days - 5 Days</option>
                                                        <option value="0 Days - 7 Days">0 Days - 7 Days</option>
                                                        <option value="0 Days - 10 Days">0 Days - 10 Days</option>
                                                        <option value="0 Days - 14 Days">0 Days - 14 Days</option>
                                                        <option value="0 Days - 30 Days">0 Days - 30 Days</option>
                                                    </select>
                                                </div>

                                                <div class="form-group pb-3" style="padding-top:7px;">
                                                    <label for="" class="control-label">Package </label>
                                                    <select name="heroform_days" class="form-control">
                                                        <option value="$100 - $150" selected="">$100 - $150</option>
                                                        <option value="$150 - $200">$150 - $200</option>
                                                        <option value="$200 - $250">$200 - $250</option>
                                                        <option value="$250 - $350">$250 - $350</option>
                                                        <option value="$250 - $500">$250 - $500</option>
                                                        <option value="$500 - $1000">$500 - $1000</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label"></label>
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary codefotech_color pull-left"
                                                                name="form_logo">Update
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                        <!-- Hero Section End -->

                                        <!-- About Section Start -->
                                        <h3 class="pt-5 text-center">About Section</h3>
                                        <form action="#" class="form-horizontal" enctype="multipart/form-data" method="post"
                                          accept-charset="utf-8">
                                        <div class="card shadow-sm p-3">
                                            <div class="form-group pb-3">
                                                <label for="" class="control-label">Title </label>
                                                <div class="">
                                                    <input type="text" name="about_section_title" class="form-control"
                                                           value="About Us">
                                                </div>
                                            </div>
                                            <div class="form-group pb-3">
                                                <label for="" class="control-label">Sub Title </label>
                                                <div class="">
                                                        <textarea name="hero_section_subtitle" class="form-control" cols="30"
                                                                  rows="10" style="height: 70px;">We Ensure Your Sweet Memories Will Never Fade Away.</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group pb-3">
                                                <label for="" class="control-label">Content </label>
                                                <div class="">
                                                        <textarea name="hero_section_content" class="form-control" cols="30"
                                                                  rows="10" style="height: 120px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. In at libero sed nunc venenatis imperdiet sed ornare turpis. Cras ac leo purus. Mauris quis diam velit.</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group pb-3">
                                                <label for="" class="control-label">Stunning Places</label>
                                                <div class="">
                                                    <input type="text" name="about_section_package" class="form-control"
                                                           value="200+">
                                                </div>
                                            </div>

                                            <div class="form-group pb-3">
                                                <label for="" class="control-label">Satisfied Customer</label>
                                                <div class="">
                                                    <input type="text" name="about_section_package" class="form-control"
                                                           value="200+">
                                                </div>
                                            </div>

                                            <div class="form-group pb-3">
                                                <label for="" class="control-label">Travel Places</label>
                                                <div class="">
                                                    <input type="text" name="about_section_package" class="form-control"
                                                           value="400+">
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group pb-3">
                                                        <label for="" class=control-label">Existing Photo</label>
                                                        <div class="" style="padding-top:6px;">
                                                            <img src="{{ asset('assets-1/img/default-img.jpg') }}"
                                                                 class="existing-photo" style="height:80px;">
                                                        </div>
                                                    </div>
                                                    <div class="form-group pb-3">
                                                        <label for="" class="control-label">New Photo</label>
                                                        <div class="" style="padding-top:6px;">
                                                            <input type="file" name="photo_logo">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group pb-3">
                                                        <label for="" class=control-label">Existing Photo</label>
                                                        <div class="" style="padding-top:6px;">
                                                            <img src="{{ asset('assets-1/img/default-img.jpg') }}"
                                                                 class="existing-photo" style="height:80px;">
                                                        </div>
                                                    </div>
                                                    <div class="form-group pb-3">
                                                        <label for="" class="control-label">New Photo</label>
                                                        <div class="" style="padding-top:6px;">
                                                            <input type="file" name="photo_logo">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="form-group pb-3">
                                                        <label for="" class=control-label">Existing Photo</label>
                                                        <div class="" style="padding-top:6px;">
                                                            <img src="{{ asset('assets-1/img/default-img.jpg') }}"
                                                                 class="existing-photo" style="height:80px;">
                                                        </div>
                                                    </div>
                                                    <div class="form-group pb-3">
                                                        <label for="" class="control-label">New Photo</label>
                                                        <div class="" style="padding-top:6px;">
                                                            <input type="file" name="photo_logo">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label"></label>
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary codefotech_color pull-left"
                                                            name="form_logo">Update
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                        <!-- About Section End -->

                                        <!-- Counter Section Start -->
                                        <h3 class="pt-5 text-center">Counter Section</h3>
                                        <form action="#" class="form-horizontal" enctype="multipart/form-data" method="post"
                                              accept-charset="utf-8">
                                            <div class="card shadow-sm p-3">
                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Trips & Tours</label>
                                                    <div class="">
                                                        <input type="text" name="counter_section_trip" class="form-control"
                                                               value="15+">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Outdoor Activities</label>
                                                    <div class="">
                                                        <input type="text" name="counter_section_activities" class="form-control"
                                                               value="15+">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Countries</label>
                                                    <div class="">
                                                        <input type="text" name="counter_section_countries" class="form-control"
                                                               value="40+">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Happy Customers</label>
                                                    <div class="">
                                                        <input type="text" name="counter_section_happy_customers" class="form-control"
                                                               value="500+">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label"></label>
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary codefotech_color pull-left"
                                                                name="form_logo">Update
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                        <!-- Counter Section End -->


                                        <!-- Trip Section Start -->
                                        <h3 class="pt-5 text-center">Trip Section</h3>
                                        <form action="#" class="form-horizontal" enctype="multipart/form-data" method="post"
                                              accept-charset="utf-8">
                                            <div class="card shadow-sm p-3">
                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Title</label>
                                                    <div class="">
                                                        <input type="text" name="trip_section_title" class="form-control"
                                                               value="Ghorepani Pool Hill Trek">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Address</label>
                                                    <div class="">
                                                        <input type="text" name="trip_section_address" class="form-control"
                                                               value="Australia, Bhutan, Canada, Dubai, India, Dashmeer, New Zealand, Paris, Srilanka">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Days</label>
                                                    <div class="">
                                                        <input type="text" name="trip_section_days" class="form-control"
                                                               value="5 Days">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">People</label>
                                                    <div class="">
                                                        <input type="text" name="trip_section_people" class="form-control"
                                                               value="2 - 12 People">
                                                    </div>
                                                </div>


                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Old Price</label>
                                                    <div class="">
                                                        <input type="text" name="trip_section_old_price" class="form-control"
                                                               value="$200">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">New Price</label>
                                                    <div class="">
                                                        <input type="text" name="trip_section_new_price" class="form-control"
                                                               value="$170">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label"></label>
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary codefotech_color pull-left"
                                                                name="form_logo">Update
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                        <!-- Trip Section End -->

{{--                                            <h3 class="pt-5">Team Member Section</h3>--}}
{{--                                            <form action="#" class="form-horizontal" enctype="multipart/form-data" method="post"--}}
{{--                                                  accept-charset="utf-8">--}}
{{--                                                <div class="card shadow-sm">--}}
{{--                                                    <div class="p-5">--}}
{{--                                                        <div class="form-group pb-3">--}}
{{--                                                            <label for="" class="col-sm-2 control-label">Title </label>--}}
{{--                                                            <div class="col-sm-6">--}}
{{--                                                                <input type="text" name="home_title_team_member" class="form-control"--}}
{{--                                                                       value="Our Team">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group pb-3">--}}
{{--                                                            <label for="" class="col-sm-2 control-label">SubTitle </label>--}}
{{--                                                            <div class="col-sm-6">--}}
{{--                                                                <input type="text" name="home_subtitle_team_member" class="form-control"--}}
{{--                                                                       value="Meet with all our qualified team members">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group pb-3">--}}
{{--                                                            <label for="" class="col-sm-2 control-label">Show on Home? </label>--}}
{{--                                                            <div class="col-sm-2" style="padding-top:7px;">--}}
{{--                                                                <select name="home_status_team_member" class="form-control"--}}
{{--                                                                        style="width:auto;">--}}
{{--                                                                    <option value="Show" selected="">Show</option>--}}
{{--                                                                    <option value="Hide">Hide</option>--}}
{{--                                                                </select>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label for="" class="col-sm-2 control-label"></label>--}}
{{--                                                            <div class="col-sm-6">--}}
{{--                                                                <button type="submit" class="btn btn-primary codefotech_color pull-left"--}}
{{--                                                                        name="form_home_team_member">Update--}}
{{--                                                                </button>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </form>--}}

{{--                                            <h3 class="pt-5">Counter Section (Text)</h3>--}}
{{--                                            <form action="#" class="form-horizontal pb-5" method="post" accept-charset="utf-8">--}}
{{--                                                <div class="card shadow-sm">--}}
{{--                                                    <div class="p-5">--}}
{{--                                                        <div class="form-group pb-3">--}}
{{--                                                            <label for="" class="col-sm-2 control-label">Item 1 - Title </label>--}}
{{--                                                            <div class="col-sm-3">--}}
{{--                                                                <input type="text" name="counter_1_title" class="form-control"--}}
{{--                                                                       value="COMPLETED TOURS">--}}
{{--                                                            </div>--}}
{{--                                                            <label for="" class="col-sm-2 control-label">Item 1 - Value </label>--}}
{{--                                                            <div class="col-sm-2">--}}
{{--                                                                <input type="text" name="counter_1_value" class="form-control" value="575">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group pb-3">--}}
{{--                                                            <label for="" class="col-sm-2 control-label">Item 2 - Title </label>--}}
{{--                                                            <div class="col-sm-3">--}}
{{--                                                                <input type="text" name="counter_2_title" class="form-control"--}}
{{--                                                                       value="HAPPY CLIENTS">--}}
{{--                                                            </div>--}}
{{--                                                            <label for="" class="col-sm-2 control-label">Item 2 - Value </label>--}}
{{--                                                            <div class="col-sm-2">--}}
{{--                                                                <input type="text" name="counter_2_value" class="form-control" value="300">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group pb-3">--}}
{{--                                                            <label for="" class="col-sm-2 control-label">Item 3 - Title </label>--}}
{{--                                                            <div class="col-sm-3">--}}
{{--                                                                <input type="text" name="counter_3_title" class="form-control"--}}
{{--                                                                       value="EXPERIENCED MEMBERS">--}}
{{--                                                            </div>--}}
{{--                                                            <label for="" class="col-sm-2 control-label">Item 3 - Value </label>--}}
{{--                                                            <div class="col-sm-2">--}}
{{--                                                                <input type="text" name="counter_3_value" class="form-control" value="70">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group pb-3">--}}
{{--                                                            <label for="" class="col-sm-2 control-label">Item 4 - Title </label>--}}
{{--                                                            <div class="col-sm-3">--}}
{{--                                                                <input type="text" name="counter_4_title" class="form-control"--}}
{{--                                                                       value="AWARDS WON">--}}
{{--                                                            </div>--}}
{{--                                                            <label for="" class="col-sm-2 control-label">Item 4 - Value </label>--}}
{{--                                                            <div class="col-sm-2">--}}
{{--                                                                <input type="text" name="counter_4_value" class="form-control" value="45">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group pb-3">--}}
{{--                                                            <label for="" class="col-sm-2 control-label">Show on Home? </label>--}}
{{--                                                            <div class="col-sm-2">--}}
{{--                                                                <select name="counter_status"--}}
{{--                                                                        class="form-control select2 select2-hidden-accessible"--}}
{{--                                                                        style="width:auto;" tabindex="-1" aria-hidden="true">--}}
{{--                                                                    <option value="Show" selected="">Show</option>--}}
{{--                                                                    <option value="Hide">Hide</option>--}}
{{--                                                                </select><span class="select2 select2-container select2-container--default"--}}
{{--                                                                               dir="ltr" style="width: auto;"><span class="selection"><span--}}
{{--                                                                            class="select2-selection select2-selection--single"--}}
{{--                                                                            role="combobox" aria-haspopup="true" aria-expanded="false"--}}
{{--                                                                            tabindex="0"--}}
{{--                                                                            aria-labelledby="select2-counter_status-k7-container"><span--}}
{{--                                                                                class="select2-selection__rendered"--}}
{{--                                                                                id="select2-counter_status-k7-container"--}}
{{--                                                                                title="Show">Show</span><span--}}
{{--                                                                                class="select2-selection__arrow" role="presentation"><b--}}
{{--                                                                                    role="presentation"></b></span></span></span><span--}}
{{--                                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label for="" class="col-sm-2 control-label"></label>--}}
{{--                                                            <div class="col-sm-6">--}}
{{--                                                                <button type="submit" class="btn btn-primary codefotech_color pull-left"--}}
{{--                                                                        name="form_home_counter_text">Update--}}
{{--                                                                </button>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </form>--}}


{{--                                            <h3 class="pt-5">Counter Section (Photo)</h3>--}}
{{--                                            <form action="#" class="form-horizontal pb-5" enctype="multipart/form-data" method="post"--}}
{{--                                                  accept-charset="utf-8">--}}
{{--                                                <div class="card shadow-sm">--}}
{{--                                                    <div class="p-5">--}}
{{--                                                        <div class="form-group pb-3">--}}
{{--                                                            <label for="" class="control-label">Existing Counter Background</label>--}}
{{--                                                            <div class="col-sm-6" style="padding-top:6px;">--}}
{{--                                                                <img--}}
{{--                                                                    src="https://demo.phpscriptpoint.com/travelfresh/public/uploads/counter.jpg"--}}
{{--                                                                    class="existing-photo" style="height:180px;">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group pb-3">--}}
{{--                                                            <label for="" class="control-label">New Counter Background</label>--}}
{{--                                                            <div class="col-sm-6" style="padding-top:6px;">--}}
{{--                                                                <img src="{{ asset('assets-1/img/default-img.jpg') }}"--}}
{{--                                                                     class="existing-photo" style="height:180px;">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-sm-6" style="padding-top:6px;">--}}
{{--                                                                <input type="file" name="counter_photo">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label for="" class="control-label"></label>--}}
{{--                                                            <div class="col-sm-6">--}}
{{--                                                                <button type="submit" class="btn btn-primary codefotech_color pull-left"--}}
{{--                                                                        name="form_home_counter_photo">Update--}}
{{--                                                                </button>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </form>--}}

{{--                                            <div class="row">--}}
{{--                                                <div class="col-md-6">--}}
{{--                                                    <h3>Testimonial Section (Text)</h3>--}}
{{--                                                    <form action="#" class="form-horizontal pb-5" method="post" accept-charset="utf-8">--}}
{{--                                                        <div class="card shadow-sm">--}}
{{--                                                            <div class="p-5">--}}
{{--                                                                <div class="form-group pb-3">--}}
{{--                                                                    <label for="" class="col-sm-2 control-label">Title </label>--}}
{{--                                                                    <div class="col-sm-10">--}}
{{--                                                                        <input type="text" name="home_title_testimonial"--}}
{{--                                                                               class="form-control" value="Testimonial">--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="form-group pb-3">--}}
{{--                                                                    <label for="" class="col-sm-2 control-label">SubTitle </label>--}}
{{--                                                                    <div class="col-sm-10">--}}
{{--                                                                        <input type="text" name="home_subtitle_testimonial"--}}
{{--                                                                               class="form-control"--}}
{{--                                                                               value="Our happy clients always recommend our travel agency">--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="form-group pb-3">--}}
{{--                                                                    <label for="" class="col-sm-2 control-label">Show on Home? </label>--}}
{{--                                                                    <div class="col-sm-4">--}}
{{--                                                                        <select name="home_status_testimonial"--}}
{{--                                                                                class="form-control select2 select2-hidden-accessible"--}}
{{--                                                                                style="width:auto;" tabindex="-1" aria-hidden="true">--}}
{{--                                                                            <option value="Show" selected="">Show</option>--}}
{{--                                                                            <option value="Hide">Hide</option>--}}
{{--                                                                        </select><span--}}
{{--                                                                            class="select2 select2-container select2-container--default"--}}
{{--                                                                            dir="ltr" style="width: auto;"><span class="selection"><span--}}
{{--                                                                                    class="select2-selection select2-selection--single"--}}
{{--                                                                                    role="combobox" aria-haspopup="true"--}}
{{--                                                                                    aria-expanded="false" tabindex="0"--}}
{{--                                                                                    aria-labelledby="select2-home_status_testimonial-ts-container"><span--}}
{{--                                                                                        class="select2-selection__rendered"--}}
{{--                                                                                        id="select2-home_status_testimonial-ts-container"--}}
{{--                                                                                        title="Show">Show</span><span--}}
{{--                                                                                        class="select2-selection__arrow"--}}
{{--                                                                                        role="presentation"><b--}}
{{--                                                                                            role="presentation"></b></span></span></span><span--}}
{{--                                                                                class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="form-group">--}}
{{--                                                                    <label for="" class="col-sm-2 control-label"></label>--}}
{{--                                                                    <div class="col-sm-6">--}}
{{--                                                                        <button type="submit" class="btn btn-primary codefotech_color pull-left"--}}
{{--                                                                                name="form_home_testimonial_text">Update--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </form>--}}
{{--                                                </div>--}}

{{--                                                <div class="col-md-6">--}}
{{--                                                    <h3>Testimonial Section (Photo)</h3>--}}
{{--                                                    <form action="#"--}}
{{--                                                          class="form-horizontal pb-5" enctype="multipart/form-data" method="post"--}}
{{--                                                          accept-charset="utf-8">--}}
{{--                                                        <div class="card shadow-sm">--}}
{{--                                                            <div class="p-5">--}}
{{--                                                                <div class="form-group pb-3">--}}
{{--                                                                    <label for="" class="control-label">Existing Counter Background</label>--}}
{{--                                                                    <div class="col-sm-6" style="padding-top:6px;">--}}
{{--                                                                        <img--}}
{{--                                                                            src="https://demo.phpscriptpoint.com/travelfresh/public/uploads/testimonial.jpg"--}}
{{--                                                                            class="existing-photo" style="height:180px;">--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="form-group pb-3">--}}
{{--                                                                    <label for="" class="control-label">New Counter Background</label>--}}
{{--                                                                    <div class="col-sm-6" style="padding-top:6px;">--}}
{{--                                                                        <img src="{{ asset('assets-1/img/default-img.jpg') }}"--}}
{{--                                                                             class="existing-photo" style="height:180px;">--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-sm-6" style="padding-top:6px;">--}}
{{--                                                                        <input type="file" name="home_photo_testimonial">--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="form-group">--}}
{{--                                                                    <label for="" class="col-sm-2 control-label"></label>--}}
{{--                                                                    <div class="col-sm-6">--}}
{{--                                                                        <button type="submit" class="btn btn-primary codefotech_color pull-left"--}}
{{--                                                                                name="form_home_testimonial_photo">Update--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </form>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}


{{--                                            <h3 class="pt-5">News Section</h3>--}}
{{--                                            <form action="#"--}}
{{--                                                  class="form-horizontal pb-5" enctype="multipart/form-data" method="post"--}}
{{--                                                  accept-charset="utf-8">--}}
{{--                                                <div class="card shadow-sm">--}}
{{--                                                    <div class="p-5">--}}
{{--                                                        <div class="form-group pb-3">--}}
{{--                                                            <label for="" class="col-sm-2 control-label">Title </label>--}}
{{--                                                            <div class="col-sm-6">--}}
{{--                                                                <input type="text" name="home_title_news" class="form-control"--}}
{{--                                                                       value="Latest News">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group pb-3">--}}
{{--                                                            <label for="" class="col-sm-2 control-label">SubTitle </label>--}}
{{--                                                            <div class="col-sm-6">--}}
{{--                                                                <input type="text" name="home_subtitle_news" class="form-control"--}}
{{--                                                                       value="See All Our Updated and Latest News">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group pb-3">--}}
{{--                                                            <label for="" class="col-sm-2 control-label">Show on Home? </label>--}}
{{--                                                            <div class="col-sm-2">--}}
{{--                                                                <select name="home_status_news"--}}
{{--                                                                        class="form-control select2 select2-hidden-accessible"--}}
{{--                                                                        style="width:auto;" tabindex="-1" aria-hidden="true">--}}
{{--                                                                    <option value="Show" selected="">Show</option>--}}
{{--                                                                    <option value="Hide">Hide</option>--}}
{{--                                                                </select><span class="select2 select2-container select2-container--default"--}}
{{--                                                                               dir="ltr" style="width: auto;"><span class="selection"><span--}}
{{--                                                                            class="select2-selection select2-selection--single"--}}
{{--                                                                            role="combobox" aria-haspopup="true" aria-expanded="false"--}}
{{--                                                                            tabindex="0"--}}
{{--                                                                            aria-labelledby="select2-home_status_news-7n-container"><span--}}
{{--                                                                                class="select2-selection__rendered"--}}
{{--                                                                                id="select2-home_status_news-7n-container"--}}
{{--                                                                                title="Show">Show</span><span--}}
{{--                                                                                class="select2-selection__arrow" role="presentation"><b--}}
{{--                                                                                    role="presentation"></b></span></span></span><span--}}
{{--                                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label for="" class="col-sm-2 control-label"></label>--}}
{{--                                                            <div class="col-sm-6">--}}
{{--                                                                <button type="submit" class="btn btn-primary codefotech_color pull-left"--}}
{{--                                                                        name="form_home_news">Update--}}
{{--                                                                </button>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </form>--}}

{{--                                            <h3 class="pt-5">Client Section</h3>--}}
{{--                                            <form action="#"--}}
{{--                                                  class="form-horizontal pb-5" enctype="multipart/form-data" method="post"--}}
{{--                                                  accept-charset="utf-8">--}}
{{--                                                <div class="card shadow-sm">--}}
{{--                                                    <div class="p-5">--}}
{{--                                                        <div class="form-group pb-3">--}}
{{--                                                            <label for="" class="col-sm-2 control-label">Title </label>--}}
{{--                                                            <div class="col-sm-6">--}}
{{--                                                                <input type="text" name="home_title_client" class="form-control"--}}
{{--                                                                       value="Our Client">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group pb-3">--}}
{{--                                                            <label for="" class="col-sm-2 control-label">SubTitle </label>--}}
{{--                                                            <div class="col-sm-6">--}}
{{--                                                                <input type="text" name="home_subtitle_client" class="form-control"--}}
{{--                                                                       value="We have a lot of valuable clients throughout the whole world">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group pb-3">--}}
{{--                                                            <label for="" class="col-sm-2 control-label">Show on Home? </label>--}}
{{--                                                            <div class="col-sm-2">--}}
{{--                                                                <select name="home_status_client"--}}
{{--                                                                        class="form-control select2 select2-hidden-accessible"--}}
{{--                                                                        style="width:auto;" tabindex="-1" aria-hidden="true">--}}
{{--                                                                    <option value="Show" selected="">Show</option>--}}
{{--                                                                    <option value="Hide">Hide</option>--}}
{{--                                                                </select><span class="select2 select2-container select2-container--default"--}}
{{--                                                                               dir="ltr" style="width: auto;"><span class="selection"><span--}}
{{--                                                                            class="select2-selection select2-selection--single"--}}
{{--                                                                            role="combobox" aria-haspopup="true" aria-expanded="false"--}}
{{--                                                                            tabindex="0"--}}
{{--                                                                            aria-labelledby="select2-home_status_client-a3-container"><span--}}
{{--                                                                                class="select2-selection__rendered"--}}
{{--                                                                                id="select2-home_status_client-a3-container" title="Show">Show</span><span--}}
{{--                                                                                class="select2-selection__arrow" role="presentation"><b--}}
{{--                                                                                    role="presentation"></b></span></span></span><span--}}
{{--                                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label for="" class="col-sm-2 control-label"></label>--}}
{{--                                                            <div class="col-sm-6">--}}
{{--                                                                <button type="submit" class="btn btn-primary codefotech_color pull-left"--}}
{{--                                                                        name="form_home_client">Update--}}
{{--                                                                </button>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </form>--}}


{{--                                            <h3 class="pt-5">Destination Section</h3>--}}
{{--                                            <form action="#"--}}
{{--                                                  class="form-horizontal pb-5" enctype="multipart/form-data" method="post"--}}
{{--                                                  accept-charset="utf-8">--}}
{{--                                                <div class="card shadow-sm">--}}
{{--                                                    <div class="p-5">--}}
{{--                                                        <div class="form-group pb-3">--}}
{{--                                                            <label for="" class="col-sm-2 control-label">Title </label>--}}
{{--                                                            <div class="col-sm-6">--}}
{{--                                                                <input type="text" name="home_title_destination" class="form-control"--}}
{{--                                                                       value="Destination">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group pb-3">--}}
{{--                                                            <label for="" class="col-sm-2 control-label">SubTitle </label>--}}
{{--                                                            <div class="col-sm-6">--}}
{{--                                                                <input type="text" name="home_subtitle_destination" class="form-control"--}}
{{--                                                                       value="All our awesome destination places of the world you can travel with us">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group pb-3">--}}
{{--                                                            <label for="" class="col-sm-2 control-label">Show on Home? </label>--}}
{{--                                                            <div class="col-sm-2">--}}
{{--                                                                <select name="home_status_destination"--}}
{{--                                                                        class="form-control select2 select2-hidden-accessible"--}}
{{--                                                                        style="width:auto;" tabindex="-1" aria-hidden="true">--}}
{{--                                                                    <option value="Show" selected="">Show</option>--}}
{{--                                                                    <option value="Hide">Hide</option>--}}
{{--                                                                </select><span class="select2 select2-container select2-container--default"--}}
{{--                                                                               dir="ltr" style="width: auto;"><span class="selection"><span--}}
{{--                                                                            class="select2-selection select2-selection--single"--}}
{{--                                                                            role="combobox" aria-haspopup="true" aria-expanded="false"--}}
{{--                                                                            tabindex="0"--}}
{{--                                                                            aria-labelledby="select2-home_status_destination-ka-container"><span--}}
{{--                                                                                class="select2-selection__rendered"--}}
{{--                                                                                id="select2-home_status_destination-ka-container"--}}
{{--                                                                                title="Show">Show</span><span--}}
{{--                                                                                class="select2-selection__arrow" role="presentation"><b--}}
{{--                                                                                    role="presentation"></b></span></span></span><span--}}
{{--                                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label for="" class="col-sm-2 control-label"></label>--}}
{{--                                                            <div class="col-sm-6">--}}
{{--                                                                <button type="submit" class="btn btn-primary codefotech_color pull-left"--}}
{{--                                                                        name="form_home_destination">Update--}}
{{--                                                                </button>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </form>--}}


{{--                                            <h3 class="pt-5">Featured Package Section</h3>--}}
{{--                                            <form action="#"--}}
{{--                                                  class="form-horizontal pb-5" enctype="multipart/form-data" method="post"--}}
{{--                                                  accept-charset="utf-8">--}}
{{--                                                <div class="card shadow-sm">--}}
{{--                                                    <div class="p-5">--}}
{{--                                                        <div class="form-group pb-3">--}}
{{--                                                            <label for="" class="col-sm-2 control-label">Title </label>--}}
{{--                                                            <div class="col-sm-6">--}}
{{--                                                                <input type="text" name="home_title_featured_package" class="form-control"--}}
{{--                                                                       value="Featured Packages">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group pb-3">--}}
{{--                                                            <label for="" class="col-sm-2 control-label">SubTitle </label>--}}
{{--                                                            <div class="col-sm-6">--}}
{{--                                                                <input type="text" name="home_subtitle_featured_package"--}}
{{--                                                                       class="form-control"--}}
{{--                                                                       value="All our featured tour packages are given below">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group pb-3">--}}
{{--                                                            <label for="" class="col-sm-2 control-label">Show on Home? </label>--}}
{{--                                                            <div class="col-sm-2">--}}
{{--                                                                <select name="home_status_featured_package"--}}
{{--                                                                        class="form-control select2 select2-hidden-accessible"--}}
{{--                                                                        style="width:auto;" tabindex="-1" aria-hidden="true">--}}
{{--                                                                    <option value="Show" selected="">Show</option>--}}
{{--                                                                    <option value="Hide">Hide</option>--}}
{{--                                                                </select><span class="select2 select2-container select2-container--default"--}}
{{--                                                                               dir="ltr" style="width: auto;"><span class="selection"><span--}}
{{--                                                                            class="select2-selection select2-selection--single"--}}
{{--                                                                            role="combobox" aria-haspopup="true" aria-expanded="false"--}}
{{--                                                                            tabindex="0"--}}
{{--                                                                            aria-labelledby="select2-home_status_featured_package-4o-container"><span--}}
{{--                                                                                class="select2-selection__rendered"--}}
{{--                                                                                id="select2-home_status_featured_package-4o-container"--}}
{{--                                                                                title="Show">Show</span><span--}}
{{--                                                                                class="select2-selection__arrow" role="presentation"><b--}}
{{--                                                                                    role="presentation"></b></span></span></span><span--}}
{{--                                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label for="" class="col-sm-2 control-label"></label>--}}
{{--                                                            <div class="col-sm-6">--}}
{{--                                                                <button type="submit" class="btn btn-primary codefotech_color pull-left"--}}
{{--                                                                        name="form_home_featured_package">Update--}}
{{--                                                                </button>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </form>--}}


{{--                                            <div class="row">--}}
{{--                                                <div class="col-md-6">--}}
{{--                                                    <h3 class="pt-5">Newsletter Section (Text)</h3>--}}
{{--                                                    <form action="#"--}}
{{--                                                          class="form-horizontal pb-5" method="post" accept-charset="utf-8">--}}
{{--                                                        <div class="card shadow-sm">--}}
{{--                                                            <div class="p-5">--}}
{{--                                                                <div class="form-group pb-3">--}}
{{--                                                                    <label for="" class="col-sm-2 control-label">Title </label>--}}
{{--                                                                    <div class="col-sm-10">--}}
{{--                                                                        <input type="text" name="newsletter_title" class="form-control"--}}
{{--                                                                               value="Newsletter">--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="form-group pb-3">--}}
{{--                                                                    <label for="" class="col-sm-2 control-label">Newsletter Text </label>--}}
{{--                                                                    <div class="col-sm-10">--}}
{{--                                                                        <textarea name="newsletter_text" class="form-control" cols="30"--}}
{{--                                                                                  rows="10" style="height: 120px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid fugit expedita, iure ullam cum vero ex sint aperiam maxime.</textarea>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="form-group pb-3">--}}
{{--                                                                    <label for="" class="col-sm-2 control-label">Status </label>--}}
{{--                                                                    <div class="col-sm-4">--}}
{{--                                                                        <select name="newsletter_status" class="form-control"--}}
{{--                                                                                style="width:auto;">--}}
{{--                                                                            <option value="Show" selected="">Show</option>--}}
{{--                                                                            <option value="Hide">Hide</option>--}}
{{--                                                                        </select>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="form-group">--}}
{{--                                                                    <label for="" class="col-sm-2 control-label"></label>--}}
{{--                                                                    <div class="col-sm-6">--}}
{{--                                                                        <button type="submit" class="btn btn-primary codefotech_color pull-left"--}}
{{--                                                                                name="form_newsletter_text">Update--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </form>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-md-6">--}}
{{--                                                    <h3 class="pt-5">Newsletter Section (Photo)</h3>--}}
{{--                                                    <form action="#"--}}
{{--                                                          class="form-horizontal pb-5" enctype="multipart/form-data" method="post"--}}
{{--                                                          accept-charset="utf-8">--}}
{{--                                                        <div class="card shadow-sm">--}}
{{--                                                            <div class="p-5">--}}
{{--                                                                <div class="form-group pb-3">--}}
{{--                                                                    <label for="" class="control-label">Existing Counter Background</label>--}}
{{--                                                                    <div class="col-sm-6" style="padding-top:6px;">--}}
{{--                                                                        <img--}}
{{--                                                                            src="https://demo.phpscriptpoint.com/travelfresh/public/uploads/newsletter.jpg"--}}
{{--                                                                            class="existing-photo" style="height:180px;">--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="form-group pb-3">--}}
{{--                                                                    <label for="" class="control-label">New Counter Background</label>--}}
{{--                                                                    <div class="col-sm-6" style="padding-top:6px;">--}}
{{--                                                                        <img src="{{ asset('assets-1/img/default-img.jpg') }}"--}}
{{--                                                                             class="existing-photo" style="height:180px;">--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-sm-6" style="padding-top:6px;">--}}
{{--                                                                        <input type="file" name="newsletter_photo">--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="form-group">--}}
{{--                                                                    <label for="" class="col-sm-2 control-label"></label>--}}
{{--                                                                    <div class="col-sm-6">--}}
{{--                                                                        <button type="submit" class="btn btn-primary codefotech_color pull-left"--}}
{{--                                                                                name="form_newsletter_photo">Update--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </form>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

                                        </div>
                                </form>

                            </div>
                            <!-- Home Page Form End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
