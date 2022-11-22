<section>
    <nav>
        <a href="#" class="logo"><span>Knick</span> <span>Knacks</span></a>
        <ul>
            <li><a href="/" class="active">Home</a></li>
            <li><a href="/product">Product</a></li>
            <li><a href="/about">About Us</a></li>
        </ul>
        <ul class="list">
            @auth
            <li><a href="Keranjang.php"><img class="krnjg" src="{{ asset('img/krnjg.png') }}"></a></li>
            <ul class="dropdown">
                <li><a href="#">{{ Auth::user()->name }}</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
            @endauth
            @guest
            <ul class="dropdown">
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
            </ul>
            @endguest
        </ul>
          </nav>
</section>
