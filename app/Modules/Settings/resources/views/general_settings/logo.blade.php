<!-- ====================== Logo Form Start ====================== -->
<form class="form-horizontal" enctype="multipart/form-data" method="post">
    @csrf
    <div class="card shadow-sm p-3">
        <div class="form-group pb-3">
            <label for="" class="control-label">Existing Logo</label>
            <div class="pt-3">
                <img src="{{ asset($generalSettingsData['logo'] ?? 'assets-1/img/default-img.jpg') }}" class="existing-photo" id="old_logo_path" style="height:120px;">
                <br><br>
                <input oninput="document.getElementById('old_logo_path').src = window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="logoImgUpdate">
                <br>
                <input type="text" class="form-control" id="logoFilePath" value="{{ $generalSettingsData['logo'] ?? '' }}" readonly disabled>
            </div>
        </div>

        <div class="form-group">
            <label for="" class="control-label"></label>
            <div class="">
                <button type="button" class="btn btn-success pull-left" onclick="updateGeneralSettings()">Update Logo</button>
            </div>
        </div>
    </div>
</form>
<!-- ====================== Logo Form End ====================== -->
