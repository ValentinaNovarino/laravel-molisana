<header>
    <div id="logo">
        <img src="{{ asset('images/logo-molisana.png')}}" alt="">
    </div>
    <div class="header-menu">
        <ul>
            <li>
                <a class="{{ Request::route()->getName() == 'home' ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
            </li>
            <li>
                <a class="{{ Request::route()->getName() == 'products' ? 'active' : '' }}" href="{{ route('products') }}">Prodotti</a>
            </li>
            <li>
                <a class="{{ Request::route()->getName() == 'news' ? 'active' : '' }}"href="{{ route('news') }}">News</a>
            </li>
        </ul>
    </div>
</header>
