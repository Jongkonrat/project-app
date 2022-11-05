<header class="p-3 bg-dark text-white">
    <div class="container d-flex flex-wrap">
        <div class="d-flex flex-wrap align-items-center justify-content-start justify-content-lg-start" style= "width: fit-content;">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/home" class="nav-link px-2 text-secondary">Home</a></li>
                <li><a href="/contact" class="nav-link px-2 text-white">Contact</a></li>
                <li><a href="/about" class="nav-link px-2 text-white">About Us</a></li>

            </ul>
        </div>
        <div class="d-flex flex-wrap align-items-center justify-content-end" style="align-items: flex-end; width: fit-content;margin-left: auto;">
            <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form> -->
            @auth
            
            <a href="{{ url('cart') }}" style="border-radius: 5px; padding: 7px; padding-left: 16px; padding-right: 16px;
            background-color: yellow; margin-right: 12px;">Cart</a>
            
            {{auth()->user()->name}}

            <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form> -->
            <div class="text-end" style="margin-left: 75px;">
                <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2" style = "align-items: flex-end;">Logout</a>
            </div>
            @endauth
            @guest
            <div class="text-end">
                <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
                <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
            </div>
            @endguest
        </div>
    </div>
</header>