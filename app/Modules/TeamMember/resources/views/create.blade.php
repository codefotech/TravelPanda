@extends('dashboard')

@section('title', 'Team Member Create')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content-header">
            <div class="row py-3">
                <div class="col">
                    <h4>Team Member Create</h4>
                </div>
                <div style="text-align: right;" class="col">
                    <a href="{{ url('/dashboard/team_member') }}" class="btn btn-primary codefotech_color">
                        List
                    </a>
                </div>
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
                                        <label for="member_name" class="control-label">Member Name
                                            <span>*</span></label>
                                        <div class="">
                                            <input type="text" class="form-control" id="member_name" maxlength="255"
                                                   autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="designation" class="control-label">Designation
                                            <span>*</span></label>
                                        <div class="">
                                            <input type="text" class="form-control" id="designation" maxlength="255"
                                                   autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="details" class="control-label">Details</label>
                                        <div class="">
                                            <textarea class="form-control tinymce-editor" id="details" style="height:70px;"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="facebook" class="control-label">Facebook</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="facebook" maxlength="255"
                                                   autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="instagram" class="control-label">Instagram</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="instagram" maxlength="255"
                                                   autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="twitter" class="control-label">Twitter</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="twitter" maxlength="255"
                                                   autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="linkedin" class="control-label">Linkedin</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="linkedin" maxlength="255"
                                                   autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="youtube" class="control-label">YouTube</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="youtube" maxlength="255"
                                                   autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="google" class="control-label">Google</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="google" maxlength="255"
                                                   autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="flickr" class="control-label">Flickr</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="flickr" maxlength="255"
                                                   autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="phone" class="control-label">Phone
                                            <span>*</span></label>
                                        <div class="">
                                            <input type="text" class="form-control" id="phone" maxlength="255"
                                                   autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="email" class="control-label">Email
                                            <span>*</span></label>
                                        <div class="">
                                            <input type="email" class="form-control" id="email" maxlength="255"
                                                   autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="website" class="control-label">Website</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="website" maxlength="255"
                                                   autocomplete="off">
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="form-group pb-3">
                                        <label for="meta_title" class="control-label">Meta Title</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="meta_title" maxlength="255"
                                                   autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="meta_keywords" class="control-label">Meta Keywords</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="meta_keywords" maxlength="255"
                                                   autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="meta_description" class="control-label">Meta Description</label>
                                        <div class="">
                                            <textarea class="form-control" id="meta_description" style="height:120px;"></textarea>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="form-group pb-3">
                                        <img id="newPhoto" src="{{ asset('assets-1/img/default-img.jpg') }}"
                                             style="height:120px;" />
                                        <br />

                                        <label class="form-label">Existing Photo</label>
                                        <input
                                            oninput="document.getElementById('newPhoto').src=window.URL.createObjectURL(this.files[0])"
                                            type="file" class="form-control" id="photoCreate">
                                    </div>

                                    <div class="form-group pb-3">
                                        <img id="newBanner" src="{{ asset('assets-1/img/default-img.jpg') }}"
                                             style="height:200px; width: 100%" />
                                        <br />

                                        <label class="form-label">Existing Banner</label>
                                        <input
                                            oninput="document.getElementById('newBanner').src=window.URL.createObjectURL(this.files[0])"
                                            type="file" class="form-control" id="bannerCreate">
                                    </div>


                                    <div class="form-group">
                                        <div class="">
                                            <button onclick="createTeamMember()" class="btn btn-primary codefotech_color pull-left">Create</button>
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

    <script src="{{ asset('vendor/tinymce/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            plugins: 'advlist autolink lists link image charmap print preview fullscreen media table paste code',
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | code'
        });

        async function createTeamMember() {
            event.preventDefault();

            try {
                let memberName = document.getElementById('member_name').value;
                let designation = document.getElementById('designation').value;
                let details = tinymce.get('details').getContent(); // Get content from TinyMCE editor
                let facebook = document.getElementById('facebook').value;
                let instagram = document.getElementById('instagram').value;
                let twitter = document.getElementById('twitter').value;
                let linkedin = document.getElementById('linkedin').value;
                let youtube = document.getElementById('youtube').value;
                let google = document.getElementById('google').value;
                let flickr = document.getElementById('flickr').value;
                let phone = document.getElementById('phone').value;
                let email = document.getElementById('email').value;
                let website = document.getElementById('website').value;
                let metaTitle = document.getElementById('meta_title').value;
                let metaKeywords = document.getElementById('meta_keywords').value;
                let metaDescription = document.getElementById('meta_description').value;

                let photoCreate = document.getElementById('photoCreate').files[0];
                let bannerCreate = document.getElementById('bannerCreate').files[0];

                if (memberName.length === 0) {
                    errorToast("Member Name Required !");
                } else if (designation.length === 0) {
                    errorToast("Designation Required !");
                } else if (phone.length === 0) {
                    errorToast("Phone Required !");
                } else if (email.length === 0) {
                    errorToast("Email Required !");
                } else if (!photoCreate) {
                    errorToast("Photo Required !");
                } else if (!bannerCreate) {
                    errorToast("Banner Required !");
                } else {
                    let formData = new FormData();

                    formData.append('member_name', memberName);
                    formData.append('designation', designation);
                    formData.append('details', details);
                    formData.append('facebook', facebook);
                    formData.append('instagram', instagram);
                    formData.append('twitter', twitter);
                    formData.append('linkedin', linkedin);
                    formData.append('youtube', youtube);
                    formData.append('google', google);
                    formData.append('flickr', flickr);
                    formData.append('phone', phone);
                    formData.append('email', email);
                    formData.append('website', website);
                    formData.append('meta_title', metaTitle);
                    formData.append('meta_keywords', metaKeywords);
                    formData.append('meta_description', metaDescription);
                    formData.append('photo', photoCreate);
                    formData.append('banner', bannerCreate);

                    const config = {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    }

                    let res = await axios.post('/dashboard/team_member/create', formData, config);
                    console.log(res);

                    if (res.status === 201 && res.data.status === 'success') {
                        successToast(res.data.message);
                        // Redirect to the list page
                        window.location.href = '/dashboard/team_member';
                    } else {
                        errorToast(res.data.message);
                    }
                }
            } catch (error) {
                console.error('Error creating team member:', error);
                errorToast('An error occurred while creating team member');
            }
        }
    </script>
@endsection
