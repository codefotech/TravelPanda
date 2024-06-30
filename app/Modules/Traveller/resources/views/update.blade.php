@extends('dashboard')

@section('title', 'Update Traveller')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content-header">
            <div style="" class="row py-3">
                <div class="col">
                    <h4>Traveller</h4>
                </div>
                <div style="text-align: right;" class="col">
                    <a href="{{ url('/dashboard/travellerList') }}" class="btn btn-primary codefotech_color">
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
                                    <input type="hidden" id="traveller_id" value="{{ $id }}">

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
                                                    onclick="updateTraveller()">Update
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
        document.addEventListener('DOMContentLoaded', async () => {
            await getTraveller();
        });


        async function getTraveller() {
            let id = document.getElementById('traveller_id').value;
            try {
                let res = await axios.get(`/dashboard/traveller/get/${id}`);
                if (res.status === 200 && res.data.status === 'success') {
                    let data = res.data.data;
                    document.getElementById('traveller_name').value = data.traveller_name;
                    document.getElementById('traveller_email').value = data.traveller_email;
                    document.getElementById('traveller_phone').value = data.traveller_phone;
                    document.getElementById('city').value = data.city;
                    document.getElementById('state').value = data.state;
                    document.getElementById('country').value = data.country;
                    document.getElementById('address').value = data.address;
                    document.getElementById('status').value = data.status;
                } else {
                    errorToast('Failed to fetch traveller');
                }
            } catch (error) {
                console.error('Error fetching traveller:', error);
                alert('An error occurred while fetching traveller');
            }
        }

        async function updateTraveller(event) {
            event.preventDefault();
            let id = document.getElementById('traveller_id').value;
            try {
                let updateTravellerName = document.getElementById('traveller_name').value;
                let updateTravellerEmail = document.getElementById('traveller_email').value;
                let updateTravellerPhone = document.getElementById('traveller_phone').value;
                let updateCity = document.getElementById('city').value;
                let updateState = document.getElementById('state').value;
                let updateCountry = document.getElementById('country').value;
                let updateAddress = document.getElementById('address').value;
                let updateStatus = document.getElementById('status').value;

                let res = await axios.post(`/dashboard/traveller/update/${id}`, {
                    traveller_name: updateTravellerName,
                    traveller_email: updateTravellerEmail,
                    traveller_phone: updateTravellerPhone,
                    city: updateCity,
                    state: updateState,
                    country: updateCountry,
                    address: updateAddress,
                    status: updateStatus,
                });

                if (res.status === 200 && res.data['status'] === 'success') {
                    successToast(res.data['message']);
                } else {
                    errorToast(res.data['message']);
                }
            } catch (error) {
                console.error('Error updating traveller:', error);
                errorToast('An error occurred while updating traveller');
            }
        }





        $(document).on('click', '.deleteBtn', async function () {
            let id = $(this).data('id');
            if (confirm('Are you sure you want to delete this traveller?')) {
                try {
                    let res = await axios.post(`/dashboard/traveller/delete/${id}`);
                    if (res.status === 200 && res.data.status === 'success') {
                        successToast(res.data.message);
                        getList();
                    } else {
                        errorToast(res.data.message);
                    }
                } catch (error) {
                    console.error('Error deleting traveller:', error);
                    errorToast('Failed to delete traveller.');
                }
            }
        });
    </script>

@endsection




