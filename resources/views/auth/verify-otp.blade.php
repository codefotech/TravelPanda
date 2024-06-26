<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP Form</title>

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

                    <div class="card p-5 border-0 shadow" style="background-image: url('{{ asset('assets-1/img/background_element-5.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                        <div class="container py-5">
                            <div class="text-center pb-4">
                                <span class="fw-bold h4">
                                    TechToTravel
                                    <i class="fas fa-plane codefotech_text_color"></i>
                                </span>
                            </div>
                            <h1 class="text-center fw-bold codefotech_text_color">OTP Verification</h1>
                            <p class="text-muted text-center mb-4">A 6 Digit Verification code has been sent your email address</p>

                            <div id="otp" class="inputs d-flex flex-row justify-content-center my-3">
                                <input class="otp-input m-2 text-center form-control rounded" type="text" id="first" maxlength="1">
                                <input class="otp-input m-2 text-center form-control rounded" type="text" id="second" maxlength="1">
                                <input class="otp-input m-2 text-center form-control rounded" type="text" id="third" maxlength="1">
                                <input class="otp-input m-2 text-center form-control rounded" type="text" id="fourth" maxlength="1">
                                <input class="otp-input m-2 text-center form-control rounded" type="text" id="fifth" maxlength="1">
                                <input class="otp-input m-2 text-center form-control rounded" type="text" id="sixth" maxlength="1">
                            </div>

                            <p class="text-center mt-4"><a href="#" class="btn btn-primary codefotech_color btn-lg text-uppercase px-5">Next</a></p>

                        </div>
                    </div>


            </div>
        </div>
    </div>


    <script src="{{ asset('assets-1/js/bootstrap.bundle.min.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function (event) {

        function OTPInput() {
            const inputs = document.querySelectorAll('#otp > *[id]');
            for (let i = 0; i < inputs.length; i++) {
                inputs[i].addEventListener('keydown', function (event) {
                    if (event.key === "Backspace") {
                        inputs[i].value = '';
                        if (i !== 0) inputs[i - 1].focus();
                    } else {
                        if (i === inputs.length - 1 && inputs[i].value !== '') {
                            return true;
                        } else if (event.keyCode > 47 && event.keyCode < 58) {
                            inputs[i].value = event.key;
                            if (i !== inputs.length - 1) inputs[i + 1].focus();
                            event.preventDefault();
                        } else if (event.keyCode > 64 && event.keyCode < 91) {
                            inputs[i].value = String.fromCharCode(event.keyCode);
                            if (i !== inputs.length - 1) inputs[i + 1].focus();
                            event.preventDefault();
                        }
                    }
                });
            }
        }

        OTPInput();
        });

    </script>
</body>
</html>
