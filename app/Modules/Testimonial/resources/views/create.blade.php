@extends('dashboard')

@section('title', 'Testimonial Create')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content-header">
            <div style="" class="row py-3">
                <div class="col">
                    <h4>Testimonial Create</h4>
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
                            <form class="form-horizontal" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="card shadow-sm p-3">
                                    <div class="form-group pb-3">
                                        <label for="name" class="control-label">Name
                                            <span>*</span></label>
                                        <div class="">
                                            <input type="text" class="form-control" id="name" maxlength="255"
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
                                        <label for="comment" class="control-label">Comment </label>
                                        <div class="">
                                            <textarea class="form-control" id="comment" style="height:70px;"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <img id="newPhoto" src="{{ asset('assets-1/img/default-img.jpg') }}"
                                             style="height:120px;" />
                                        <br />

                                        <label class="form-label">Existing Photo</label>
                                        <input
                                            oninput="document.getElementById('newPhoto').src=window.URL.createObjectURL(this.files[0])"
                                            type="file" class="form-control" id="photoCreate">
                                    </div>

                                    <div class="form-group">
                                        <div class="">
                                            <button class="btn btn-primary codefotech_color pull-left"
                                                    onclick="createTestimonial()">Create</button>
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
        async function createTestimonial() {
            event.preventDefault();

            try {
                let name = document.getElementById('name').value;
                let designation = document.getElementById('designation').value;
                let comment = document.getElementById('comment').value;

                let photoCreate = document.getElementById('photoCreate').files[0];

                if (name.length === 0) {
                    errorToast("Name Required !");
                } else if (designation.length === 0) {
                    errorToast("Designation Required !");
                } else if (comment.length === 0) {
                    errorToast("Comment Required !");
                } else if (!photoCreate) {
                    errorToast("Photo Required !");
                } else {
                    let formData = new FormData();

                    formData.append('name', name);
                    formData.append('designation', designation);
                    formData.append('comment', comment);
                    formData.append('photo', photoCreate);

                    const config = {
                        header: {
                            'content-type': 'multipart/form-data'
                        }
                    }

                    let res = await axios.post('/dashboard/testimonial/create', formData, config);
                    console.log(res);

                    if (res.status === 201 && res.data.status === 'success') {
                        successToast(res.data.message);
                        // Redirect to the list page
                        window.location.href = '/dashboard/testimonial';
                    } else {
                        errorToast(res.data.message);
                    }
                }
            } catch (error) {
                console.error('Error creating testimonial:', error);
                errorToast('An error occurred while creating testimonial');
            }
        }
    </script>
@endsection
