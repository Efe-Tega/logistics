<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

@php
    $userData = App\Models\User::find(1);
@endphp

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>
        {{ config('app.name') }}
    </title>
    <meta name="title" content="{{ config('app.name') }} || Award wining logistics" />
    <meta name="description"
        content="Experience reliable deliveries with our dedicated team, cutting-edge tracking
        technology and a commitment to prompt service. Ship with confidence- Your parcels, our priority" />
    <meta name="keywords"
        content="website,services,AL global, al global logistics , al global delivery, american liquidation delivery, american liquidation logistics, logistics service,parcels, courier, delivery company, delivery agency" />

    <link rel="shortcut icon" href="{{ asset('frontend/assets/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/assests/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/assests/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/assests/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('frontend/assests/site.webmanifest') }}">


    <script>
        const Uss = JSON.parse(atob('eyJQbGF0Zm9ybSI6IlByaW1lIENhcmdvIn0='));
    </script>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' data-rc='viewport'>
    <link rel='stylesheet' href='{{ asset('frontend/uss-core/assets/css/bootstrap.min.css') }}' data-rc='bootstrap'>
    <link rel='stylesheet' href='{{ asset('frontend/uss-core/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}'
        data-rc='bs-icon'>
    <link rel='stylesheet' href='{{ asset('frontend/uss-core/assets/css/animate.min.css') }}' data-rc='animate'>
    <link rel='stylesheet' href='{{ asset('frontend/uss-core/assets/vendor/glightbox/glightbox.min.css') }}'
        data-rc='glightbox'>
    <link rel='stylesheet' href='{{ asset('frontend/uss-core/assets/vendor/toastr/toastr.min.css') }}'
        data-rc='toastr'>
    <link rel='stylesheet' href='{{ asset('frontend/uss-core/assets/css/font-size.min.css') }}' data-rc='font-size'>
    <link rel='stylesheet' href='{{ asset('frontend/uss-core/assets/css/main.css') }}' data-rc='main-css'>
    <link rel='stylesheet' href='{{ asset('frontend/uss-modules/uss-courier/style.css') }}' />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet">

    <link
        href="{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/vendor/fontawesome-free/css/all.min.html') }}"
        rel="stylesheet">
    <link href="{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/vendor/glightbox/css/glightbox.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/vendor/swiper/swiper-bundle.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel = "stylesheet"
        href = "{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/vendor/leafletjs/leaflet.css') }}" />
    <link href="{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/css/main.css') }}" rel="stylesheet">

    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = 'c5cb5fd19cf589c645f0a272897fffc7095a2f9b';
        window.smartsupp || (function(d) {
            var s, c, o = smartsupp = function() {
                o._.push(arguments)
            };
            o._ = [];
            s = d.getElementsByTagName('script')[0];
            c = d.createElement('script');
            c.type = 'text/javascript';
            c.charset = 'utf-8';
            c.async = true;
            c.src = 'https://www.smartsuppchat.com/loader.js?';
            s.parentNode.insertBefore(c, s);
        })(document);
    </script>

</head>

<body class="uss">
