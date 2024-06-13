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
                        <form action="#" class="form-horizontal" enctype="multipart/form-data" method="post">
                            <div class="card shadow-sm p-3">

                                <div class="form-group pb-3">
                                    <label for="" class="control-label">Recaptcha Site Key</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="recaptcha_site_key" maxlength="255" autocomplete="off" value="6Ld_FJsUAAAAALal5sexpeGJTDcpFw8ysfzuWq9q">
                                    </div>
                                </div>
                                <div class="form-group pb-3">
                                    <label for="" class="control-label">Recaptcha Status</label>
                                    <div class="">
                                        <select name="recaptcha_status" class="form-control">
                                            <option value="Show">Show</option>
                                            <option value="Hide" selected="">Hide</option>
                                        </select>
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
@endsection
