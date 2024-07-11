<!-- ====================== Banner Form Start ====================== -->
<form class="form-horizontal" enctype="multipart/form-data" method="post">
    @csrf
    <div class="card shadow-sm p-3">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <form enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                <td style="width:50%">
                                    <h4>Existing Banner</h4>
                                    <img src="{{ asset($generalSettingsData['banner'] ?? 'assets-1/img/default-img.jpg') }}"
                                        class="existing-photo" id="banner_old_image" style="height:auto; width: 100%">
                                    <br><br>
                                    <input oninput="banner_old_image.src=window.URL.createObjectURL(this.files[0])"
                                        type="file" class="form-control" id="bannerImgUpdate">
                                    <br>
                                    <input type="text" class="form-control" id="bannerFilePath" readonly disabled>
                                    <br>
                                    <button type="button" class="btn btn-success pull-left" onclick="updateGeneralSettings()">Update
                                        Banner</button>
                                </td>
                            </form>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</form>
<!-- ====================== Banner Form End ====================== -->
