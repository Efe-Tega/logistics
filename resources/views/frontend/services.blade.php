@include('frontend.body.header')

@php
    $userData = App\Models\User::find(1);
@endphp


<!-- ======= Header ======= -->
@include('frontend.body.navigation')
<!-- End Header --><!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">

    <div class="page-header d-flex align-items-center"
        style="background-image: url('{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/img/page-header.jpg') }}');">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">

                <div class="col-lg-6 text-center">

                    <h2>Services</h2>

                </div>

            </div>
        </div>
    </div>

    <nav>
        <div class="container">
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Services</li>
            </ol>
        </div>
    </nav>

</div><!-- End Breadcrumbs -->
<div id='main'>
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
