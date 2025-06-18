<!doctype html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

@php
    $userData = App\Models\User::find(1);
@endphp

<head>

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
    <link rel='stylesheet' href='{{ asset('frontend/uss-core/assets/vendor/toastr/toastr.min.css') }}' data-rc='toastr'>
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

    <link rel="stylesheet" href="{{ asset('frontend/assets/style.css') }}" />

    {{-- Bootstrap CDN --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">

    <!-- UniIcon CDN Link  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    {{-- Fontawesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <style>
        #map {
            height: 350px;
            width: 100%;
        }

        .outer-border-table {
            border: 1px solid #dee2e6;
            border-collapse: collapse;
        }

        .outer-border-table th,
        .outer-border-table td {
            border: none;
        }


        /* Hide vertical layout on large screens */
        .vertical-table {
            display: none;
        }

        /* Show vertical layout on small screens only */
        @media (max-width: 767.98px) {
            .horizontal-table {
                display: none;
            }

            .vertical-table {
                display: block;
            }

            .vertical-table .table {
                border: 1px solid #dee2e6 !important;
                border-collapse: separate !important;
                border-spacing: 0 !important;
            }

            .vertical-table th,
            .vertical-table td {
                border: none !important;
            }
        }
    </style>

    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = '4cf261b628972c346dac086f5a57512bfa781ffa';
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
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top"
        style="background: rgba(14, 29, 52, 0.9);padding: 3px 0 0;">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('frontend/uss-modules/uss-dashboard-main/ud-assets/images/general/73e7b8fd6ac7ac991ddc2a5b80e871576bb8c778.png') }}"
                    alt="">

            </a>

            {{-- <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i> --}}
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
    </header>

    <!-- End Header -->
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center"
            style="background-image: url('{{ asset('frontend/uss-modules/uss-courier/sys-home/assets/img/page-header.jpg') }}'); padding-top: 100px; padding-bottom: 40px;">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Tracking Details</h2>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Breadcrumbs -->

    <div id='main'>
        <div class="container">
            <div class="row">
                <h1 class='display-6'>YOUR TRACK DETAIL</h1>

                <div class="col-12 col-lg-6">
                    <article class="card">
                        <header class="card-header" style="background: #0D0D23"> </header>

                        <div class="card-body">
                            <div class="barcode text-center">
                                <img src="{{ asset('upload/barcode.gif') }}" alt="">
                            </div>

                            <div class="info mt-5">
                                <div class="shipper-info">
                                    <h5>Shipper Information</h5>
                                    <div class="d-flex flex-column">
                                        <span>American Liquidation Deal</span>
                                        <span>204 Austin Rd, Waterbury, CT06207, USA</span>
                                        <span>+1(713)364-9451</span>
                                        <span>americanliquidationdeal@gmail.com</span>
                                    </div>
                                </div>
                                <hr>
                                <div class="receiver-info">
                                    <h5>Receiver Information</h5>
                                    <div class="d-flex flex-column">
                                        <span>Daniel Martin Gould</span>
                                        <span>Cartridge Recycling Uk limited Unit 17, Denbigh Hall Industrial Estate
                                            Bletchley,
                                            Milton Keynes MK3 7QT United Kingdom</span>
                                        <span>+44 7708 014676</span>
                                        <span>info@catridgerecyclinguk.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-12 col-lg-6">
                    <article class="card">
                        <header class="card-header text-white text-uppercase text-center" style="background: #0D0D23">
                            Shipment Status: Pending
                        </header>

                        <div class="card-body">
                            <div class="info mt-3">
                                <h5 class=" border-bottom p-2">Shipment Information</h5>
                                <div class="d-flex flex-column gap-3">
                                    <div>
                                        <span class="font-weight-bold text-dark">Origin:</span>
                                        <span>United States</span>
                                    </div>
                                    <div>
                                        <span class="font-weight-bold text-dark">Package:</span>
                                        <span>20</span>
                                    </div>
                                    <div>
                                        <span class="font-weight-bold text-dark">Status:</span>
                                        <span>Pending</span>
                                    </div>
                                    <div>
                                        <span class="font-weight-bold text-dark">Destination:</span>
                                        <span>United Kingdom</span>
                                    </div>
                                    <div>
                                        <span class="font-weight-bold text-dark">Carrier:</span>
                                        <span>GLOEPRESSFRIGHT</span>
                                    </div>
                                    <div>
                                        <span class="font-weight-bold text-dark">Shipment Mode:</span>
                                        <span>Air Freight</span>
                                    </div>
                                    <div>
                                        <span class="font-weight-bold text-dark">Weight:</span>
                                        <span>52</span>
                                    </div>
                                    <div>
                                        <span class="font-weight-bold text-dark">Carrier Reference No.:</span>
                                        <span>G32DT</span>
                                    </div>
                                    <div>
                                        <span class="font-weight-bold text-dark">Product:</span>
                                        <span>20 Amazon Electronic Pallets</span>
                                    </div>
                                    <div>
                                        <span class="font-weight-bold text-dark">Quantity:</span>
                                        <span>20</span>
                                    </div>
                                    <div>
                                        <span class="font-weight-bold text-dark">Payment Mode:</span>
                                        <span>Bank Transfer</span>
                                    </div>
                                    <div>
                                        <span class="font-weight-bold text-dark">Total Frieght:</span>
                                        <span>1</span>
                                    </div>
                                    <div>
                                        <span class="font-weight-bold text-dark">Expected Delivery Date:</span>
                                        <span>2025-06-17</span>
                                    </div>
                                    <div>
                                        <span class="font-weight-bold text-dark">Departure Time:</span>
                                        <span>10:00am</span>
                                    </div>
                                    <div>
                                        <span class="font-weight-bold text-dark">Pick-up Date:</span>
                                        <span>2025-06-20</span>
                                    </div>
                                    <div>
                                        <span class="font-weight-bold text-dark">Pick-up Time:</span>
                                        <span>11:00am</span>
                                    </div>
                                    <div>
                                        <span class="font-weight-bold text-dark">Comment:</span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                    </article>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <article class="card">
                        <header class="card-header text-white text-uppercase text-center" style="background: #0D0D23">
                            Package
                        </header>

                        <div class="">
                            <!-- Horizontal for Large Screens -->
                            <div class="table-responsive horizontal-table">
                                <table class="table outer-border-table">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Qt</th>
                                            <th>Piece Type</th>
                                            <th>Description</th>
                                            <th>Length(cm)</th>
                                            <th>Width(cm)</th>
                                            <th>Height(cm)</th>
                                            <th>Weight(kg)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>20</td>
                                            <td>Pallet</td>
                                            <td>20 Amazon electronic pallets</td>
                                            <td>122</td>
                                            <td>102</td>
                                            <td>86</td>
                                            <td>251</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Vertical for Small Screens -->
                            <div class="vertical-table">
                                <table class="table outer-border-table">
                                    <tbody>
                                        <tr>
                                            <th>Qt</th>
                                            <td>John Doe</td>
                                        </tr>
                                        <tr>
                                            <th>Piece Type</th>
                                            <td>Pallet</td>
                                        </tr>
                                        <tr>
                                            <th>Description</th>
                                            <td>20 Amazon electronic pallets</td>
                                        </tr>
                                        <tr>
                                            <th>Length(cm)</th>
                                            <td>122</td>
                                        </tr>
                                        <tr>
                                            <th>Width(cm)</th>
                                            <td>102</td>
                                        </tr>
                                        <tr>
                                            <th>Height(cm)</th>
                                            <td>86</td>
                                        </tr>
                                        <tr>
                                            <th>Weight(cm)</th>
                                            <td>251</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="d-md-flex gap-3 px-4 mb-3 flex-wrap mx-auto">
                            <div class="flex-grow-1 py-1">
                                Total Volumetric Weight: 4280.74kg.
                            </div>
                            <div class="flex-grow-1 py-1">
                                Total Volume: 4280.74kg.
                            </div>
                            <div class="flex-grow-1 py-1">
                                Total Actual Weight: 4280.74kg.
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            @if (!$trackingHistoryDetails || !$trackingHistoryDetails->latitude == null)
                <div id="map" class="mt-3"></div>
            @endif

            <div class="row mt-3">

                <div class="col-md-12 col-lg-12">
                    <div id="tracking-pre"></div>
                    <div id="tracking">
                        <div class="text-center tracking-status-intransit" style="background: #0D0D23; color: #fff">
                            <p class="tracking-status text-tight" style="font-weight: bold">Shipment History</p>
                        </div>
                        <div class="tracking-list">

                            @foreach ($travelHistory as $item)
                                <div class="tracking-item">
                                    <div class="tracking-icon status-intransit">
                                        <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true"
                                            data-prefix="fas" data-icon="circle" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                            data-fa-i2svg="">
                                            <path
                                                fill="{{ $item->travel_history_location == $trackingHistoryDetails->travel_history_location ? '#ee5435' : 'currentColor' }}"
                                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                            </path>
                                        </svg>
                                        <!-- <i class="fas fa-circle"></i> -->
                                    </div>
                                    <div class="tracking-date">
                                        {{ $item->travel_history_date }}<span>{{ $item->travel_history_time }}</span>
                                    </div>
                                    <div class="tracking-content">
                                        {{ $item->travel_history_description }}<span>{{ $item->travel_history_location }}</span>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                        <span><img src="{{ asset('frontend/assets/footer-logo.png') }}" alt=""></span>
                    </a>
                    <p>Freight Forwarding, Warehousing, Trucking and 4PL services</p>
                    <div class="social-links d-flex mt-4">
                        <a href="https://twitter.com/" target="_blank" class="twitter"><i
                                class="bi bi-twitter"></i></a>
                        <a href="https://facebook.com/" target="_blank" class="facebook"><i
                                class="bi bi-facebook"></i></a>
                        <a href="https://instagram.com/" target="_blank" class="instagram"><i
                                class="bi bi-instagram"></i></a>
                        <a href="https://linkedin.com/" target="_blank" class="linkedin"><i
                                class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About us</a></li>
                        <li><a href="{{ route('service') }}">Services</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>

                    </ul>
                </div>
                <script src="../code.tidio.co_443/r62u6adhmvl9yycecszohfoenhtharii.js" async></script>
                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>
                        {{ $userData->address }} <br><br>
                        <strong>Phone:</strong> {{ $userData->phone }}<br>
                        <strong>Email:</strong> {{ $userData->web_email }}<br>
                    </p>
                </div>

            </div>
        </div>

        <div class="container mt-4">
            <div class="copyright">
                &copy; Copyright <strong><span>{{ $userData->web_name }}| All rights reserved</span></strong>.
            </div>
        </div>

    </footer>


    <script>
        // Initialize the map
        const map = L.map('map').setView([{{ $trackingHistoryDetails->latitude ?? '' }},
            {{ $trackingHistoryDetails->longitude ?? '' }}
        ], 13); // Default center and zoom

        // Set up the tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Add a marker for each location
        L.marker([{{ $trackingHistoryDetails->latitude ?? '' }}, {{ $trackingHistoryDetails->longitude ?? '' }}])
            .addTo(map)
            .bindPopup(`{{ $trackingHistoryDetails->travel_history_description ?? '' }}`)
            .openPopup();
    </script>

    <script src="main.js"></script>
</body>

</html>
