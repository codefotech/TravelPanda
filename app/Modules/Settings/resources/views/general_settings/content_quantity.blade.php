<!-- ====================== Content Quantity Form Start ====================== -->
<form class="form-horizontal" enctype="multipart/form-data" method="post">
    @csrf
    <div class="card shadow-sm p-3">
        <div class="form-group pb-3">
            <label for="about_section_stunning_places" class="control-label">Stunning
                Places -<span>*</span></label>
            <div class="">
                <input type="text" class="form-control" id="stunning_place" name="stunning_place">
            </div>
        </div>
        <div class="form-group pb-3">
            <label for="about_section_satisfied_customer" class="control-label">Satisfied Customer
                -<span>*</span></label>
            <div class="">
                <input type="text" class="form-control" id="satisfied_customer" name="satisfied_customer">
            </div>
        </div>
        <div class="form-group pb-3">
            <label for="about_section_travel_places" class="control-label">Travel
                Places -<span>*</span></label>
            <div class="">
                <input type="text" class="form-control" id="travel_places" name="travel_places">
            </div>
        </div>

        <div class="form-group">
            <label for="" class="control-label"></label>
            <div class="">
                <button onclick="updateGeneralSettings()" class="btn btn-success pull-left"
                    onclick="updateContentQuantity()">
                    Update Content Quantity
                </button>
            </div>
        </div>
    </div>
</form>
<!-- ====================== Content Quantity Form End ====================== -->
