<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap">

    <link href="{{ asset('assets-1/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-1/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets-1/css/custom.css') }}">


</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="card-group">
                    <div id="form-left" class="card p-5 border-0 shadow overflow-hidden">
                        <div class="container">
                            <h1 class="text-center fw-bold left-title text-white">Travelista Tours</h1>
                            <p class="text-center text-white">Travel is the only purchase that enriches you in ways beyond material wealth</p>
                        </div>
                    </div>
                    <div class="card p-5 border-0 shadow overflow-hidden" style="background-image: url('{{ asset('assets-1/img/login_elements.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                        <div class="container py-5">
                            <div class="text-center pb-4">
                                <span class="fw-bold h4">
                                    TechToTravel
                                    <i class="fas fa-plane codefotech_text_color"></i>
                                </span>
                            </div>
                            <h1 class="text-center fw-bold codefotech_text_color">Welcome</h1>
                            <p class="text-muted text-center mb-4">Login with Email</p>
                            <input type="email" name="email" class="form-control" placeholder="Email Address"/> <br>
                            <input type="password" name="password" class="form-control" placeholder="Password"/>
                            <p class="text-center mt-3"><a href="{{ url('/sendOtp') }}" class="text-muted text-decoration-none">Forget Your Password?</a></p>
                            <p class="text-center mt-4"><a href="#" class="btn btn-primary codefotech_color btn-lg text-uppercase px-5">Login</a></p>

                            <div class="divider d-flex align-items-center my-2">
                                <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                            </div>

                            <p class="text-center mt-4">
                                <a href="#" class="btn btn-light btn-lg text-uppercase shadow-sm mx-2 border-0" style="background-color: #E4F3F5;">
                                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="48px" height="48px"><path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"/><path fill="#fff" d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z"/></svg>
                                </a>
                                <a href="#" class="btn btn-light btn-lg text-uppercase shadow-sm mx-2 border-0" style="background-color: #E4F3F5;">
                                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="48px" height="48px"><path fill="#fbc02d" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12	s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20	s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/><path fill="#e53935" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039	l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/><path fill="#4caf50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36	c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/><path fill="#1565c0" d="M43.611,20.083L43.595,20L42,20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571	c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/></svg>
                                </a>
                                <a href="#" class="btn btn-light btn-lg text-uppercase shadow-sm mx-2 border-0" style="background-color: #E4F3F5;">
                                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="50px" height="50px"><path d="M 44.527344 34.75 C 43.449219 37.144531 42.929688 38.214844 41.542969 40.328125 C 39.601563 43.28125 36.863281 46.96875 33.480469 46.992188 C 30.46875 47.019531 29.691406 45.027344 25.601563 45.0625 C 21.515625 45.082031 20.664063 47.03125 17.648438 47 C 14.261719 46.96875 11.671875 43.648438 9.730469 40.699219 C 4.300781 32.429688 3.726563 22.734375 7.082031 17.578125 C 9.457031 13.921875 13.210938 11.773438 16.738281 11.773438 C 20.332031 11.773438 22.589844 13.746094 25.558594 13.746094 C 28.441406 13.746094 30.195313 11.769531 34.351563 11.769531 C 37.492188 11.769531 40.8125 13.480469 43.1875 16.433594 C 35.421875 20.691406 36.683594 31.78125 44.527344 34.75 Z M 31.195313 8.46875 C 32.707031 6.527344 33.855469 3.789063 33.4375 1 C 30.972656 1.167969 28.089844 2.742188 26.40625 4.78125 C 24.878906 6.640625 23.613281 9.398438 24.105469 12.066406 C 26.796875 12.152344 29.582031 10.546875 31.195313 8.46875 Z"/></svg>
                                </a>
                            </p>

                            <p class="text-center text-muted">Don't have account? <a href="{{ url('/userRegistration') }}" class="fw-bold text-decoration-none">Register Now</a></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets-1/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
