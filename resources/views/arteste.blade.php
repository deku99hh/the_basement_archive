<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaustav Banerjee | The Basement</title>
    @vite(['resources/css/origin.css'])
    <!-- <link rel="stylesheet" href="artist.css"> -->
    <link rel="icon" href="{{ asset('assets/logo.png') }}">

    <style>

        .section-title {
            text-align: center;
            font-size: 2rem;
            color: #1e293b;
            margin-bottom: 2rem;
            font-family: "mangaFont", Arial, Helvetica, sans-serif;
            padding-left: 93px;
        }
        
        /* ==========================================================================
        Artist Profile Header
        ========================================================================== */
        .profile-hero {
            padding: 2.5rem 6% 1rem;
            display: flex;
            justify-content: center;
        }

        .profile-card {
            background-color: #ffffff;
            border-radius: 18px;
            padding: 2rem;
            width: 100%;
            max-width: 900px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.06);
            border: 1px solid #e5e7eb;
        }

        .profile-header-top {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            flex-wrap: wrap;
        }

        .profile-avatar {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #4288ff;
            box-shadow: 0 4px 10px rgba(66, 136, 255, 0.2);
        }

        .profile-meta {
            flex: 1;
            min-width: 250px;
        }

        .profile-name {
            font-size: 1.8rem;
            color: #0f172a;
            margin-bottom: 0.4rem;
        }

        .profile-bio {
            font-size: 0.95rem;
            color: #475569;
            line-height: 1.5;
        }

        /* Add Work (+) Button */
        .profile-action {
            display: flex;
            align-items: center;
        }

        .add-work-btn {
            background-color: #4288ff;
            background-image: linear-gradient(135deg, #4288ff, #1369ff);
            color: #ffffff;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 18px;
            border-radius: 12px;
            font-weight: bold;
            font-size: 0.95rem;
            box-shadow: 0 4px 12px rgba(19, 105, 255, 0.3);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .add-work-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(19, 105, 255, 0.4);
        }

        .plus-icon {
            font-size: 1.4rem;
            line-height: 1;
        }

        /* Social & Buy Me A Coffee Chips */
        .profile-socials {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 1.5rem;
            padding-top: 1.2rem;
            border-top: 1px solid #f1f5f9;
        }

        .social-chip {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            color: #334155;
            transition: all 0.2s ease;
        }

        .social-chip img {
            width: 16px;
            height: 16px;
        }

        .social-chip:hover {
            background: #e2e8f0;
            transform: translateY(-1px);
        }

        .bmc-chip {
            background: #fffbeb;
            border-color: #fde68a;
            color: #b45309;
        }

        .bmc-chip:hover {
            background: #fef3c7;
        }

        /* ==========================================================================
        Artist Works Section (Pinterest Style)
        ========================================================================== */
        .artist-works-section {
            padding: 2rem 5% 4rem;
        }

        .section-heading-wrap {
            display: flex;
            align-items: baseline;
            justify-content: center;
            gap: 10px;
            margin-bottom: 2rem;
        }

        .works-count {
            color: #64748b;
            font-size: 0.95rem;
            font-weight: bold;
            position: relative;
            top: 22px;
            right: 75px;
        }

        /* ==========================================================================
        Upload Modal (Pure CSS with :target)
        ========================================================================== */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(4px);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 2000;
            padding: 20px;
        }

        .modal-overlay:target {
            display: flex;
        }

        .modal-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 24px;
            width: 100%;
            max-width: 440px;
            position: relative;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
        }

        .modal-close {
            position: absolute;
            top: 14px;
            right: 16px;
            font-size: 1.6rem;
            color: #64748b;
            line-height: 1;
        }

        .modal-card h3 {
            margin-bottom: 6px;
            color: #0f172a;
        }

        .modal-card p {
            font-size: 0.88rem;
            color: #64748b;
            margin-bottom: 16px;
        }

        .upload-form {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .upload-form label {
            font-size: 0.85rem;
            font-weight: 600;
            color: #334155;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .upload-form input {
            padding: 8px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 0.9rem;
        }

        .submit-work-btn {
            background: #0e5feb;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            padding: 10px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 6px;
        }

        /* ==========================================================================
        Mobile Responsive Adjustments
        ========================================================================== */
        @media (max-width: 768px) {
            .profile-hero {
                padding: 1.5rem 4% 0.5rem;
            }

            .profile-header-top {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
            }

            .profile-socials {
                justify-content: center;
            }

            .profile-action {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>

<body>

    <!-- Header الموحد -->
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
        <!-- Artist Profile Header Card -->
        <section class="profile-hero">
            <div class="profile-card">
                <div class="profile-header-top">
                    <img class="profile-avatar" src="https://i.sstatic.net/XDaUk.jpg?s=256" alt="Kaustav Banerjee">

                    <div class="profile-meta">
                        <h1 class="profile-name">Kaustav Banerjee</h1>
                        <p class="profile-bio">
                            Digital Illustrator & 3D Artist. Big fan of Kagurabachi, dark fantasy themes, and character
                            design.
                        </p>
                    </div>

                    <!-- Add Work CTA (+) Button -->
                    <div class="profile-action">
                        <a href="" class="add-work-btn" title="Add New Work">
                            <span class="plus-icon">+</span>
                            <span class="btn-text">Add Work</span>
                        </a>
                    </div>
                </div>

                <!-- Social & Support Links -->
                <div class="profile-socials">
                    <a href="https://instagram.com" target="_blank" rel="noopener" class="social-chip"
                        title="Instagram">
                        <img src="https://www.svgrepo.com/show/521711/instagram.svg" alt="Instagram">
                        <span>Instagram</span>
                    </a>
                    <a href="https://x.com" target="_blank" rel="noopener" class="social-chip" title="X / Twitter">
                        <img src="https://www.svgrepo.com/show/94588/twitter-black-shape.svg" alt="Twitter">
                        <span>Twitter</span>
                    </a>
                    <a href="https://youtube.com" target="_blank" rel="noopener" class="social-chip" title="YouTube">
                        <img src="https://www.svgrepo.com/show/513089/youtube-168.svg" alt="YouTube">
                        <span>YouTube</span>
                    </a>
                    <a href="https://buymeacoffee.com" target="_blank" rel="noopener" class="social-chip bmc-chip"
                        title="Buy Me a Coffee">
                        <img src="https://www.svgrepo.com/show/447155/coffee.svg" alt="Buy Me a Coffee">
                        <span>Buy Me a Coffee</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Artist's Dedicated Works Section -->
        <section class="artist-works-section">
            <div class="section-heading-wrap">
                <h2 class="section-title">Artworks</h2>
                <span class="works-count">4 creations</span>
            </div>

            <div class="cardSection">
                <!-- Single Work Card: الصورة توديك لصفحة العمل، والاسم تحته فقط -->
                <div class="work">
                    <div class="work-img">
                        <a href="/work/101">
                            <img loading="lazy" src="{{ asset('assets/poster1.jpg') }}" alt="Artwork 1">
                        </a>
                    </div>
                    <div class="work-info">
                        <h2 class="work-title">
                            <a href="/work/101">Chihiro Awakening</a>
                        </h2>
                    </div>
                </div>

                <div class="work">
                    <div class="work-img">
                        <a href="/work/102">
                            <img loading="lazy" src="{{ asset('assets/poster1.jpg') }}" alt="Artwork 2">
                        </a>
                    </div>
                    <div class="work-info">
                        <h2 class="work-title">
                            <a href="/work/102">The Black Goldfish</a>
                        </h2>
                    </div>
                </div>

                <div class="work">
                    <div class="work-img">
                        <a href="/work/103">
                            <img loading="lazy" src="{{ asset('assets/poster1.jpg') }}" alt="Artwork 3">
                        </a>
                    </div>
                    <div class="work-info">
                        <h2 class="work-title">
                            <a href="/work/103">Cloud Gouger Clashes</a>
                        </h2>
                    </div>
                </div>

                <div class="work">
                    <div class="work-img">
                        <a href="/work/104">
                            <img loading="lazy" src="{{ asset('assets/poster1.jpg') }}" alt="Artwork 4">
                        </a>
                    </div>
                    <div class="work-info">
                        <h2 class="work-title">
                            <a href="/work/104">Char & Chihiro</a>
                        </h2>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer الأصلي -->
    <footer>
        <div class="cornar">Read kagurabachi</div>
        <div class="centerd_links">
            <a href="/">Home</a>
            <a href="/events">Events</a>
            <a href="/works">Works</a>
            <a href="/artists">Artists</a>
            <a href="/guestbook">Guestbook</a>
        </div>
        <div class="lastIcons">
            <a href="https://x.com/BachiBasement" target="_blank"><img
                    src="https://www.svgrepo.com/show/94588/twitter-black-shape.svg" width="33" alt="X"></a>
            <a href="https://www.youtube.com/@KamunabiBasement" target="_blank"><img
                    src="https://www.svgrepo.com/show/513089/youtube-168.svg" width="33" alt="YouTube"></a>
            <a href="https://github.com/deku99hh" target="_blank"><img
                    src="https://www.svgrepo.com/show/513007/tumblr-181.svg" width="33" alt="GitHub"></a>
        </div>
        <p class="coperite">
            <a href="https://github.com/deku99hh">© 2026 copyright: deku99hh</a>
        </p>
    </footer>

</body>

</html>