<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"/>
                </svg>
            </a>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="/" class="nav-link px-2 text-white">Features</a></li>
                <li><a href="/" class="nav-link px-2 text-white">Pricing</a></li>
                <li><a href="/" class="nav-link px-2 text-white">FAQs</a></li>
                <li><a href="/" class="nav-link px-2 text-white">About</a></li>
            </ul>
            @auth
            {{auth()->user()->name}}
            <button type="button" class="btn btn-info">
                <a href="{{ url('cart') }}" class="btn btn-shopping-cart">Cart</a>
            </button>
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="Search for a product" aria-label="Search">
                    <div class="input-group-append">
                        <button type="submit" name="searchSubmit" value="Search" id="searchImage" class="btn btn-outline-secondary bg-white">
                            <svg-icon name="megnifier-icon" class="btn-icon ng-star-inserted">
                                <svg width="13" height="13" viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.49254 5.30783C8.49254 7.0667 7.0667 8.49254 5.30783 8.49254C3.54897 8.49254 2.12313 7.0667 2.12313 5.30783C2.12313 3.54897 3.54897 2.12313 5.30783 2.12313C7.0667 2.12313 8.49254 3.54897 8.49254 5.30783ZM8.23489 9.73633C7.39581 10.292 6.38962 10.6157 5.30783 10.6157C2.3764 10.6157 0 8.23927 0 5.30783C0 2.3764 2.3764 0 5.30783 0C8.23927 0 10.6157 2.3764 10.6157 5.30783C10.6157 6.3897 10.292 7.39597 9.73621 8.23509L12.6889 11.1878C13.1035 11.6023 13.1035 12.2745 12.6889 12.6891C12.2743 13.1036 11.6022 13.1036 11.1876 12.6891L8.23489 9.73633Z"></path>
                                </svg>
                            </svg-icon>
                        </button>
                    </div>
                </div>
            </form>
            <div class="text-end">
                <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
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