@extends('dashboard')

@section('title', 'Testimonial Update')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content-header">
            <div style="" class="row py-3">
                <div class="col">
                    <h4>Testimonial Update</h4>
                </div>
                <div style="text-align: right;" class="col">
                    <a href="{{ url('/dashboard/testimonial') }}" class="btn btn-primary codefotech_color">
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
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" onsubmit="updateTestimonial(event)">
                                @csrf
                                <div class="card shadow-sm p-3">
                                    <input type="hidden" id="testimonial_id" value="{{ $id }}">

                                    <div class="form-group pb-3">
                                        <label for="name" class="control-label">Name
                                            <span>*</span></label>
                                        <div class="">
                                            <input type="text" class="form-control" id="name" maxlength="255"
                                                   autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="designation" class="control-label">Designation </label>
                                        <div class="">
                                            <textarea class="form-control" id="designation" style="height:70px;"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="comment" class="control-label">Comment
                                            <span>*</span></label>
                                        <div class="">
                                            <input type="text" class="form-control" id="comment" maxlength="255"
                                                   autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="" class="control-label">Existing Photo</label>
                                        <div class="pt-3">
                                            <img src="{{ asset($testimonialData['photo'] ?? 'assets-1/img/default-img.jpg') }}"
                                                 class="existing-photo" id="oldPhoto" style="height:80px;">
                                            <br><br>
                                            <input
                                                oninput="document.getElementById('oldPhoto').src = window.URL.createObjectURL(this.files[0])"
                                                type="file" class="form-control" id="photoUpdate">
                                            <br>
                                            <input type="text" class="form-control" id="photoFilePath"
                                                   value="{{ $testimonialData['photo'] ?? '' }}" readonly disabled>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="">
                                            <div class="">
                                                <button class="btn btn-success pull-left" type="submit">Update</button>
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

    <script>
        async function getTestimonial() {
            let id = document.getElementById('testimonial_id').value;
            try {
                let res = await axios.get(`/dashboard/testimonial/get/${id}`);
                if (res.status === 200 && res.data.status === 'success') {
                    let data = res.data.data;
                    document.getElementById('name').value = data.name;
                    document.getElementById('designation').value = data.designation;
                    document.getElementById('comment').value = data.comment;

                    // Set paths for images
                    document.getElementById('photoFilePath').value = data.photo ?? '';
                    document.getElementById('oldPhoto').src = data.photo ??
                        '{{ asset('assets-1/img/default-img.jpg') }}';
                } else {
                    errorToast('Failed to fetch testimonial');
                }
            } catch (error) {
                console.error('Error fetching testimonial:', error);
                errorToast('An error occurred while fetching testimonial');
            }
        }


        async function updateTestimonial(event) {
            event.preventDefault();
            try {
                let id = document.getElementById('testimonial_id').value;
                let name = document.getElementById('name').value;
                let designation = document.getElementById('designation').value;
                let comment = document.getElementById('comment').value;

                // Get file inputs
                let photoUpdate = document.getElementById('photoUpdate').files[0];

                if (name.length === 0) {
                    errorToast("Name Required !");
                } else if (comment.length === 0) {
                    errorToast("Comment Required !");
                } else {
                    let formData = new FormData();

                    formData.append('name', name);
                    formData.append('designation', designation);
                    formData.append('comment', comment);
                    formData.append('photo', photoUpdate);

                    const config = {
                        headers: {
                            'content-type': 'multipart/form-data'
                        }
                    }

                    let res = await axios.post(`/dashboard/testimonial/update/${id}`, formData, config);

                    if (res.status === 200 && res.data.status === 'success') {
                        successToast(res.data.message);
                        // refresh update page
                        await getTestimonial();
                    } else {
                        errorToast(res.data.message);
                    }
                }

            } catch (error) {
                console.error('Error updating testimonial:', error);
                errorToast('An error occurred while updating testimonial');
            }
        }

        // Initial fetch of destination data when page loads
        document.addEventListener('DOMContentLoaded', async () => {
            await getTestimonial();
        });
    </script>

@endsection
