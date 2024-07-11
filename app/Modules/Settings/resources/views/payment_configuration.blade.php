@extends('dashboard')

@section('title', 'Payment Configuration')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content-header">
            <h4>Payment Configuration</h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="settings_nav" class="nav-tabs-custom">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal" enctype="multipart/form-data" id="paymentForm">
                                @csrf
                                <div class="card shadow-sm p-3">
                                    <div class="form-group pb-3">
                                        <label for="paypal_email" class="control-label">PayPal Email</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="paypal_email"
                                                   maxlength="255" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="stripe_public_key" class="control-label">Stripe Public Key</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="stripe_public_key"
                                                   maxlength="255" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="stripe_secret_key" class="control-label">Stripe Secret Key</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="stripe_secret_key"
                                                   maxlength="255" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="bank_name" class="control-label">Bank Name</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="bank_name"
                                                   maxlength="255" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="account_number" class="control-label">Account Number</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="account_number"
                                                   maxlength="255" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="branch_name" class="control-label">Branch Name</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="branch_name"
                                                   maxlength="255" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="country" class="control-label">Country</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="country"
                                                   maxlength="255" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="control-label"></label>
                                        <div class="">
                                            <button type="button" onclick="updatePaymentConfiguration()"
                                                    class="btn btn-success pull-left">
                                                Update
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
        // Function to fetch payment configuration data
        async function getPaymentConfiguration() {
            try {
                let res = await axios.get('/dashboard/settings/payment_configuration');
                if (res.status === 200 && res.data.status === 'success') {
                    let data = res.data.data;
                    document.getElementById('paypal_email').value = data.paypal_email;
                    document.getElementById('stripe_public_key').value = data.stripe_public_key;
                    document.getElementById('stripe_secret_key').value = data.stripe_secret_key;
                    document.getElementById('bank_name').value = data.bank_details.bank_name;
                    document.getElementById('account_number').value = data.bank_details.account_number;
                    document.getElementById('branch_name').value = data.bank_details.branch_name;
                    document.getElementById('country').value = data.bank_details.country;
                } else {
                    errorToast('Failed to fetch payment configuration');
                }
            } catch (error) {
                console.error('Error fetching payment configuration:', error);
                errorToast('An error occurred while fetching payment configuration');
            }
        }

        // Function to update payment configuration data
        async function updatePaymentConfiguration() {
            try {
                let updatePaypalEmail = document.getElementById('paypal_email').value;
                let updateStripePublicKey = document.getElementById('stripe_public_key').value;
                let updateStripeSecretKey = document.getElementById('stripe_secret_key').value;
                let updateBankName = document.getElementById('bank_name').value;
                let updateAccountNumber = document.getElementById('account_number').value;
                let updateBranchName = document.getElementById('branch_name').value;
                let updateCountry = document.getElementById('country').value;

                if (!updatePaypalEmail) {
                    return errorToast("Paypal Email Required!");
                } else if (!updateStripePublicKey) {
                    return errorToast("Stripe Public Key Required!");
                } else if (!updateStripeSecretKey) {
                    return errorToast("Stripe Secret Key Required!");
                } else if (!updateBankName) {
                    return errorToast("Bank Name Required!");
                } else if (!updateAccountNumber) {
                    return errorToast("Account Number Required!");
                } else if (!updateBranchName) {
                    return errorToast("Branch Name Required!");
                } else if (!updateCountry) {
                    return errorToast("Country Required!");
                } else {
                    let res = await axios.post('/dashboard/settings/payment_configuration/update', {
                        paypal_email: updatePaypalEmail,
                        stripe_public_key: updateStripePublicKey,
                        stripe_secret_key: updateStripeSecretKey,
                        bank_details: {
                            bank_name: updateBankName,
                            account_number: updateAccountNumber,
                            branch_name: updateBranchName,
                            country: updateCountry
                        }
                    });

                    if (res.status === 200 && res.data.status === 'success') {
                        successToast(res.data.message);
                        await getPaymentConfiguration(); // Refresh data after update
                    } else {
                        errorToast(res.data.message);
                    }
                }

            } catch (error) {
                console.error('Error updating payment configuration:', error);
                errorToast('An error occurred while updating payment configuration');
            }
        }

        // Initial fetch of payment configuration data when page loads
        document.addEventListener('DOMContentLoaded', async () => {
            await getPaymentConfiguration();
        });
    </script>
@endsection
