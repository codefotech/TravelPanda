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
                        <aside id="layout-menu" style="overflow-y: auto; overflow-x: hidden;"
                               data-bg-class="bg-menu-theme"
                               class="menu-vertical menu bg-menu-theme py-3 rounded ps w-100">
                            <ul class="menu-inner py-1 ps">
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
                                <li class="menu-item">
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
                                <li class="menu-item active">
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
                        <div style="height: 100vh; overflow-y: auto; overflow-x: hidden;" class="tab-content p-0">
                            <!-- Logo Form Start -->
                            <div class="tab-pane" id="tab_1">
                                <form action="#" class="form-horizontal" enctype="multipart/form-data" method="post">
                                    <div class="card shadow-sm p-3">
                                        <div class="form-group pb-3">
                                            <label for="" class="control-label">Existing Photo</label>
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
                                        <div class="form-group">
                                            <label for="" class="control-label"></label>
                                            <div class="">
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
                                            <label for="" class="control-label">Existing Photo</label>
                                            <div class="" style="padding-top:6px;">
                                                <img
                                                    src="https://demo.phpscriptpoint.com/travelfresh/public/uploads/favicon.png"
                                                    class="existing-photo" style="height:40px;">
                                            </div>
                                        </div>
                                        <div class="form-group pb-3">
                                            <label for="" class="control-label">New Photo</label>
                                            <div class="" style="padding-top:6px;">
                                                <input type="file" name="photo_favicon">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="control-label"></label>
                                            <div class="">
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
                                            <label for="" class="control-label">Top Bar Email </label>
                                            <div class="">
                                                <input type="text" class="form-control" name="top_bar_email"
                                                       value="info@yourwebsite.com">
                                            </div>
                                        </div>
                                        <div class="form-group pb-3">
                                            <label for="" class="control-label">Top Bar Phone Number </label>
                                            <div class="">
                                                <input type="text" class="form-control" name="top_bar_phone"
                                                       value="954-648-1802">
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="form-group pb-3">
                                            <label for="" class="control-label">Footer - Copyright </label>
                                            <div class="">
                                                <input class="form-control" type="text" name="footer_copyright"
                                                       value="Copyright 2022, TravelFresh. All Rights Reserved.">
                                            </div>
                                        </div>
                                        <div class="form-group pb-3">
                                            <label for="" class="control-label">Footer Address </label>
                                            <div class="">
                                                <textarea class="form-control" name="footer_address"
                                                          style="height:70px;">3153 Foley Street Miami, FL 33176</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group pb-3">
                                            <label for="" class="control-label">Footer Email </label>
                                            <div class="">
                                                <input type="email" class="form-control" name="footer_email"
                                                       value="info@yourwebsite.com">
                                            </div>
                                        </div>
                                        <div class="form-group pb-3">
                                            <label for="" class="control-label">Footer Phone </label>
                                            <div class="">
                                                <input type="text" class="form-control" name="footer_phone"
                                                       value="954-648-1802">
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="form-group pb-3">
                                            <label for="" class="control-label">Social Icon </label>
                                            <div class="form-group mb-3">
                                                <select class="form-control" id="select1" name="social_icon">
                                                    <option value="facebook" selected>Facebook</option>
                                                    <option value="instagram">Instagram</option>
                                                    <option value="twitter">Twitter</option>
                                                    <option value="dribbble">Dribbble</option>
                                                    <option value="linkedin">Linkedin</option>
                                                    <option value="others">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group pb-3">
                                            <label for="" class="control-label">Top Bar Email </label>
                                            <div class="">
                                                <input type="text" class="form-control" name="social_icon_url"
                                                       value="https://abc.com">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="control-label"></label>
                                            <div class="">
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
                            <div class="tab-pane" id="tab_4">
                                <form action="#" class="form-horizontal" enctype="multipart/form-data" method="post">
                                    <div class="card shadow-sm p-3">

                                        <!-- Hero Section Start -->
                                        <h3 class="text-center">Hero Section</h3>
                                        <form action="#" class="form-horizontal" enctype="multipart/form-data"
                                              method="post"
                                              accept-charset="utf-8">
                                            <div class="card shadow-sm p-3">
                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Title </label>
                                                    <div class="">
                                                        <input type="text" name="hero_section_title"
                                                               class="form-control"
                                                               value="Escape your comfort zone">
                                                    </div>
                                                </div>
                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Content </label>
                                                    <div class="">
                                                        <textarea name="hero_section_content" class="form-control"
                                                                  cols="30"
                                                                  rows="10" style="height: 120px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid fugit expedita, iure ullam cum vero ex sint aperiam maxime.</textarea>
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="form-group pb-3" style="padding-top:7px;">
                                                    <label for="" class="control-label">Destination </label>
                                                    <select name="heroform_desination" class="form-control">
                                                        <option value="Dhaka" selected>Dhaka</option>
                                                        <option value="Chattogram">Chattogram</option>
                                                        <option value="Barishal">Barishal</option>
                                                        <option value="Dhaka">Dhaka</option>
                                                        <option value="Khulna">Khulna</option>
                                                        <option value="Rajshahi">Rajshahi</option>
                                                        <option value="Rangpur">Rangpur</option>
                                                        <option value="Mymensingh">Mymensingh</option>
                                                        <option value="Sylhet">Sylhet</option>
                                                    </select>
                                                </div>

                                                <div class="form-group pb-3" style="padding-top:7px;">
                                                    <label for="" class="control-label">Trip Types </label>
                                                    <select name="heroform_trip_type" class="form-control">
                                                        <option value="Holiday Package" selected>Holiday Package
                                                        </option>
                                                        <option value="Full Of FamJam">Full Of FamJam</option>
                                                        <option value="Friends-Only Trip">Friends-Only Trip</option>
                                                        <option value="Siblings-Only Trip">Siblings-Only Trip</option>
                                                        <option value="All-Girls Or An All-Boys Trip">All-Girls Or An
                                                            All-Boys Trip
                                                        </option>
                                                        <option value="Volunteer Trip">Volunteer Trip</option>
                                                        <option value="Impromptu Trip">Impromptu Trip</option>
                                                        <option value="Solo Trip">Solo Trip</option>
                                                        <option value="Adventure Trip">Adventure Trip</option>
                                                        <option value="Luxury Trip">Luxury Trip</option>
                                                    </select>
                                                </div>

                                                <div class="form-group pb-3" style="padding-top:7px;">
                                                    <label for="" class="control-label">Activity </label>
                                                    <select name="heroform_trip_type" class="form-control">
                                                        <option value="Star Line" selected>Star Line</option>
                                                        <option value="Green Line">Green Line</option>
                                                        <option value="Hanif Enterprise">Hanif Enterprise</option>
                                                        <option value="Shyamoli Paribahan">Shyamoli Paribahan</option>
                                                        <option value="Shohag Paribahan">Shohag Paribahan</option>
                                                        <option value="Ena Transport">Ena Transport</option>
                                                        <option value="London Express">London Express</option>
                                                        <option value="Saint Martin Paribahan">Saint Martin Paribahan
                                                        </option>
                                                        <option value="Desh Travels">Desh Travels</option>
                                                        <option value="Saudia Paribahan">Saudia Paribahan</option>
                                                    </select>
                                                </div>

                                                <div class="form-group pb-3" style="padding-top:7px;">
                                                    <label for="" class="control-label">Days </label>
                                                    <select name="heroform_days" class="form-control">
                                                        <option value="0 Days - 1 Days" selected>0 Days - 1 Days
                                                        </option>
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
                                                        <option value="$100 - $150" selected>$100 - $150</option>
                                                        <option value="$150 - $200">$150 - $200</option>
                                                        <option value="$200 - $250">$200 - $250</option>
                                                        <option value="$250 - $350">$250 - $350</option>
                                                        <option value="$250 - $500">$250 - $500</option>
                                                        <option value="$500 - $1000">$500 - $1000</option>
                                                    </select>
                                                </div>

                                                <hr>

                                                <div class="form-group pb-3">
                                                    <label for="" class=control-label">Existing Background Photo</label>
                                                    <div class="" style="padding-top:6px;">
                                                        <img src="{{ asset('assets-1/img/default-img.jpg') }}"
                                                             class="hero-existing-photo" name="hero-existing-photo"
                                                             style="height:80px;">
                                                    </div>
                                                </div>
                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">New Background Photo</label>
                                                    <div class="" style="padding-top:6px;">
                                                        <input type="file" name="hero-new-photo" class="hero-new-photo">
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label"></label>
                                                    <div class="text-center">
                                                        <button type="submit"
                                                                class="btn btn-primary codefotech_color pull-left"
                                                                name="form_logo">Update Hero Section
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                        <!-- Hero Section End -->

                                        <!-- About Section Start -->
                                        <h3 class="pt-5 text-center">About Section</h3>
                                        <form action="#" class="form-horizontal" enctype="multipart/form-data"
                                              method="post"
                                              accept-charset="utf-8">
                                            <div class="card shadow-sm p-3">
                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Title </label>
                                                    <div class="">
                                                        <input type="text" name="about_section_title"
                                                               class="form-control"
                                                               value="About Us">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Subtitle </label>
                                                    <div class="">
                                                        <input type="text" name="about_section_subtitle"
                                                               class="form-control"
                                                               value="We Ensure Your Sweet Memories Will Never Fade Away.">
                                                    </div>
                                                </div>
                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Content </label>
                                                    <div class="">
                                                        <textarea name="hero_section_content" class="form-control"
                                                                  cols="30"
                                                                  rows="10" style="height: 120px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. In at libero sed nunc venenatis imperdiet sed ornare turpis. Cras ac leo purus. Mauris quis diam velit.</textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Stunning Places</label>
                                                    <div class="">
                                                        <input type="text" name="about_section_package"
                                                               class="form-control"
                                                               value="200+">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Satisfied Customer</label>
                                                    <div class="">
                                                        <input type="text" name="about_section_package"
                                                               class="form-control"
                                                               value="200+">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Travel Places</label>
                                                    <div class="">
                                                        <input type="text" name="about_section_package"
                                                               class="form-control"
                                                               value="400+">
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="form-group pb-3">
                                                    <label for="" class=control-label">Existing Photo</label>
                                                    <div class="" style="padding-top:6px;">
                                                        <img src="{{ asset('assets-1/img/default-img.jpg') }}"
                                                             class="about-existing-photo" name="about-existing-photo"
                                                             style="height:80px;">
                                                    </div>
                                                </div>
                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">New Photo</label>
                                                    <div class="" style="padding-top:6px;">
                                                        <input type="file" name="about-new-photo"
                                                               class="about-new-photo">
                                                    </div>
                                                </div>
                                                <hr>

                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label"></label>
                                                    <div class="text-center">
                                                        <button type="submit"
                                                                class="btn btn-primary codefotech_color pull-left"
                                                                name="form_logo">Update About Section
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                        <!-- About Section End -->

                                        <!-- Counter Section Start -->
                                        <h3 class="pt-5 text-center">Counter Section</h3>
                                        <form action="#" class="form-horizontal" enctype="multipart/form-data"
                                              method="post"
                                              accept-charset="utf-8">
                                            <div class="card shadow-sm p-3">
                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Trips & Tours</label>
                                                    <div class="">
                                                        <input type="text" name="counter_section_trip"
                                                               class="form-control"
                                                               value="15+">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Outdoor Activities</label>
                                                    <div class="">
                                                        <input type="text" name="counter_section_activities"
                                                               class="form-control"
                                                               value="15+">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Countries</label>
                                                    <div class="">
                                                        <input type="text" name="counter_section_countries"
                                                               class="form-control"
                                                               value="40+">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Happy Customers</label>
                                                    <div class="">
                                                        <input type="text" name="counter_section_happy_customers"
                                                               class="form-control"
                                                               value="500+">
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="form-group pb-3">
                                                    <label for="" class=control-label">Existing Background Photo</label>
                                                    <div class="" style="padding-top:6px;">
                                                        <img src="{{ asset('assets-1/img/default-img.jpg') }}"
                                                             class="counter-existing-photo" name="counter-existing-photo"
                                                             style="height:80px;">
                                                    </div>
                                                </div>
                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">New Background Photo</label>
                                                    <div class="" style="padding-top:6px;">
                                                        <input type="file" name="counter-new-photo"
                                                               class="counter-new-photo">
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label"></label>
                                                    <div class="text-center">
                                                        <button type="submit"
                                                                class="btn btn-primary codefotech_color pull-left"
                                                                name="form_logo">Update Counter Section
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- Counter Section End -->

                                        <!-- Trip Section Start -->
                                        <h3 class="pt-5 text-center">Trip Section</h3>
                                        <form action="#" class="form-horizontal" enctype="multipart/form-data"
                                              method="post"
                                              accept-charset="utf-8">
                                            <div class="card shadow-sm p-3">
                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Title</label>
                                                    <div class="">
                                                        <input type="text" name="trip_section_title"
                                                               class="form-control"
                                                               value="Ghorepani Pool Hill Trek">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Address</label>
                                                    <div class="">
                                                        <input type="text" name="trip_section_address"
                                                               class="form-control"
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
                                                        <input type="text" name="trip_section_people"
                                                               class="form-control"
                                                               value="2 - 12 People">
                                                    </div>
                                                </div>


                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Old Price</label>
                                                    <div class="">
                                                        <input type="text" name="trip_section_old_price"
                                                               class="form-control"
                                                               value="$200">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">New Price</label>
                                                    <div class="">
                                                        <input type="text" name="trip_section_new_price"
                                                               class="form-control"
                                                               value="$170">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Discount</label>
                                                    <div class="">
                                                        <input type="text" name="trip_section_discount"
                                                               class="form-control"
                                                               value="15% Off">
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="form-group pb-3">
                                                    <label for="" class=control-label">Existing Photo</label>
                                                    <div class="" style="padding-top:6px;">
                                                        <img src="{{ asset('assets-1/img/default-img.jpg') }}"
                                                             class="trip-existing-photo" name="trip-existing-photo"
                                                             style="height:80px;">
                                                    </div>
                                                </div>
                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">New Photo</label>
                                                    <div class="" style="padding-top:6px;">
                                                        <input type="file" name="trip-new-photo" class="trip-new-photo">
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label"></label>
                                                    <div class="text-center">
                                                        <button type="submit"
                                                                class="btn btn-primary codefotech_color pull-left"
                                                                name="form_logo">Update Trip Section
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                        <!-- Trip Section End -->

                                        <!-- Place Section Start -->
                                        <h3 class="pt-5 text-center">Place Section</h3>
                                        <form action="#" class="form-horizontal" enctype="multipart/form-data"
                                              method="post"
                                              accept-charset="utf-8">
                                            <div class="card shadow-sm p-3">
                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Title</label>
                                                    <div class="">
                                                        <input type="text" name="place_section_title"
                                                               class="form-control"
                                                               value="Take It Easy">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Subtitle</label>
                                                    <div class="">
                                                        <input type="text" name="place_section_subtitle"
                                                               class="form-control"
                                                               value="Awesome Places To Explore">
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Place Name</label>
                                                    <div class="">
                                                        <input type="text" name="place_section_name"
                                                               class="form-control"
                                                               value="Dubai">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Place Activities</label>
                                                    <div class="">
                                                        <input type="text" name="place_section_activity"
                                                               class="form-control"
                                                               value="4 Activities">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class=control-label">Existing Photo</label>
                                                    <div class="" style="padding-top:6px;">
                                                        <img src="{{ asset('assets-1/img/default-img.jpg') }}"
                                                             class="place-existing-photo" name="place-existing-photo"
                                                             style="height:80px;">
                                                    </div>
                                                </div>
                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">New Photo</label>
                                                    <div class="" style="padding-top:6px;">
                                                        <input type="file" name="place-new-photo" class="place-new-photo">
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label"></label>
                                                    <div class="text-center">
                                                        <button type="submit"
                                                                class="btn btn-primary codefotech_color pull-left"
                                                                name="form_logo">Update Place Section
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                        <!-- Place Section End -->

                                        <!-- Plan Section Start -->
                                        <h3 class="pt-5 text-center">Plan Section</h3>
                                        <form action="#" class="form-horizontal" enctype="multipart/form-data"
                                              method="post"
                                              accept-charset="utf-8">
                                            <div class="card shadow-sm p-3">
                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Title</label>
                                                    <div class="">
                                                        <input type="text" name="plan_section_title"
                                                               class="form-control"
                                                               value="Take It Easy">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Plan Content</label>
                                                    <div class="">
                                                <textarea class="form-control" name="plan_section_content"
                                                          style="height:70px;">An epic adventure starts from you. After all its the journey that counts. So travel the world and find your own paradise today. Let us be a part of that.</textarea>
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="form-group pb-3">
                                                    <label for="" class=control-label">Existing Background Photo</label>
                                                    <div class="" style="padding-top:6px;">
                                                        <img src="{{ asset('assets-1/img/default-img.jpg') }}"
                                                             class="plan-existing-photo" name="plan-existing-photo"
                                                             style="height:80px;">
                                                    </div>
                                                </div>
                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">New Background Photo</label>
                                                    <div class="" style="padding-top:6px;">
                                                        <input type="file" name="plan-new-photo" class="plan-new-photo">
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label"></label>
                                                    <div class="text-center">
                                                        <button type="submit"
                                                                class="btn btn-primary codefotech_color pull-left"
                                                                name="form_logo">Update Plan Section
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                        <!-- Plan Section End -->

                                        <!-- Trip Activities Section Start -->
                                        <h3 class="pt-5 text-center">Trip Activities Section</h3>
                                        <form action="#" class="form-horizontal" enctype="multipart/form-data"
                                              method="post"
                                              accept-charset="utf-8">
                                            <div class="card shadow-sm p-3">
                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Activities</label>
                                                    <div class="">
                                                        <input type="text" name="trip_activities"
                                                               class="form-control"
                                                               value="4 Trips">
                                                    </div>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">Trip Activities Title</label>
                                                    <div class="">
                                                        <input type="text" name="trip_activities_title"
                                                               class="form-control"
                                                               value="Budget Friendly">
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="form-group pb-3">
                                                    <label for="" class=control-label">Existing Photo</label>
                                                    <div class="" style="padding-top:6px;">
                                                        <img src="{{ asset('assets-1/img/default-img.jpg') }}"
                                                             class="trip-activities-existing-photo" name="trip-activities-existing-photo"
                                                             style="height:80px;">
                                                    </div>
                                                </div>
                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">New Photo</label>
                                                    <div class="" style="padding-top:6px;">
                                                        <input type="file" name="trip-activities-new-photo" class="trip-activities-new-photo">
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label"></label>
                                                    <div class="text-center">
                                                        <button type="submit"
                                                                class="btn btn-primary codefotech_color pull-left"
                                                                name="form_logo">Update Trip Activities Section
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                        <!-- Trip Activities Section End -->

                                        <!-- Clients Section Start -->
                                        <h3 class="pt-5 text-center">Clients Section</h3>
                                        <form action="#" class="form-horizontal" enctype="multipart/form-data"
                                              method="post"
                                              accept-charset="utf-8">
                                            <div class="card shadow-sm p-3">
                                                <div class="form-group pb-3">
                                                    <label for="" class=control-label">Existing Photo</label>
                                                    <div class="" style="padding-top:6px;">
                                                        <img src="{{ asset('assets-1/img/default-img.jpg') }}"
                                                             class="clients-existing-photo" name="clients-existing-photo"
                                                             style="height:80px;">
                                                    </div>
                                                </div>
                                                <div class="form-group pb-3">
                                                    <label for="" class="control-label">New Photo</label>
                                                    <div class="" style="padding-top:6px;">
                                                        <input type="file" name="clients-new-photo" class="clients-new-photo">
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label"></label>
                                                    <div class="text-center">
                                                        <button type="submit"
                                                                class="btn btn-primary codefotech_color pull-left"
                                                                name="form_logo">Update Clients Section
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                        <!-- Clients Section End -->

                                    </div>
                                </form>

                            </div>
                            <!-- Home Page Form End -->

                            <!-- Content Quantity Form Start -->
                            <div class="tab-pane active" id="tab_5">
                                <form action="#" class="form-horizontal" enctype="multipart/form-data" method="post">
                                    <div class="card shadow-sm p-3">
                                        <div class="form-group pb-3">
                                            <label for="" class="control-label">Stunning Places -<span>*</span></label>
                                            <div class="">
                                                <input type="text" class="form-control" name="about_section_stunning_places" value="200">
                                            </div>
                                        </div>
                                        <div class="form-group pb-3">
                                            <label for="" class="control-label">Satisfied Customer -<span>*</span></label>
                                            <div class="">
                                                <input type="text" class="form-control" name="about_section_satisfied_customer" value="200">
                                            </div>
                                        </div>
                                        <div class="form-group pb-3">
                                            <label for="" class="control-label">Travel Places -<span>*</span></label>
                                            <div class="">
                                                <input type="text" class="form-control" name="about_section_travel_places" value="400">
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="form-group">
                                            <label for="" class="control-label"></label>
                                            <div class="">
                                                <button type="submit" class="btn btn-primary codefotech_color pull-left"
                                                        name="form_general">
                                                    Update
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Content Quantity Form End -->

                            <!-- Banner Form Start -->
                            <div class="tab-pane active" id="tab_5">
                                <form action="#" class="form-horizontal" enctype="multipart/form-data" method="post">
                                    <div class="card shadow-sm p-3">
                                        <div class="form-group pb-3">
                                            <label for="" class="control-label">Stunning Places -<span>*</span></label>
                                            <div class="">
                                                <input type="text" class="form-control" name="about_section_stunning_places" value="200">
                                            </div>
                                        </div>
                                        <div class="form-group pb-3">
                                            <label for="" class="control-label">Satisfied Customer -<span>*</span></label>
                                            <div class="">
                                                <input type="text" class="form-control" name="about_section_satisfied_customer" value="200">
                                            </div>
                                        </div>
                                        <div class="form-group pb-3">
                                            <label for="" class="control-label">Travel Places -<span>*</span></label>
                                            <div class="">
                                                <input type="text" class="form-control" name="about_section_travel_places" value="400">
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="form-group">
                                            <label for="" class="control-label"></label>
                                            <div class="">
                                                <button type="submit" class="btn btn-primary codefotech_color pull-left"
                                                        name="form_general">
                                                    Update
                                                </button>
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
