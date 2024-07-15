<!-- ====================== Favicon Form Start ====================== -->
<form class="form-horizontal" enctype="multipart/form-data" method="post">
    @csrf
    <div class="card shadow-sm p-3">
        <div class="form-group pb-3">
            <label for="" class="control-label">Existing Favicon</label>
            <div class="" style="padding-top:6px;">
                <img src="{{ asset($generalSettingsData['favicon'] ?? 'assets-1/img/default-img.jpg') }}"
                    class="existing-photo" id="favicon_old_image" style="height:40px; width: 40px">
                <br><br>
                <input oninput="favicon_old_image.src=window.URL.createObjectURL(this.files[0])" type="file"
                    class="form-control" id="faviconImgUpdate">
                <br>
                <input type="text" class="form-control" id="faviconFilePath" readonly disabled>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="control-label"></label>
            <div class="">
                <button type="button" class="btn btn-success pull-left" onclick="updateGeneralSettings()">Update
                    Favicon</button>
            </div>
        </div>
    </div>
</form>
<!-- ====================== Favicon Form End ====================== -->
