@props(['user' => null])

<!DOCTYPE html>
<html lang="en">

{{ $style ?? '' }}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $heading }}</title>
    @vite(['resources/css/origin.css'])
    <link rel="icon" href="{{ asset('assets/logo.png') }}">
</head>

<body>
    <header>
        <div class="left_part_of_the_header part_of_the_header">
            <img src="{{ asset('assets/logo.png') }}" alt="logo" id="logo">
            <h3>The Basement</h3>
        </div>

        <nav class="write_part_of_the_header part_of_the_header pc">
            @if ( $user )
                <a href="/artist/{{ $user->id }}"> 
                    <img src="https://www.svgrepo.com/show/529291/user-rounded.svg" style="height: 34px; padding-right: 0px;">
                    {{ $user->username }}
                </a>
            @endif
            <a href="/">Home</a>
            <a href="/events">Events</a>
            {{-- <a href="/works">Works</a> --}}
            <a href="/artists">Artists</a>
            {{-- <a href="/guestbook">Guestbook</a> --}}
        </nav>

        <input class="navIcon mobile" type="checkbox" id="navToggle">
        <label for="navToggle" class="navLabel mobile">
            <span></span>
            <span></span>
            <span></span>
        </label>

        <label for="navToggle" class="navBackdrop"></label>

        <div class="mobileNav">
            <div class="linkBlockA"><a href="/">Home</a></div>
            <div class="linkBlockA"><a href="/events">Events</a></div>
            <div class="linkBlockA"><a href="/works">Works</a></div>
            <div class="linkBlockA"><a href="/artists">Artists</a></div>
            <div class="linkBlockA"><a href="/guestbook">Guestbook</a></div>
        </div>
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer>
        <div class="cornar">
            Read kagurabachi
        </div>
        <div class="centerd_links">
            <a href="/">Home</a>
            <a href="/events">Events</a>
            <a href="/works">Works</a>
            <a href="/artists">Artists</a>
            <a href="/guestbook">Guestbook</a>
        </div>
        <div class="lastIcons">
            <a href="https://x.com/BachiBasement" target="_blank">
                <img src="https://www.svgrepo.com/show/94588/twitter-black-shape.svg" width="33" alt="Twitter">
            </a>
            <a href="https://www.youtube.com/@KamunabiBasement" target="_blank">
                <img src="https://www.svgrepo.com/show/513089/youtube-168.svg" width="33" alt="YouTube">
            </a>
            <a href="https://github.com/deku99hh" target="_blank">
                <img src="https://www.svgrepo.com/show/513007/tumblr-181.svg" width="33" alt="Tumblr">
            </a>
        </div>
        <p class="coperite">
            <a href="https://github.com/deku99hh">
                © 2026 copyright: deku99hh
            </a>
        </p>
    </footer>

</body>

</html>