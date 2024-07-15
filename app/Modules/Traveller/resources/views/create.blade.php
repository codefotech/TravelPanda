@extends('dashboard')

@section('title', 'Traveller')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content-header">
            <div style="" class="row py-3">
                <div class="col">
                    <h4>Traveller Create</h4>
                </div>
                <div style="text-align: right;" class="col">
                    <a href="{{ url('/dashboard/traveller') }}" class="btn btn-primary codefotech_color">
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
                                        <label for="traveller_name" class="control-label">Traveller Name
                                            <span>*</span></label>
                                        <div class="">
                                            <input type="text" class="form-control" id="traveller_name" maxlength="255" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="traveller_email" class="control-label">Traveller Email
                                            <span>*</span></label>
                                        <div class="">
                                            <input type="text" class="form-control" id="traveller_email" maxlength="255" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="traveller_phone" class="control-label">Traveller Phone</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="traveller_phone" maxlength="255" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="city" class="control-label">City</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="city" maxlength="255" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="state" class="control-label">State</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="state" maxlength="255" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="country" class="control-label">Country</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="country" maxlength="255" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="address" class="control-label">Address </label>
                                        <div class="">
                                            <textarea class="form-control" id="address" name="address"
                                                      style="height:70px;"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="" class="control-label">Status</label>
                                        <div class="">
                                            <select id="status" name="recaptcha_status" class="form-control">
                                                <option value="Active" {{ isset($travellerData['status']) && $travellerData['status'] == 'Active' ? 'selected' : '' }}>Active</option>
                                                <option value="InActive" {{ isset($travellerData['status']) && $travellerData['status'] == 'InActive' ? 'selected' : '' }}>InActive</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="">
                                            <button class="btn btn-primary codefotech_color pull-left"
                                                    onclick="createTraveller()">Create
                                            </button>
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

        async function createTraveller() {
            event.preventDefault();
            try {
                let travellerName = document.getElementById('traveller_name').value;
                let travellerEmail = document.getElementById('traveller_email').value;
                let travellerPhone = document.getElementById('traveller_phone').value;
                let city = document.getElementById('city').value;
                let state = document.getElementById('state').value;
                let country = document.getElementById('country').value;
                let address = document.getElementById('address').value;
                let status = document.getElementById('status').value;

                if (!travellerName) {
                    return errorToast("Traveller Name Required!");
                } else if (!travellerEmail) {
                    return errorToast("Traveller Email Required!");
                } else if (!travellerPhone) {
                    return errorToast("Traveller Phone Required!");
                } else if (!city) {
                    return errorToast("City Required!");
                } else if (!state) {
                    return errorToast("State Required!");
                } else if (!country) {
                    return errorToast("Country Required!");
                } else if (!address) {
                    return errorToast("Address Required!");
                } else if (!status) {
                    return errorToast("Status Required!");
                } else {
                    let res = await axios.post('/dashboard/traveller/create', {
                        traveller_name: travellerName,
                        traveller_email: travellerEmail,
                        traveller_phone: travellerPhone,
                        city: city,
                        state: state,
                        country: country,
                        address: address,
                        status: status,
                    });


                    if (res.status === 201 && res.data['status'] === 'success') {
                        successToast(res.data['message']);
                        // Redirect to the list page
                        window.location.href = '/dashboard/traveller';
                    } else {
                        errorToast(res.data['message']);
                    }
                }

            } catch (error) {
                console.error('Error create traveller:', error);
                errorToast('An error occurred while creating traveller');
            }
        }
    </script>

@endsection
