@if (Auth::user()->level == 'admin')
    @yield('content')
@else
    <h1>Anda Bukan Admin</h1>
@endif
