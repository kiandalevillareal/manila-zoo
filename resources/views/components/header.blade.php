<div class="header">
    <div class="header__list">
        <ul>
            <li>
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active--option' : ''}}" >Home</a>
            </li>
            <li>
                <a href="{{ route('guidelines') }}" class="{{ request()->routeIs('guidelines') ? 'active--option' : ''}}" >Guidelines</a>
            </li>
            <li>
                <a href="{{ route('tickets') }}" class="{{ request()->routeIs('tickets') ? 'active--option' : ''}}" >Tickets</a>
            </li>
            <li>
                <div onclick="location.href='{{ route('home') }}'">
                    <img src="{{Vite::asset('resources/images/logo.png')}}" alt="">
            </li>
            <li>
                <a href="{{ route('events') }}" class="{{ request()->routeIs('events') ? 'active--option' : ''}}" >Events</a>
            </li>
            <li>
                <a href="{{ route('animals') }}" class="{{ request()->routeIs('animals') ? 'active--option' : ''}}" >Animals</a>
            </li>
            <li>
                <a href="{{ route('plants') }}" class="{{ request()->routeIs('plants') ? 'active--option' : ''}}" >Plants</a>
            </li>
        </ul>
    </div>
</div>

<script src="{{Vite::asset('resources/js/header.js')}}"></script>
