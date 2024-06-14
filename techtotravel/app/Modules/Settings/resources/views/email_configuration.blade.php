@extends('dashboard')

@section('title', 'Email Configuration')

@section('settings_content')
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
                        <form action="#" class="form-horizontal" enctype="multipart/form-data" method="post">
                            <div class="card shadow-sm p-3">
                                <div class="form-group pb-3">
                                    <label for="" class="control-label">Send Email From <span>*</span></label>
                                    <div class="">
                                        <input type="text" class="form-control" name="update_send_email" maxlength="255" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group pb-3">
                                    <label for="" class="control-label">Receive Email To <span>*</span></label>
                                    <div class="">
                                        <input type="text" class="form-control" name="update_receive_email" maxlength="255" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group pb-3">
                                    <label for="" class="control-label">SMTP Host</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="update_smtp_host" maxlength="255" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group pb-3">
                                    <label for="" class="control-label">SMTP Port</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="update_smtp_port" maxlength="255" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group pb-3">
                                    <label for="" class="control-label">SMTP Username</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="update_smtp_user" maxlength="255" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group pb-3">
                                    <label for="" class="control-label">SMTP Password</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="update_smtp_password" maxlength="255" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group pb-3">
                                    <label for="" class="control-label">Update Id</label>
                                    <div class="">
                                        <input type="text" class="form-control" id="updateId" readonly>
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
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    async function FillUpdateForm(id){
        document.getElementById('updateId').value=id;
        let res = await axios.post('/dashboard/settings/email_configuration/id_check',{id:id});
        document.getElementsByName('update_send_email').value = res.data['send_email'];
        document.getElementsByName('update_receive_email').value = res.data['receive_email'];
        document.getElementsByName('update_smtp_host').value = res.data['smtp_host'];
        document.getElementsByName('update_smtp_port').value = res.data['smtp_port'];
        document.getElementsByName('update_smtp_user').value = res.data['smtp_user'];
        document.getElementsByName('update_smtp_password').value = res.data['smtp_password'];
    }
</script>
@endsection
