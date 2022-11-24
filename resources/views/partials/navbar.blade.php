<section>
    <nav>
        <a href="#" class="logo"><span>Knick</span> <span>Knacks</span></a>
        <ul>
            <li><a href="/" class="active">Home</a></li>
            <li><a href="/product">Product</a></li>
            <li><a href="/about">About Us</a></li>
        </ul>
        @auth
        <ul>
            <li><a href="Keranjang.php"><img class="krnjg" src="{{ asset('img/krnjg.png') }}"></a></li>
            <li><a href="#"><img class="user" src="{{ asset('img/user.png') }}"></a>
              <ul class="dropdown">
                <li><a href="/dashboard">Dashboard</a></li>
                <li><a href="/logout">Logout</a></li>
              </ul>
            </li>
        </ul>
        @endauth
        @guest
        <ul>
            <li><a href="Keranjang.php"><img class="krnjg" src="{{ asset('img/krnjg.png') }}"></a></li>
            <li><a href="#"><img class="user" src="{{ asset('img/user.png') }}"></a>
              <ul class="dropdown">
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
              </ul>
            </li>
        </ul>
        @endguest
    </nav>
</section>
