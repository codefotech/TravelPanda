<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password Form</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap">

    <link href="{{ asset('assets-1/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-1/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets-1/css/custom.css') }}">

</head>
<body>
    <div class="container my-5">
        <div class="row align-content-center justify-content-center">
            <div class="col-12 col-sm-12 col-lg-8">

                    <div class="card p-5 border-0 shadow" style="background-image: url('{{ asset('assets-1/img/background_element-4.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                        <div class="container py-5">
                            <div class="text-center pb-4">
                                <span class="fw-bold h4">
                                    TechToTravel
                                    <i class="fas fa-plane codefotech_text_color"></i>
                                </span>
                            </div>
                            <h1 class="text-center fw-bold codefotech_text_color">SET NEW PASSWORD</h1>
                            <p class="text-muted text-center mb-4">Set your password below to continue</p>

                            <input type="email" name="email" class="form-control readonly" placeholder="Email Address" value="abc@gmail.com" readonly /><br>
                            <input type="password" name="old_password" class="form-control" placeholder="Old Password"/><br>
                            <input type="password" name="new_password" class="form-control" placeholder="New Password"/>

                            <p class="text-center mt-4"><a href="#" class="btn btn-primary codefotech_color btn-lg text-uppercase px-5">Next</a></p>

                        </div>
                    </div>


            </div>
        </div>
    </div>


    <script src="{{ asset('assets-1/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
