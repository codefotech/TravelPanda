@extends('dashboard')

@section('title', 'Email Configuration')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content-header">
            <div class="d-flex position-relative">
                <i style="font-size: 30px;top: 18px;" class="fas fa-arrow-alt-circle-right position-relative"></i>
                <h2 class="py-3 pl-2">&nbsp; Email Configuration</h2>
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
                                        <label for="update_send_email" class="control-label">Send Email From
                                            <span>*</span></label>
                                        <div class="">
                                            <input type="text" class="form-control" id="send_email" maxlength="255" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="update_receive_email" class="control-label">Receive Email To
                                            <span>*</span></label>
                                        <div class="">
                                            <input type="text" class="form-control" id="receive_email" maxlength="255" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="update_smtp_host" class="control-label">SMTP Host</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="smtp_host" maxlength="255" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="update_smtp_port" class="control-label">SMTP Port</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="smtp_port" maxlength="255" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="update_smtp_user" class="control-label">SMTP Username</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="smtp_user" maxlength="255" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="update_smtp_password" class="control-label">SMTP Password</label>
                                        <div class="">
                                            <input type="password" class="form-control" id="smtp_password" maxlength="255" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="">
                                            <button class="btn btn-primary codefotech_color pull-left"
                                                    onclick="updateEmailConfiguration()">Update
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

        async function getEmailConfiguration() {
            try {
                let res = await axios.get('/dashboard/settings/email_configuration');
                if (res.status === 200 && res.data.status === 'success') {
                    let data = res.data.data;
                    document.getElementById('send_email').value = data.send_email;
                    document.getElementById('receive_email').value = data.receive_email;
                    document.getElementById('smtp_host').value = data.smtp_host;
                    document.getElementById('smtp_port').value = data.smtp_port;
                    document.getElementById('smtp_user').value = data.smtp_user;
                    document.getElementById('smtp_password').value = data.smtp_password;
                } else {
                    errorToast('Failed to fetch email configuration');
                }
            } catch (error) {
                console.error('Error fetching email configuration:', error);
                errorToast('An error occurred while fetching email configuration');
            }
        }


        async function updateEmailConfiguration() {
            event.preventDefault();
            try {
                let updateSendEmail = document.getElementById('send_email').value;
                let updateReceiveEmail = document.getElementById('receive_email').value;
                let updateSMTPHost = document.getElementById('smtp_host').value;
                let updateSMTPPort = document.getElementById('smtp_port').value;
                let updateSMTPUser = document.getElementById('smtp_user').value;
                let updateSMTPPassword = document.getElementById('smtp_password').value;

                if (!updateSendEmail) {
                    return errorToast("Send Email Required!");
                } else if (!updateReceiveEmail) {
                    return errorToast("Receive Email Required!");
                } else if (!updateSMTPHost) {
                    return errorToast("SMTP Host Required!");
                } else if (!updateSMTPPort) {
                    return errorToast("SMTP Port Required!");
                } else if (!updateSMTPUser) {
                    return errorToast("SMTP User Required!");
                } else if (!updateSMTPPassword) {
                    return errorToast("SMTP Password Required!");
                } else {
                    let res = await axios.post('/dashboard/settings/email_configuration/update', {
                        send_email: updateSendEmail,
                        receive_email: updateReceiveEmail,
                        smtp_host: updateSMTPHost,
                        smtp_port: updateSMTPPort,
                        smtp_user: updateSMTPUser,
                        smtp_password: updateSMTPPassword,
                    });

                    if (res.status === 200 && res.data['status'] === 'success') {
                        successToast(res.data['message']);
                        await getEmailConfiguration();
                    } else {
                        errorToast(res.data['message']);
                    }
                }

            } catch (error) {
                console.error('Error updating email configuration:', error);
                errorToast('An error occurred while updating email configuration');
            }
        }

        // Initial fetch of payment configuration data when page loads
        document.addEventListener('DOMContentLoaded', async () => {
            await getEmailConfiguration();
        });
    </script>

@endsection
