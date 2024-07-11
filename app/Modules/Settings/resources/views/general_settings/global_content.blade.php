<!-- ====================== Global Content Form Start ====================== -->
<form class="form-horizontal" enctype="multipart/form-data" method="post">
    @csrf
    <div class="card shadow-sm p-3">
        <div class="form-group pb-3">
            <label for="email" class="control-label">Email </label>
            <div class="">
                <input type="text" class="form-control" id="email" name="email">
            </div>
        </div>
        <div class="form-group pb-3">
            <label for="phone" class="control-label">Phone Number </label>
            <div class="">
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
        </div>

        <div class="form-group pb-3">
            <label for="address" class="control-label">Address </label>
            <div class="">
                <textarea class="form-control" id="address" name="address" style="height:70px;"></textarea>
            </div>
        </div>

        <hr>

        <div class="form-group pb-3">
            <label for="copyright_text" class="control-label">Copyright Text </label>
            <div class="">
                <input class="form-control" type="text" name="copyright_text" id="copyright_text">
            </div>
        </div>

        <div class="form-group">
            <label for="" class="control-label"></label>
            <div class="">
                <button onclick="updateGeneralSettings()" class="btn btn-success pull-left"
                    onclick="updateGeneralSettings()">
                    Update Global Content
                </button>
            </div>
        </div>
    </div>
</form>
<!-- ====================== Global Content Form End ====================== -->
