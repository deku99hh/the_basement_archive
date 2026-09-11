<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Basement</title>
    <link rel="stylesheet" href="../css/origin.css">
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
            <a href="/">Home</a>
            <a href="/events">Events</a>
            <a href="/works">Works</a>
            <a href="/artists">Artists</a>
            <a href="/guestbook">Guestbook</a>
        </nav>

        <!-- Toggle Checkbox -->
        <input class="navIcon mobile" type="checkbox" id="navToggle">
        <label for="navToggle" class="navLabel mobile">
            <span></span>
            <span></span>
            <span></span>
        </label>

        <!-- The 50% Dark Backdrop Overlay (Acts as a Label to close menu on click) -->
        <label for="navToggle" class="navBackdrop"></label>

        <!-- Enhanced Mobile Drawer -->
        <div class="mobileNav">
            <div class="linkBlockA"><a href="/">Home</a></div>
            <div class="linkBlockA"><a href="/events">Events</a></div>
            <div class="linkBlockA"><a href="/works">Works</a></div>
            <div class="linkBlockA"><a href="/artists">Artists</a></div>
            <div class="linkBlockA"><a href="/guestbook">Guestbook</a></div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-text">
                <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="hero-logo">
                <h1 class="heroP1">The Basement</h1>
                <p class="heroP2">
                    A group of Bachibros who like to create.
                    <span class="sub-caption">welcome to the archive</span>
                </p>
            </div>

            <!-- Dynamic Latest Content / Video Place -->
            <div class="video-place">
                <a href="https://www.youtube.com/watch?v=YIkIaV77Upo" target="_blank" class="latest-media-wrapper">
                    <img src="https://i.ytimg.com/vi/YIkIaV77Upo/hq720.jpg" alt="Latest Work" class="latest-media-item">
                    <span class="latest-badge">Latest Update</span>
                </a>
            </div>
        </section>

        <!-- About Section -->
        <section class="BEHERA section wood-bg">
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
                <a href="/event/1">
                    <div class="work">
                        <div class="work-img">
                            <img loading="lazy" src="{{ asset('assets/poster1.jpg') }}" alt="Event poster">
                        </div>
                        <div class="work-info">
                            <h2 class="work-title">kagurabachi</h2>
                            <p class="work-desc">Japanese manga series Kagurabachi</p>
                        </div>
                    </div>
                </a>

                <a href="/event/2">
                    <div class="work">
                        <div class="work-img">
                            <img loading="lazy" src="{{ asset('assets/poster1.jpg') }}" alt="Event poster">
                        </div>
                        <div class="work-info">
                            <h2 class="work-title">kagurabachi</h2>
                            <p class="work-desc">Japanese manga series Kagurabachi</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="center-btn">
                <a class="seeMore" href="/events">see more of our events</a>
            </div>
        </section>

        <hr class="section-divider">

        <!-- Works Section (Pinterest 2 Cols on Mobile) -->
        <section id="works">
            <h1 class="section-title">our work</h1>
            <div class="cardSection">
                <div class="work">
                    <div class="work-img">
                        <a href="/work/1">
                            <img loading="lazy" src="{{ asset('assets/poster1.jpg') }}" alt="Work poster">
                        </a>
                    </div>
                    <div class="work-info">
                        <h2 class="work-title">kagurabachi vol1</h2>
                        <p class="work-desc">
                            Japanese manga series Kagurabachi
                            <br>
                            <a href="/artists/TakeruHokazono" class="artist-credit-link">--Takeru Hokazono</a>
                        </p>
                    </div>
                </div>

                <div class="work">
                    <div class="work-img">
                        <a href="/work/2">
                            <img loading="lazy" src="{{ asset('assets/poster1.jpg') }}" alt="Work poster">
                        </a>
                    </div>
                    <div class="work-info">
                        <h2 class="work-title">kagurabachi vol1</h2>
                        <p class="work-desc">
                            Japanese manga series Kagurabachi
                            <br>
                            <a href="/artists/TakeruHokazono" class="artist-credit-link">--Takeru Hokazono</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="center-btn">
                <a class="seeMore" href="/works">see more of our work</a>
            </div>
        </section>

        <hr class="section-divider">

        <!-- Artists Section -->
        <section id="artists">
            <h1 class="section-title">our artists</h1>
            <div class="cardSection">
                <div class="work">
                    <a href="/artists/Kaustav-Banerjee">
                        <div class="work-img">
                            <img class="personalImg" loading="lazy" src="https://i.sstatic.net/XDaUk.jpg?s=256"
                                alt="Artist Avatar">
                        </div>
                        <div class="work-info">
                            <h2 class="work-title">Kaustav Banerjee</h2>
                            <p class="work-desc">Master's student in Machine Learning.....</p>
                        </div>
                    </a>
                </div>

                <div class="work">
                    <a href="/artists/Kaustav-Banerjee">
                        <div class="work-img">
                            <img class="personalImg" loading="lazy" src="https://i.sstatic.net/XDaUk.jpg?s=256"
                                alt="Artist Avatar">
                        </div>
                        <div class="work-info">
                            <h2 class="work-title">Kaustav Banerjee</h2>
                            <p class="work-desc">Master's student in Machine Learning.....</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="center-btn">
                <a class="seeMore" href="/artists">see more of our artists</a>
            </div>
        </section>

        <hr class="section-divider">

        <!-- Manga Header (Exact Original Section) -->
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
    </main>

    <!-- Original Footer -->
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