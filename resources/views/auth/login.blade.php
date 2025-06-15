<!doctype html>
<html>
@php
    $userData = App\Models\User::find(1);
@endphp
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <script>
        const Uss = JSON.parse(atob('eyJAUkUtUE9TVCI6ZmFsc2UsIlBsYXRmb3JtIjoiUHJpbWUgQ2FyZ28ifQ=='));
    </script>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' data-rc='viewport'>
    <link rel='stylesheet' href='{{ asset('frontend/uss-core/assets/css/bootstrap.min.css') }}' data-rc='bootstrap'>
    <link rel='stylesheet' href='{{ asset('frontend/uss-core/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}'
        data-rc='bs-icon'>
    <link rel='stylesheet' href='{{ asset('frontend/uss-core/assets/css/animate.min.css') }}' data-rc='animate'>
    <link rel='stylesheet' href='{{ asset('frontend/uss-core/assets/vendor/glightbox/glightbox.min.css') }}'
        data-rc='glightbox'>
    <link rel='stylesheet' href='{{ asset('frontend/uss-core/assets/vendor/toastr/toastr.min.css') }}' data-rc='toastr'>
    <link rel='stylesheet' href='{{ asset('frontend/uss-core/assets/css/font-size.min.css') }}' data-rc='font-size'>
    <link rel='stylesheet' href='{{ asset('frontend/uss-core/assets/css/main.css') }}' data-rc='main-css'>
    <link rel="stylesheet" href="{{ asset('frontend/uss-modules/uss-dashboard-main/ud-assets/css/default.css') }}" />
    <link rel='stylesheet' href='{{ asset('frontend/uss-modules/uss-courier/style.css') }}' />

</head>

<body class="uss">


    <main class="main-wrapper full-width">
        <div class="row g-0 auth-row">
            <div class="col-lg-6">

                <div class="auth-cover-wrapper bg-primary-100">
                    <div class="auth-cover">
                        <div class="title text-center">

                            <!-- image -->
                            <div class='mb-2'>
                                <img src='{{ asset('frontend/uss-modules/uss-dashboard-main/ud-assets/images/general/73e7b8fd6ac7ac991ddc2a5b80e871576bb8c778.png') }}'
                                    class='img-fluid user-select-none'>
                            </div>

                            <h1 class="text-white mb-10">
                                {{ $userData->web_name }}</h1>

                            <p class="text-light">
                                Fast and {{ $userData->web_name }}</p>

                        </div>
                    </div>
                </div>


            </div>

            <div class="col-lg-6">

                <div class="auth-wrapper">
                    <div class="flex-grow-1">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row py-3">
                                <div class="col-sm-10 col-md-9 m-auto">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <div class="mb-3">
                                        <input type="email" placeholder="Email Address" class='form-control'
                                            name='email' required>
                                    </div>
                                    <div class="mb-4">
                                        <input type="password" placeholder="Password" class='form-control'
                                            name='password' required>
                                    </div>

                                    <div class="">
                                        <button class="btn btn-primary w-100" type='submit'>
                                            Sign In
                                        </button>
                                    </div>

                                </div>
                            </div>
                            <!-- end row -->
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </main>
    <script src='{{ asset('frontend/uss-core/assets/js/jquery-3.6.4.min.js') }}' data-rc='jquery'></script>
    <script src='{{ asset('frontend/uss-core/assets/js/bootstrap.bundle.min.js') }}' data-rc='bootstrap'></script>
    <script src='{{ asset('frontend/uss-core/assets/js/bootbox.all.min.js') }}' data-rc='bootbox'></script>
    <script src='{{ asset('frontend/uss-core/assets/vendor/glightbox/glightbox.min.js') }}' data-rc='glightbox'></script>
    <script src='{{ asset('frontend/uss-core/assets/vendor/toastr/toastr.min.js') }}' data-rc='toastr'></script>
    <script src='{{ asset('frontend/uss-core/assets/vendor/notiflix/notiflix-loading-aio-3.2.6.min.js') }}'
        data-rc='notiflix'></script>
    <script src='{{ asset('frontend/uss-core/assets/vendor/notiflix/notiflix-block-aio-3.2.6.min.js') }}'
        data-rc='notiflix'></script>
    <script src='{{ asset('frontend/uss-core/assets/js/main.js') }}' data-rc='main-js'></script>
    <script src="{{ asset('frontend/uss-modules/uss-dashboard-main/ud-assets/js/polyfill.js') }}"></script>
    <script src="{{ asset('frontend/uss-modules/uss-dashboard-main/ud-assets/js/access.js') }}"></script>

</body>

<!-- Mirrored from swiftdelco.com/dashboard by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 15:18:36 GMT -->

</html>
