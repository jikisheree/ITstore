<header class=" text-white" style="background-color: hsl(222, 86%, 76%)">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>
            <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/" class="nav-link px-2  text-white" style="font-family: 'Didot'; font-size: 40px; ">Home</a></li>
            </ul>
            @auth
            {{auth()->user()->name}}

            <div class="text-end">
                <a href="{{ url('cart') }}" class="btn btn-light btn-shopping-cart">Cart</a>
                <a href="{{ route('logout.perform') }}" class="btn btn-outline-danger me-2">Logout</a>
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