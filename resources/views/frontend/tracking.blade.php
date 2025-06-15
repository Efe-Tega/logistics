@include('frontend.body.header')

<!-- ======= Header ======= -->
@include('frontend.body.navigation')
<!-- End Header -->
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">

    <div class="page-header d-flex align-items-center"
        style="background-image: url('{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/img/page-header.jpg') }}');">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">

                <div class="col-lg-6 text-center">

                    <h2>Tracker</h2>

                </div>

            </div>
        </div>
    </div>

    <nav>
        <div class="container">
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Tracker</li>
            </ol>
        </div>
    </nav>

</div><!-- End Breadcrumbs -->
<div id='main'>
    <section class='container track-section'>

        <div class='mb-5'>
            <form action="{{ route('track.shipment') }}" method="POST" class="form-search mb-3">
                @csrf

                @if (session('status'))
                    <div class="alert alert-success" role="alert">{{ session('status') }}</div>
                @elseif(session('error'))
                    <div class="alert alert-danger" role="alert">{{ session('error') }}</div>
                @endif

                <p class='text-muted'>
                    <i class='bi bi-info-circle me-1'></i> Please enter your track ID
                </p>
                <div class='track-input'>
                    <div class='input-group'>
                        <input type="text" name="tracking_no" class="form-control form-control-lg"
                            placeholder="Track ID" value='' required="">
                        <button type="submit" class="btn " style="background: #fb7405; color: #fff;">
                            Track & Trace
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <h1 class='display-6'>YOUR TRACK DETAIL</h1>

        <hr>

        <div class='my-5'>


            <div class='text-center text-uppercase'>

                <h1 class='display-4'>
                    No order placed
                </h1>

                <img src='{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/img/shipping.png') }}'
                    class='img-fluid' width='440px'>

            </div>


        </div>

    </section>
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
