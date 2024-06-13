@extends('dashboard')

@section('title', 'Payment Configuration')

@section('settings_content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="content-header">
        <div class="d-flex position-relative">
            <i style="font-size: 30px;top: 18px;" class="fas fa-arrow-alt-circle-right position-relative"></i>
            <h2 class="py-3 pl-2">&nbsp; Payment Configuration</h2>
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
                                    <label for="" class="control-label">PayPal Email</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="paypal_email" maxlength="255" autocomplete="off" value="xicia@biz.com">
                                    </div>
                                </div>
                                <div class="form-group pb-3">
                                    <label for="" class="control-label">Stripe Public Key</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="stripe_public_key" maxlength="255" autocomplete="off" value="pk_test_0SwMWadgu8DwmEcPdUPRsZ7b">
                                    </div>
                                </div>
                                <div class="form-group pb-3">
                                    <label for="" class="control-label">Stripe Secret Key</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="stripe_secret_key" maxlength="255" autocomplete="off" value="sk_test_TFcsLJ7xxUtpALbDo1L5c1PN">
                                    </div>
                                </div>
                                <div class="form-group pb-3">
                                    <label for="" class="control-label">Bank Details</label>
                                    <div class="">
                                            <textarea name="bank_detail" class="form-control" cols="30" rows="10" style="height:130px;">
Bank Name: ABC Bank
Account Number: 1222320234444
Branch Name: NY Branch
Country: USA
                                            </textarea>
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
