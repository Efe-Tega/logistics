<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

@php
    $userData = App\Models\User::find(1);
@endphp

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>
        {{ config('app.name') }} || Home
    </title>
    <meta name="title" content="AL Global Logistics || Award wining delivery" />
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
    {{-- <script type="text/javascript">
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
    </script> --}}

</head>

<body class="uss">

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('frontend/uss-modules/uss-dashboard-main/ud-assets/images/general/73e7b8fd6ac7ac991ddc2a5b80e871576bb8c778.png') }}"
                    alt="">

            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ route('home') }}" class="active">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('service') }}">Services</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a class="get-a-quote" href="{{ route('track') }}">Track Order</a></li>
                </ul>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <!-- End Header --><!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row gy-4 d-flex justify-content-between">

                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">

                    <h2 data-aos="fade-up">{{ $userData->web_name }}</h2>

                    <p data-aos="fade-up" data-aos-delay="100">
                        Our experienced professionals are equipped to handle your complete transportation needs. Let
                        {{ $userData->web_name }} bring simplicity to your logistics by leveraging our assets and
                        preferred
                        carrier network.
                    </p>

                    <a href="{{ route('track') }}" class="col-lg-4 col-md-4 mx-auto btn"
                        style="background-color: #0B5ED7; color:#fff;">
                        Track & Trace</a>

                </div>

                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/img/hero3-img.jpg') }}"
                        class="img-fluid mb-3 mb-lg-0" alt="">
                </div>

            </div>
        </div>
    </section><!-- End Hero Section -->
    <div id='main'>
        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-cart-flatbed"></i></div>
                        <div>
                            <h4 class="title">Technology</h4>
                            <p class="description">Our technology allows our customers the most efficient logistics
                                solutions and makes it easier for our customers and carriers to work with us online at
                                any time of the day.</p>

                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-truck"></i></div>
                        <div>
                            <h4 class="title">Our People</h4>
                            <p class="description">{{ config('app.name') }} is not only asset-backed but our
                                shareholders are the best the industry has to offer and provide many years of logistics
                                experience. </p>

                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-truck-ramp-box"></i></div>
                        <div>
                            <h4 class="title">Accountability</h4>
                            <p class="description">We will be safe, professional, and accountable in everything we do.
                                We value honesty, integrity, and open communication for problem-solving and continuous
                                improvement.</p>

                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= Services Section ======= -->
        <section id="service" class="services pt-0">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <span>Our Services</span>
                    <h2>Our Services</h2>

                </div>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/img/storage-service.jpg') }}"
                                    alt="" class="img-fluid">
                            </div>
                            <h3><a href="{{ route('service') }}" class="stretched-link">AIR FREIGHT</a></h3>
                            <p>We offer individuals and companies end-to-end logistics service with guaranteed delivery
                                of any size shipment. Exporting of Personal Effects, Household Goods, Commercial
                                Products, and more.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/img/logistics-service.jpg') }}"
                                    alt="" class="img-fluid">
                            </div>
                            <h3><a href="{{ route('service') }}" class="stretched-link">OCEAN FREIGHT</a></h3>
                            <p>We ship from United States to various destinations in accross the world. We offer all
                                types of containerized shipping, from less than container loads to 20′, 40′ and
                                refrigerated containers.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/img/cargo-service.jpg') }}"
                                    alt="" class="img-fluid">
                            </div>
                            <h3><a href="{{ route('service') }}" class="stretched-link">PROCUREMENT</a></h3>
                            <p>Does your company value saving money, time and improving its eficiency? This is where we
                                come in. We can help source and procure just about anything in the US and ship straight
                                to your door.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/img/trucking-service.jpg') }}"
                                    alt="" class="img-fluid">
                            </div>
                            <h3><a href="{{ route('service') }}" class="stretched-link">LOGISTICS</a></h3>
                            <p>We can help move your vehicle from city to city,transport and coordinate your things
                                anywhere in the world. If you’re shipping out of the country, or simply moving your
                                cargo domestically, we can handle any cargo or commodity.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/img/packaging-service.jpg') }}"
                                    alt="" class="img-fluid">
                            </div>
                            <h3><a href="{{ route('service') }}" class="stretched-link">FREIGHT FORWARDING</a></h3>
                            <p>If you wish to ship personal items of any kind, regardless of the weight, you've come to
                                the right place. We provide both ocean freight & air freight, customs clearance, loading
                                and trans-loading, & consolidation services.
                            </p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/img/warehousing-service.jpg') }}"
                                    alt="" class="img-fluid">
                            </div>
                            <h3><a href="{{ route('service') }}" class="stretched-link">WAREHOUSING</a></h3>
                            <p>We have top notch security and loads of space. Store your stuff at our warehouse. Use our
                                warehouse service as your distribution center. Our warehouses offers more than enough
                                space for consolidation service at no extra charge,
                            </p>
                        </div>
                    </div><!-- End Card Item -->

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container" data-aos="zoom-out">

                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h3>Welcome To {{ $userData->web_name }}</h3>
                        <p> We are a full-service Ocean freight forwarder licensed by the FMC operating as Ocean
                            Transportation Intermediary ("OTI"). Our
                            Mission is to retain our leadership in providing affordable & efficient service.</p>
                        <a class="cta-btn" href="{{ route('contact') }}">Visit Us Today</a>
                    </div>
                </div>

            </div>
        </section><!-- End Call To Action Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">

                <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

                    <div class="col-md-5">
                        <img src="{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/img/features-1.jpg') }}"
                            class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7">
                        <h3>SHIP WITH US.</h3>
                        <p class="fst-italic">
                            Why should you ship with us?
                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i> We are quite reliable.</li>
                            <li><i class="bi bi-check"></i> Trustworthy - our word is our bond.</li>
                            <li><i class="bi bi-check"></i> Expert in the business, in & out!</li>
                            <li><i class="bi bi-check"></i> Very competitive price for high quality service</li>
                            <li><i class="bi bi-check"></i> Fully licensed and insured!</li>
                            <li><i class="bi bi-check"></i> You Will Always Get Outstanding Customer Service, we
                                promise.</li>
                        </ul>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/img/features-2.jpg') }}"
                            class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 order-2 order-md-1">
                        <h3>Roll On Roll Off (Ro-Ro) Shipping</h3>
                        <p class="fst-italic">
                            This is the simplest and cheapest method of shipping for vehicles. Vehicles are driven
                            directly onto the RORO vessel and secured to the car decks. They are securely inside the
                            vessel, wind-and-watertight.
                        </p>
                        <p>
                            It is important to note that you cannot ship personal effects using this method, but spare
                            tire and factory fitted accessories are allowed." Usually takes about 21 days from the date
                            of vessel departure to any part of the world.
                        </p>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src="{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/img/features-3.jpg') }}"
                            class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7">
                        <h3>How It Works</h3>
                        <p></p>
                        <ul>
                            <li><i class="bi bi-check"></i><strong>Bring or Send Your Item(s)</strong> Drop off your
                                item(s) in person or have it mailed to us using your in-house address you'll get when
                                you sign up for a free account with us.</li>
                            <li><i class="bi bi-check"></i> <strong>We Process Your Item(s)</strong> We confirm
                                receipt, process payment, & package your item(s) accordingly & set ready for shipment.
                            </li>
                            <li><i class="bi bi-check"></i><strong>We Deliver to Your Destination</strong>We ship your
                                item(s) and deliver to yourfinal destination. Air freight: 7-10 days, Ro-RO: 21 days,
                                Container: 6-8 weeks.</li>
                        </ul>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/img/features-4.jpg') }}"
                            class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 order-2 order-md-1">
                        <h3>Container Shipping</h3>
                        <p class="fst-italic">
                            Safe and secure inside your own container. All vehicles are securely blocked, braced and
                            tied down ensuring absolute security during transportation.
                        </p>
                        <p>
                            Generally your vehicle is loaded into a 20ft or 40ft steel container at a port or the
                            nearest regional warehouse, then the container is later loaded onto the vessel.
                        </p>
                        <p>

                            With this method, you can ship any personal effects inside the vehicle. Takes between 2 - 10
                            weeks to make it to to anypart of the world from the United States.
                        </p>
                    </div>
                </div><!-- Features Item -->

            </div>
        </section><!-- End Features Section -->


    </div>
    <!-- ======= Footer ======= -->
    @include('frontend.body.footer')
    <!-- End Footer -->


    <div id="preloader"></div>
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

    <script
        src="{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/vendor/purecounter/purecounter_vanilla.js') }}">
    </script>
    <script src="{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/vendor/glightbox/js/glightbox.min.js') }}">
    </script>
    <script src="{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/vendor/swiper/swiper-bundle.min.js') }}">
    </script>
    <script src="{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/vendor/php-email-form/validate.js') }}">
    </script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/js/main.js') }}"></script>
</body>

</html>
