<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{route('home')}}" class="logo d-flex align-items-center">
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
</header>
