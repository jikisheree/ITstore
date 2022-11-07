<header class=" text-white" style="background-color: hsl(222, 86%, 76%)">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">           
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <a href="/" class="nav-link px-2  text-blue ml-5" style="font-family: 'Harlow Solid'; font-size: 40px; ">Home</a>
            </ul>
            @auth
            {{auth()->user()->name}}       
            <div class="text-end">
                <a href="{{ url('cart') }}" class="btn btn-light btn-shopping-cart mx-4">Cart</a>
                <a href="{{ route('logout.perform') }}" class="btn btn-outline-danger me-2">Logout</a>
            </div>
            @endauth
            @guest
            <div class="text-end">
                <a href="{{ route('login.perform') }}" class="btn btn-outline-light mx-4">Login</a>
                <a href="{{ route('register.perform') }}" class="btn btn-dark">Sign-up</a>
            </div>
            @endguest
        </div>
    </div>
</header>