@extends('dashboard')

@section('title', 'Social Media')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content-header">
            <h4>Social Media</h4>
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
                                        <label for="facebook" class="control-label">Facebook</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="facebook" maxlength="255"
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
                                        <label for="google" class="control-label">Google</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="google" maxlength="255"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="printerest" class="control-label">Printerest</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="printerest" maxlength="255"
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
                                        <label for="instagram" class="control-label">Instagram</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="instagram" maxlength="255"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="tumblr" class="control-label">Tumblr</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="tumblr" maxlength="255"
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
                                        <label for="reddit" class="control-label">Reddit</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="reddit" maxlength="255"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="snapchat" class="control-label">SnapChat</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="snapchat" maxlength="255"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="whatsapp" class="control-label">WhatsApp</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="whatsapp" maxlength="255"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="quora" class="control-label">Quora</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="quora" maxlength="255"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="stumbleupon" class="control-label">StumbleUpon</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="stumbleupon" maxlength="255"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="delicious" class="control-label">Delicious</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="delicious" maxlength="255"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="digg" class="control-label">Digg</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="digg" maxlength="255"
                                                autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="">
                                            <button class="btn btn-success pull-left"
                                                onclick="updateSocialMedia()">Update
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
        async function getSocialMedia() {
            try {
                let res = await axios.get('/dashboard/social_media');
                if (res.status === 200 && res.data.status === 'success') {
                    let data = res.data.data;
                    document.getElementById('facebook').value = data.facebook;
                    document.getElementById('twitter').value = data.twitter;
                    document.getElementById('linkedin').value = data.linkedin;
                    document.getElementById('google').value = data.google;
                    document.getElementById('printerest').value = data.printerest;
                    document.getElementById('youtube').value = data.youtube;
                    document.getElementById('instagram').value = data.instagram;
                    document.getElementById('tumblr').value = data.tumblr;
                    document.getElementById('flickr').value = data.flickr;
                    document.getElementById('reddit').value = data.reddit;
                    document.getElementById('snapchat').value = data.snapchat;
                    document.getElementById('whatsapp').value = data.whatsapp;
                    document.getElementById('quora').value = data.quora;
                    document.getElementById('stumbleupon').value = data.stumbleupon;
                    document.getElementById('delicious').value = data.delicious;
                    document.getElementById('digg').value = data.digg;
                } else {
                    errorToast('Failed to fetch social media');
                }
            } catch (error) {
                console.error('Error fetching social media:', error);
                errorToast('An error occurred while fetching social media');
            }
        }


        async function updateSocialMedia() {
            event.preventDefault();
            try {
                let updateFacebook = document.getElementById('facebook').value;
                let updateTwitter = document.getElementById('twitter').value;
                let updateLinkedin = document.getElementById('linkedin').value;
                let updateGoogle = document.getElementById('google').value;
                let updatePrinterest = document.getElementById('printerest').value;
                let updateYouTube = document.getElementById('youtube').value;
                let updateInstagram = document.getElementById('instagram').value;
                let updateTumblr = document.getElementById('tumblr').value;
                let updateFlickr = document.getElementById('flickr').value;
                let updateReddit = document.getElementById('reddit').value;
                let updateSnapChat = document.getElementById('snapchat').value;
                let updateWhatsApp = document.getElementById('whatsapp').value;
                let updateQuora = document.getElementById('quora').value;
                let updateStumbleUpon = document.getElementById('stumbleupon').value;
                let updateDelicious = document.getElementById('delicious').value;
                let updateDigg = document.getElementById('digg').value;

                let res = await axios.post('/dashboard/social_media/update', {
                        facebook: updateFacebook,
                        twitter: updateTwitter,
                        linkedin: updateLinkedin,
                        google: updateGoogle,
                        printerest: updatePrinterest,
                        youtube: updateYouTube,
                        instagram: updateInstagram,
                        tumblr: updateTumblr,
                        flickr: updateFlickr,
                        reddit: updateReddit,
                        snapchat: updateSnapChat,
                        whatsapp: updateWhatsApp,
                        quora: updateQuora,
                        stumbleupon: updateStumbleUpon,
                        delicious: updateDelicious,
                        digg: updateDigg
                    });

                    if (res.status === 200 && res.data['status'] === 'success') {
                        successToast(res.data['message']);
                        await getSocialMedia();
                    } else {
                        errorToast(res.data['message']);
                    }

            } catch (error) {
                console.error('Error updating social media:', error);
                errorToast('An error occurred while updating social media');
            }
        }

        // Initial fetch of payment configuration data when page loads
        document.addEventListener('DOMContentLoaded', async () => {
            await getSocialMedia();
        });
    </script>

@endsection
