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

                    <h2>Contact</h2>

                </div>

            </div>
        </div>
    </div>

    <nav>
        <div class="container">
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Contact</li>
            </ol>
        </div>
    </nav>

</div><!-- End Breadcrumbs -->
<div id='main'> <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4 mt-4">


                <div class="col-lg-4">

                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Location:</h4>
                            <p>{{ $userData->address }}</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>Email:</h4>
                            <p>{{ $userData->web_email }}</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Call:</h4>
                            <p>{{ $userData->phone }}</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>


                <div class="col-lg-8 mx-auto">
                    <form action="" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject"
                                placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <input type='hidden' name='bash' value='YWRtaW5Ac3dpZnRkZWxjby5jb20='>
                        {{-- <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div> --}}
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>
    </section><!-- End Contact Section -->
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
