@extends('dashboard')

@section('title', 'Team Member Update')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content-header">
            <div style="" class="row py-3">
                <div class="col">
                    <h4>Team Member Update</h4>
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
                                    <input type="hidden" id="team_member_id" value="{{ $id }}">

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
                                        <label for="" class="control-label">Existing Photo</label>
                                        <div class="pt-3">
                                            <img src="{{ asset($teamMemberData['photo'] ?? 'assets-1/img/default-img.jpg') }}"
                                                 class="existing-photo" id="oldPhoto" style="height:80px;">
                                            <br><br>
                                            <input
                                                oninput="document.getElementById('oldPhoto').src = window.URL.createObjectURL(this.files[0])"
                                                type="file" class="form-control" id="photoUpdate">
                                            <br>
                                            <input type="text" class="form-control" id="photoFilePath"
                                                   value="{{ $teamMemberData['photo'] ?? '' }}" readonly disabled>
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="" class="control-label">Existing Banner</label>
                                        <div class="pt-3">
                                            <img src="{{ asset($teamMemberData['banner'] ?? 'assets-1/img/default-img.jpg') }}"
                                                 class="existing-photo" id="oldBanner" style="height:200px; width: 100%">
                                            <br><br>
                                            <input
                                                oninput="document.getElementById('oldBanner').src = window.URL.createObjectURL(this.files[0])"
                                                type="file" class="form-control" id="bannerUpdate">
                                            <br>
                                            <input type="text" class="form-control" id="bannerFilePath"
                                                   value="{{ $teamMemberData['banner'] ?? '' }}" readonly disabled>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="">
                                            <div class="">
                                                <button class="btn btn-success pull-left" type="button"
                                                        onclick="updateTeamMember()">Update</button>
                                            </div>
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
            selector: '.tinymce-editor',
            height: 300,
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
        });

        async function getTeamMember() {
            let id = document.getElementById('team_member_id').value;
            try {
                let res = await axios.get(`/dashboard/team_member/get/${id}`);
                if (res.status === 200 && res.data.status === 'success') {
                    let data = res.data.data;
                    document.getElementById('member_name').value = data.member_name;
                    document.getElementById('designation').value = data.designation;
                    document.getElementById('details').value = data.details;
                    document.getElementById('facebook').value = data.facebook;
                    document.getElementById('instagram').value = data.instagram;
                    document.getElementById('twitter').value = data.twitter;
                    document.getElementById('linkedin').value = data.linkedin;
                    document.getElementById('youtube').value = data.youtube;
                    document.getElementById('google').value = data.google;
                    document.getElementById('flickr').value = data.flickr;
                    document.getElementById('phone').value = data.phone;
                    document.getElementById('email').value = data.email;
                    document.getElementById('website').value = data.website;
                    document.getElementById('meta_title').value = data.meta_title;
                    document.getElementById('meta_keywords').value = data.meta_keywords;
                    document.getElementById('meta_description').value = data.meta_description;

                    // Set paths for images
                    document.getElementById('photoFilePath').value = data.photo ?? '';
                    document.getElementById('oldPhoto').src = data.photo ??
                        '{{ asset('assets-1/img/default-img.jpg') }}';
                    document.getElementById('bannerFilePath').value = data.banner ?? '';
                    document.getElementById('oldBanner').src = data.banner ??
                        '{{ asset('assets-1/img/default-img.jpg') }}';
                } else {
                    errorToast('Failed to fetch team member');
                }
            } catch (error) {
                console.error('Error fetching team member:', error);
                errorToast('An error occurred while fetching team member');
            }
        }

        async function updateTeamMember() {
            event.preventDefault();
            try {
                let id = document.getElementById('team_member_id').value;
                let memberName = document.getElementById('member_name').value;
                let designation = document.getElementById('designation').value;
                let details = tinymce.get('details').getContent();
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

                // Get file inputs
                let photoUpdate = document.getElementById('photoUpdate').files[0];
                let bannerUpdate = document.getElementById('bannerUpdate').files[0];

                if (memberName.length === 0) {
                    errorToast("Name Required !");
                } else if (designation.length === 0) {
                    errorToast("Designation Required !");
                } else if (phone.length === 0) {
                    errorToast("Phone Required !");
                } else if (email.length === 0) {
                    errorToast("Email Required !");
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
                    formData.append('photo', photoUpdate);
                    formData.append('banner', bannerUpdate);

                    const config = {
                        header: {
                            'content-type': 'multipart/form-data'
                        }
                    }

                    let res = await axios.post(`/dashboard/team_member/update/${id}`, formData, config);
                    console.log(res);

                    if (res.status === 200 && res.data.status === 'success') {
                        successToast(res.data.message);
                        // refresh update page
                        await getTeamMember();
                    } else {
                        errorToast(res.data.message);
                    }
                }

            } catch (error) {
                console.error('Error updating team member:', error);
                errorToast('An error occurred while updating team member');
            }
        }

        // Initial fetch of destination data when page loads
        document.addEventListener('DOMContentLoaded', async () => {
            await getTeamMember();
        });
    </script>

@endsection
