    <!-- Navbar & Hero Start -->
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('front.home') }}" class="nav-item nav-link {{ (request()->is('/')) ? 'active': ''}}">Home</a>
            <a href="{{ route ('front.about') }}" class="nav-item nav-link {{ (request()->is('about')) ? 'active': ''}}">About</a>
            <a href="{{ route('front.service') }}" class="nav-item nav-link{{ (request()->is('services')) ? 'active': ''}}">Services</a>
            <a href="{{ route('front.package') }}" class="nav-item nav-link{{ (request()->is('packages')) ? 'active': ''}}">packages</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('front.distination') }}" class="dropdown-item">Destination</a>
                    <a href="{{ route('front.booking') }}" class="dropdown-item">Booking</a>
                    <a href="{{ route('front.team') }}" class="dropdown-item">Travel Guides</a>
                    <a href="{{ route('front.testimonial') }}" class="dropdown-item">Testimonial</a>
                </div>
            </div>
            <a href="contact.html" class="nav-item nav-link">Contact</a>
        </div>
        <a href="" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
    </div>

    <!-- Navbar & Hero End -->
