<x-layout>

    <x-slot:heading>
        The Basement
    </x-slot:heading>

    <section class="hero">
        <div class="hero-text">
            <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="hero-logo">

            <h1 class="heroP1">The Basement</h1>
            <p class="heroP2">
                A group of Bachibros who like to create.
                <span class="sub-caption">welcome to the archive</span>
            </p>
        </div>


        <div class="video-place">
            <a href="{{ filled($events->last()?->link) ? $events->last()->link : url('/event/' . $events->last()?->id) }}"
                target="_blank" class="latest-media-wrapper">
                {{-- <img src="{{ asset($events->last()->poster_path) }}" alt="Latest Work" class="latest-media-item">
                <x-imageORvideo loading="lazy" :type="$work->type"> {{ $work->poster_path }} </x-imageORvideo> --}}
                <x-imageORvideo class="latest-media-item"> {{ $events->last()->poster_path }} </x-imageORvideo>

                <span class="latest-badge">Latest Update</span>
            </a>
        </div>
    </section>


    <section class="section">
        <div class="about">
            <div class="artifact-info">
                <h2 class="artifact-title">The Basement</h2>
                <div>
                    <p class="artifact-desc">
                        The basement is a group of Bachibros who like to create.
                        <br><br>
                        It started during a breakweek for Kagurabachi manga. Some bros wanted to make a fun event
                        for the Kagurabachi online community.
                        <br><br>
                        The basement grew by the passing of time and more events were made thanks to the efforts and
                        hardwork of tens of artists and fans on different social platforms.
                        <br><br>
                        Why is it called the basement, you ask?
                        <br><br>
                        Of course, not because of the kidnapped artists downstairs, <i>haha</i>, we have a very
                        lovely workspace and support eachother like a family.
                        <br>
                        <span class="warning_thread">
                            if you try to spread such information again, the basement WILL find you
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <hr class="section-divider">

    <!-- Events Section (2 Cols on Mobile) -->
    <section id="events">
        <h1 class="section-title">our events</h1>
        <div class="cardSection">
            @forelse ($events as $event)

                <a href="/event/{{ $event->id }}">
                    <div class="work">
                        <div class="work-img">
                            <x-imageORvideo loading="lazy"> {{ $event->poster_path }} </x-imageORvideo>

                        </div>
                        <div class="work-info">
                            <p> {{ $event->event_status }} </p>
                            <h2 class="work-title">{{ $event->event_name }}</h2>
                            <p class="work-desc">{{ $event->event_about_text }}</p>
                        </div>
                    </div>
                </a>

            @empty
                <h1>no events YET!!</h1>
            @endforelse

        </div>
        <div class="center-btn">
            <a class="seeMore" href="/events">see more of our events</a>
        </div>
    </section>

    <hr class="section-divider">

    <!-- Works Section (Pinterest 2 Cols on Mobile) -->
    <section id="works">
        <h1 class="section-title">our latest work</h1>
        <div class="cardSection">

            @forelse ($works as $work)

                <div class="work">
                    <div class="work-img">
                        <a href="/work/{{ $work->id }}">
                            <x-imageORvideo loading="lazy" :type="$work->type"> {{ $work->poster_path }} </x-imageORvideo>

                        </a>
                    </div>
                    <div class="work-info">
                        <h2 class="work-title">{{ $work->work_name }}</h2>
                        <p class="work-desc">
                            {{ $work->work_about_text }}
                            <br>
                            <a href="/artist/{{ $work->author_id }}"
                                class="artist-credit-link">--{{ $work->artist->artist_name }}</a>
                        </p>
                    </div>
                </div>

            @empty
                <h1>no works, YET!!</h1>
            @endforelse

        </div>
        <div class="center-btn">
            {{-- <a class="seeMore" href="/works">see more of our work</a> --}}
        </div>
    </section>

    <hr class="section-divider">


    <section id="artists">
        <h1 class="section-title">our artists</h1>
        <div class="cardSection">

            @forelse ($artists as $artist)

                <div class="work">
                    <a href="/artist/{{ $artist->id }}">
                        <div class="work-img">
                            <img class="personalImg" loading="lazy" src="{{ asset($artist->avatar) }}" alt="Artist Avatar">
                        </div>
                        <div class="work-info">
                            <h2 class="work-title">{{ $artist->artist_name }}</h2>
                            <p class="work-desc">{{ $artist->artist_about_text }}</p>
                        </div>
                    </a>
                </div>


            @empty
                <h1>no artists, YET!!</h1>
            @endforelse

        </div>
        <div class="center-btn">
            <a class="seeMore" href="/artists">see more of our artists</a>
        </div>
    </section>

    <hr class="section-divider">


    <section>
        <div class="manga-header" style="border-radius: 15px;">
            <div class="bg-overlay"
                style="background-image: url('https://jumpg-assets.tokyo-cdn.com/secure/title/100274/title_thumbnail_portrait_list/401607.jpg?hash=0HsgO8u7g6CZPpuEB98p_g&amp;expires=2145884400');">
            </div>
            <div class="content-container">
                <aside class="cover-section">
                    <img src="https://jumpg-assets.tokyo-cdn.com/secure/title/100274/title_thumbnail_portrait_list/401607.jpg?hash=0HsgO8u7g6CZPpuEB98p_g&amp;expires=2145884400"
                        alt="Kagurabachi" class="main-cover">
                </aside>
                <div class="info-section">
                    <h2 class="title">Kagurabachi</h2>
                    <p class="author">Takeru Hokazono</p>
                    <div class="tags">
                        <span class="tag" style="color: white; font-weight: bold;">Teen Plus</span>
                    </div>
                    <div class="summary-box">
                        <h6>Summary</h6>
                        <p class="description">
                            Young Chihiro spends his days training under his famous swordsmith father. One day he
                            hopes to become a great sword-maker himself. The goofy father and the serious son--they
                            thought these days would last forever. But suddenly, tragedy strikes. A dark day soaked
                            in blood. Chihiro and his blade now live only for revenge. Epic sword battle action!
                        </p>
                        <img src="https://jumpg-assets.tokyo-cdn.com/secure/label/475385.webp?hash=Xpub07xewHz-tgHYJ5oyLQ&expires=2145884400"
                            alt="Shonen Jump" class="label-img">
                    </div>
                    <a href="https://mangaplus.shueisha.co.jp/titles/100274" target="_blank">
                        <button class="fav-btn pc-only">+ Add to Favorite</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

</x-layout>