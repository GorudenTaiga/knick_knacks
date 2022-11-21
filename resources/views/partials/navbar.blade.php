<nav class="nav justify-content-center">
        <a href="/" class="logo"><span>Knick</span> <span>Knacks</span></a>
        <ul>
            <li><a href="/" class="nav-link active">Home</a></li>
            <li><a href="/product" class="nav-link">Product</a></li>
            <li><a href="/about" class="nav-link">About Us</a></li>
        </ul>
        <ul>
            <li><a href="/cart"><img class="krnjg" src="img/krnjg.png" style="max-width:90px"></a></li>
            <li>
                @auth
                    <a href="/logout" style="font-size: 15px;">{{ Auth::user()->name }}</a>
                @endauth
                @guest
                    <a href="/login">Login</a>
                @endguest
            </li>
        </ul>
    </nav>
