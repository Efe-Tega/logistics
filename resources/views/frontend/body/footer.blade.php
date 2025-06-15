@php
    $userData = App\Models\User::find(1);
@endphp

<footer id="footer" class="footer">

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
                <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                    <span><img src="{{ asset('frontend/assets/footer-logo.png') }}" alt=""></span>
                </a>
                <p>Freight Forwarding, Warehousing, Trucking and 4PL services</p>
                <div class="social-links d-flex mt-4">
                    <a href="https://twitter.com/" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="https://facebook.com/" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://instagram.com/" target="_blank" class="instagram"><i
                            class="bi bi-instagram"></i></a>
                    <a href="https://linkedin.com/" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
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
            &copy; Copyright <strong><span>{{ $userData->web_name }} | All rights reserved</span></strong>.
        </div>

    </div>

</footer>
