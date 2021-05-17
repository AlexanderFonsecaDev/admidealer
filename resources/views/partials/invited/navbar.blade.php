<!-- Menu -->
<nav id="menu">
    <h2>Menu</h2>
    <ul>
        <li><a href="{{ route('start') }}" class="active">Home</a></li>

        <li><a href="{{ route('vehicles') }}">Vehicles</a></li>

        <li>
            <a href="#" class="dropdown-toggle">About</a>

            <ul>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('faq') }}">FAQ</a></li>
                <li><a href="{{ route('terms') }}">Terms</a></li>
            </ul>
        </li>
        <li><a href="{{ route('contact') }}">Contact Us</a></li>
    </ul>
</nav>
