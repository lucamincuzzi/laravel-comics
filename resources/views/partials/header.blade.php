<header>
    <div>
        <img src="{{ Vite::asset('resources/assets/img/dc-logo.png') }}" alt="Logo DC">
        <ul>
            @foreach ($nav_links as $link)
                <li>
                    <a>{{ strtoupper($link) }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</header>
<div class="hero"></div>
