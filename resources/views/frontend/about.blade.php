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

                    <h2>About</h2>

                </div>

            </div>
        </div>
    </div>

    <nav>
        <div class="container">
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>About</li>
            </ol>
        </div>
    </nav>

</div><!-- End Breadcrumbs -->
<div id='main'> <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">
                <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
                    <img src="{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/img/about.jpg') }}"
                        class="img-fluid" alt="">
                    {{-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a> --}}
                </div>
                <div class="col-lg-6 content order-last  order-lg-first">
                    <h3>About Us</h3>
                    <p>
                        {{ $userData->web_name }}is leading worldwide shipper of autos, trucks, buses, boats,
                        construction equipment and various other pieces of machinery.
                    </P>
                    <p>
                        We can handle shipments to ports all over the African countries from any city within the
                        United States. Our company can offer pick-up services from your door and deliver it to the
                        port of your choice.
                    </P>

                    <p>
                        We are based in over 80 countries of the world. We ship thousands of vehicles each year
                        which substantiates the commitment to quality service, competitive pricing and
                        professionalism that you can expect on every shipment with us.
                    </P>

                    <p>
                        The success of our company is determined on the quality feedback that we get from all of our
                        valued customers. The world is our market for us to serve. All shipping inquires will be
                        answered within 24 hours of receipt.
                    </P>

                    <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-diagram-3"></i>
                            <div>
                                <h5>Our Mission</h5>
                                <p>{{ $userData->web_name }}is a service driven transportation logistics company
                                    providing freight forwarding courier and logistics solutions that intersects all
                                    aspects of the supply chain.</p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-fullscreen-exit"></i>
                            <div>
                                <h5>Our Vision</h5>
                                <p>To leverage technology, our assets, and contacts to transform the logistics
                                    industry for the empowerment of our shareholders and valuable customers</p>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter pt-0">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="19232" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Total Clients</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="201521" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Successful Deliveries</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="8453" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Hours Of Support</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="9070" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Cargo</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team pt-0">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <span>Our Team</span>
                <h2>Our Team</h2>

            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="member">
                        <img src="{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/img/team/team-1.jpg') }}"
                            class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Walter White</h4>
                            <span>General Manager</span>

                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="member">
                        <img src="{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/img/team/team-2.jpg') }}"
                            class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Sarah Jackson</h4>
                            <span>Human Resources Manager</span>

                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="member">
                        <img src="{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/img/team/team-3.jpg') }}"
                            class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>William Anderson</h4>
                            <span>Warehouse Manager</span>

                        </div>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>
    </section><!-- End Our Team Section -->

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
