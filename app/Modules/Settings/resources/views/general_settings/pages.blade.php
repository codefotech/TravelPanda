<!-- ====================== Pages Form Start ====================== -->
<form class="form-horizontal" enctype="multipart/form-data" method="post">
    @csrf
    <div class="card shadow-sm p-3">

        <!-- Common Section Start -->
        <h3 class="text-center">Common Section</h3>
        <form class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">

            <div class="card shadow-sm p-3">
                <div class="form-group pb-3" style="padding-top:7px;">
                    <label for="title" class="control-label">Slug </label>
                    <div class="">
                        <input type="text" name="slug" id="slug" class="form-control">
                    </div>
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
                        <textarea name="subtitle" id="subtitle" class="form-control" cols="30" rows="10" style="height: 80px;"></textarea>
                    </div>
                </div>

                <div class="form-group pb-3">
                    <label for="description" class="control-label">Description
                    </label>
                    <div class="">
                        <textarea name="description" id="description" class="form-control" cols="30" rows="10" style="height: 120px;"></textarea>
                    </div>
                </div>

                <div class="form-group pb-3">
                    <label for="" class=control-label">Existing Photo</label>
                    <div class="" style="padding-top:6px;">
                        <img src="{{ asset($pagesData['image'] ?? 'assets-1/img/default-img.jpg') }}"
                            class="existing-photo" id="old_image" style="height:120px;">
                        <br><br>
                        <input oninput="old_image.src=window.URL.createObjectURL(this.files[0])" type="file"
                            class="form-control" id="imgUpdate">
                        <br>
                        <input type="text" class="form-control" id="imgFilePath" readonly disabled>
                    </div>
                </div>

                <hr>

                <h3 class="text-center">Home Section</h3>
                <div class="form-group pb-3" style="padding-top:7px;">
                    <label for="" class="control-label">Destination </label>
                    <select name="heroform_desination" id="heroform_desination" class="form-control">
                        <option value="Dhaka"
                            {{ isset($pagesData['heroform_desination']) && $pagesData['heroform_desination'] == 'Dhaka' ? 'selected' : '' }}>
                            Dhaka</option>
                        <option value="Chattogram"
                            {{ isset($pagesData['heroform_desination']) && $pagesData['heroform_desination'] == 'Chattogram' ? 'selected' : '' }}>
                            Chattogram</option>
                        <option value="Barishal"
                            {{ isset($pagesData['heroform_desination']) && $pagesData['heroform_desination'] == 'Barishal' ? 'selected' : '' }}>
                            Barishal</option>
                        <option value="Dhaka"
                            {{ isset($pagesData['heroform_desination']) && $pagesData['heroform_desination'] == 'Dhaka' ? 'selected' : '' }}>
                            Dhaka</option>
                        <option value="Khulna"
                            {{ isset($pagesData['heroform_desination']) && $pagesData['heroform_desination'] == 'Khulna' ? 'selected' : '' }}>
                            Khulna</option>
                        <option value="Rajshahi"
                            {{ isset($pagesData['heroform_desination']) && $pagesData['heroform_desination'] == 'Rajshahi' ? 'selected' : '' }}>
                            Rajshahi</option>
                        <option value="Rangpur"
                            {{ isset($pagesData['heroform_desination']) && $pagesData['heroform_desination'] == 'Rangpur' ? 'selected' : '' }}>
                            Rangpur</option>
                        <option value="Mymensingh"
                            {{ isset($pagesData['heroform_desination']) && $pagesData['heroform_desination'] == 'Mymensingh' ? 'selected' : '' }}>
                            Mymensingh</option>
                        <option value="Sylhet"
                            {{ isset($pagesData['heroform_desination']) && $pagesData['heroform_desination'] == 'Sylhet' ? 'selected' : '' }}>
                            Sylhet</option>
                    </select>
                </div>

                <div class="form-group pb-3" style="padding-top:7px;">
                    <label for="" class="control-label">Trip Types </label>
                    <select name="heroform_trip_type" id="heroform_trip_type" class="form-control">
                        <option value="Holiday Package"
                            {{ isset($pagesData['heroform_trip_type']) && $pagesData['heroform_trip_type'] == 'Holiday Package' ? 'selected' : '' }}>
                            Holiday Package</option>
                        <option value="Full Of FamJam"
                            {{ isset($pagesData['heroform_trip_type']) && $pagesData['heroform_trip_type'] == 'Full Of FamJam' ? 'selected' : '' }}>
                            Full Of FamJam</option>
                        <option value="Friends-Only Trip"
                            {{ isset($pagesData['heroform_trip_type']) && $pagesData['heroform_trip_type'] == 'Friends-Only Trip' ? 'selected' : '' }}>
                            Friends-Only Trip</option>
                        <option value="Siblings-Only Trip"
                            {{ isset($pagesData['heroform_trip_type']) && $pagesData['heroform_trip_type'] == 'Siblings-Only Trip' ? 'selected' : '' }}>
                            Siblings-Only Trip</option>
                        <option value="All-Girls Or An All-Boys Trip"
                            {{ isset($pagesData['heroform_trip_type']) && $pagesData['heroform_trip_type'] == 'All-Girls Or An All-Boys Trip' ? 'selected' : '' }}>
                            All-Girls Or An All-Boys Trip</option>
                        <option value="Volunteer Trip"
                            {{ isset($pagesData['heroform_trip_type']) && $pagesData['heroform_trip_type'] == 'Volunteer Trip' ? 'selected' : '' }}>
                            Volunteer Trip</option>
                        <option value="Impromptu Trip"
                            {{ isset($pagesData['heroform_trip_type']) && $pagesData['heroform_trip_type'] == 'Impromptu Trip' ? 'selected' : '' }}>
                            Impromptu Trip</option>
                        <option value="Solo Trip"
                            {{ isset($pagesData['heroform_trip_type']) && $pagesData['heroform_trip_type'] == 'Solo Trip' ? 'selected' : '' }}>
                            Solo Trip</option>
                        <option value="Adventure Trip"
                            {{ isset($pagesData['heroform_trip_type']) && $pagesData['heroform_trip_type'] == 'Adventure Trip' ? 'selected' : '' }}>
                            Adventure Trip</option>
                        <option value="Luxury Trip"
                            {{ isset($pagesData['heroform_trip_type']) && $pagesData['heroform_trip_type'] == 'Luxury Trip' ? 'selected' : '' }}>
                            Luxury Trip</option>
                    </select>
                </div>

                <div class="form-group pb-3" style="padding-top:7px;">
                    <label for="" class="control-label">Activity </label>
                    <select name="heroform_trip_activities" id="heroform_trip_activities" class="form-control">
                        <option value="Star Line"
                            {{ isset($pagesData['heroform_trip_activities']) && $pagesData['heroform_trip_activities'] == 'Star Line' ? 'selected' : '' }}>
                            Star Line</option>
                        <option value="Green Line"
                            {{ isset($pagesData['heroform_trip_activities']) && $pagesData['heroform_trip_activities'] == 'Green Line' ? 'selected' : '' }}>
                            Green Line</option>
                        <option value="Hanif Enterprise"
                            {{ isset($pagesData['heroform_trip_activities']) && $pagesData['heroform_trip_activities'] == 'Hanif Enterprise' ? 'selected' : '' }}>
                            Hanif Enterprise</option>
                        <option value="Shyamoli Paribahan"
                            {{ isset($pagesData['heroform_trip_activities']) && $pagesData['heroform_trip_activities'] == 'Shyamoli Paribahan' ? 'selected' : '' }}>
                            Shyamoli Paribahan</option>
                        <option value="Shohag Paribahan"
                            {{ isset($pagesData['heroform_trip_activities']) && $pagesData['heroform_trip_activities'] == 'Shohag Paribahan' ? 'selected' : '' }}>
                            Shohag Paribahan</option>
                        <option value="Ena Transport"
                            {{ isset($pagesData['heroform_trip_activities']) && $pagesData['heroform_trip_activities'] == 'Ena Transport' ? 'selected' : '' }}>
                            Ena Transport</option>
                        <option value="London Express"
                            {{ isset($pagesData['heroform_trip_activities']) && $pagesData['heroform_trip_activities'] == 'London Express' ? 'selected' : '' }}>
                            London Express</option>
                        <option value="Saint Martin Paribahan"
                            {{ isset($pagesData['heroform_trip_activities']) && $pagesData['heroform_trip_activities'] == 'Saint Martin Paribahan' ? 'selected' : '' }}>
                            Saint Martin Paribahan</option>
                    </select>
                </div>

                <div class="form-group pb-3" style="padding-top:7px;">
                    <label for="" class="control-label">Days </label>
                    <select name="heroform_days" id="heroform_days" class="form-control">
                        <option value="0 Days - 1 Days"
                            {{ isset($pagesData['heroform_days']) && $pagesData['heroform_days'] == '0 Days - 1 Days' ? 'selected' : '' }}>
                            0 Days - 1 Days</option>
                        <option value="0 Days - 3 Days"
                            {{ isset($pagesData['heroform_days']) && $pagesData['heroform_days'] == '0 Days - 3 Days' ? 'selected' : '' }}>
                            0 Days - 3 Days</option>
                        <option value="0 Days - 5 Days"
                            {{ isset($pagesData['heroform_days']) && $pagesData['heroform_days'] == '0 Days - 5 Days' ? 'selected' : '' }}>
                            0 Days - 5 Days</option>
                        <option value="0 Days - 7 Days"
                            {{ isset($pagesData['heroform_days']) && $pagesData['heroform_days'] == '0 Days - 7 Days' ? 'selected' : '' }}>
                            0 Days - 7 Days</option>
                        <option value="0 Days - 10 Days"
                            {{ isset($pagesData['heroform_days']) && $pagesData['heroform_days'] == '0 Days - 10 Days' ? 'selected' : '' }}>
                            0 Days - 10 Days</option>
                        <option value="0 Days - 14 Days"
                            {{ isset($pagesData['heroform_days']) && $pagesData['heroform_days'] == '0 Days - 14 Days' ? 'selected' : '' }}>
                            0 Days - 14 Days</option>
                        <option value="0 Days - 30 Days"
                            {{ isset($pagesData['heroform_days']) && $pagesData['heroform_days'] == '0 Days - 30 Days' ? 'selected' : '' }}>
                            0 Days - 30 Days</option>
                    </select>
                </div>

                <div class="form-group pb-3" style="padding-top:7px;">
                    <label for="" class="control-label">Package </label>
                    <select name="heroform_budget" id="heroform_budget" class="form-control">
                        <option value="$100 - $150"
                            {{ isset($pagesData['heroform_budget']) && $pagesData['heroform_budget'] == '$100 - $150' ? 'selected' : '' }}>
                            $100 - $150</option>
                        <option value="$150 - $200"
                            {{ isset($pagesData['heroform_budget']) && $pagesData['heroform_budget'] == '$150 - $200' ? 'selected' : '' }}>
                            $150 - $200</option>
                        <option value="$200 - $250"
                            {{ isset($pagesData['heroform_budget']) && $pagesData['heroform_budget'] == '$200 - $250' ? 'selected' : '' }}>
                            $200 - $250</option>
                        <option value="$250 - $350"
                            {{ isset($pagesData['heroform_budget']) && $pagesData['heroform_budget'] == '$250 - $350' ? 'selected' : '' }}>
                            $250 - $350</option>
                        <option value="$250 - $500"
                            {{ isset($pagesData['heroform_budget']) && $pagesData['heroform_budget'] == '$250 - $500' ? 'selected' : '' }}>
                            $250 - $500</option>
                        <option value="$500 - $1000"
                            {{ isset($pagesData['heroform_budget']) && $pagesData['heroform_budget'] == '$500 - $1000' ? 'selected' : '' }}>
                            $500 - $1000</option>
                    </select>
                </div>

                <hr>


                <h3 class="text-center">Counter Section</h3>
                <div class="form-group pb-3">
                    <label for="" class="control-label">Trips & Tours</label>
                    <div class="">
                        <input type="text" value="" name="trips_and_tours" id="trips_and_tours"
                            class="form-control">
                    </div>
                </div>

                <div class="form-group pb-3">
                    <label for="" class="control-label">Outdoor
                        Activities</label>
                    <div class="">
                        <input type="text" name="outdoor_section_activities" id="outdoor_section_activities"
                            class="form-control">
                    </div>
                </div>

                <div class="form-group pb-3">
                    <label for="" class="control-label">Countries</label>
                    <div class="">
                        <input type="text" name="countries" id="countries" class="form-control">
                    </div>
                </div>

                <div class="form-group pb-3">
                    <label for="" class="control-label">Happy
                        Customers</label>
                    <div class="">
                        <input type="text" name="happy_customers" id="happy_customers" class="form-control">
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
                    <label for="" class="control-label">Place
                        Activities</label>
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
                        <input type="text" name="trip_activities" id="trip_activities" class="form-control">
                    </div>
                </div>

                <div class="form-group pb-3">
                    <label for="" class="control-label">Trip Activities
                        Title</label>
                    <div class="">
                        <input type="text" name="trip_activities_title" id="trip_activities_title"
                            class="form-control">
                    </div>
                </div>


                <hr>


                <div class="form-group">
                    <label for="" class="col-sm-2 control-label"></label>
                    <div class="text-center">
                        <button onclick="updatePages()" class="btn btn-success pull-left"
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
<!-- ====================== Pages Form End ====================== -->
