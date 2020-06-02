@if (Auth::check())
    <li style="nav-item justify-content-right">
    <a class="nav-link"  href="{{route('logout')}}">Logout</a>
    </li>
@else
    <li style="nav-item justify-content-right">
        <a class="nav-link"  href="{{route('login')}}">Login</a>
    </li>
@endif

