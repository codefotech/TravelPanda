@extends('dashboard')

@section('title', 'Captcha Configuration')

@section('settings_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content-header">
            <div class="d-flex position-relative">
                <i style="font-size: 30px;top: 18px;" class="fas fa-arrow-alt-circle-right position-relative"></i>
                <h2 class="py-3 pl-2">&nbsp; Captcha Configuration</h2>
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
                                        <label for="" class="control-label">Recaptcha Site Key</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="recaptcha_site_key" maxlength="255" autocomplete="off" value="{{ $captchaData['recaptcha_site_key'] ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="" class="control-label">Recaptcha Status</label>
                                        <div class="">
                                            <select id="recaptcha_status" name="recaptcha_status" class="form-control">
                                                <option value="Show" {{ isset($captchaData['recaptcha_status']) && $captchaData['recaptcha_status'] == 'Show' ? 'selected' : '' }}>Show</option>
                                                <option value="Hide" {{ isset($captchaData['recaptcha_status']) && $captchaData['recaptcha_status'] == 'Hide' ? 'selected' : '' }}>Hide</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="control-label"></label>
                                        <div class="">
                                            <button type="submit" class="btn btn-primary codefotech_color pull-left" name="form_general" onclick="updateCaptchaConfiguration()">
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
        async function getCaptchaConfiguration() {
            try {
                let res = await axios.get('/dashboard/settings/captcha_configuration');
                if (res.status === 200 && res.data.status === 'success') {
                    let data = res.data.data;
                    document.getElementById('recaptcha_site_key').value = data.recaptcha_site_key;
                    document.getElementById('recaptcha_status').value = data.recaptcha_status;
                } else {
                    errorToast('Failed to fetch email configuration');
                }
            } catch (error) {
                console.error('Error fetching email configuration:', error);
                errorToast('An error occurred while fetching email configuration');
            }
        }


        async function updateCaptchaConfiguration() {
            event.preventDefault();
            try {
                let updateRecaptchaSiteKey = document.getElementById('recaptcha_site_key').value;
                let updateRecaptchaStatus = document.getElementById('recaptcha_status').value;

                if (!updateRecaptchaSiteKey) {
                    return errorToast("Recaptcha Site Key Required!");
                } else if (!updateRecaptchaStatus) {
                    return errorToast("Recaptcha Status Required!");
                } else {
                    let res = await axios.post('/dashboard/settings/captcha_configuration/update', {
                        recaptcha_site_key: updateRecaptchaSiteKey,
                        recaptcha_status: updateRecaptchaStatus
                    });

                    if (res.status === 200 && res.data['status'] === 'success') {
                        successToast(res.data['message']);
                        await getCaptchaConfiguration(); // Update the form fields after successful update
                    } else {
                        errorToast(res.data['message']);
                    }
                }

            } catch (error) {
                console.error('Error updating Captcha configuration:', error);
                errorToast('An error occurred while updating captcha configuration');
            }
        }


        // Initial fetch of payment configuration data when page loads
        document.addEventListener('DOMContentLoaded', async () => {
            await getCaptchaConfiguration();
        });
    </script>
@endsection
