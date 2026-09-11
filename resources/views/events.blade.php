<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events | The Basement</title>
    @vite(['resources/css/origin.css'])
    <style>
        /* ==========================================================================
        Events Header & Action Bar
        ========================================================================== */
        .events-hero {
            padding: 2.5rem 6% 1rem;
        }

        .events-bar {
            max-width: 1050px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1.5rem;
            flex-wrap: wrap;
            background: #ffffff;
            padding: 1.8rem 2.2rem;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            border: 1px solid #e2e8f0;
        }

        .page-title {
            font-size: 2rem;
            color: #0f172a;
            margin-bottom: 0.3rem;
        }

        .page-subtitle {
            font-size: 0.95rem;
            color: #64748b;
        }

        .add-event-btn {
            background-color: #4288ff;
            background-image: linear-gradient(135deg, #4288ff, #1369ff);
            color: #ffffff;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 11px 20px;
            border-radius: 12px;
            font-weight: bold;
            font-size: 0.95rem;
            box-shadow: 0 4px 12px rgba(19, 105, 255, 0.3);
            transition: transform 0.2s, box-shadow 0.2s;
            white-space: nowrap;
        }

        .add-event-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(19, 105, 255, 0.4);
        }

        .plus-icon {
            font-size: 1.3rem;
            line-height: 1;
        }

        /* ==========================================================================
        Events Grid & Cards
        ========================================================================== */
        .events-section {
            padding: 1.5rem 6% 4rem;
        }

        .eventsGrid {
            max-width: 1050px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 24px;
            justify-items: center;
        }

        .event-card {
            background: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.06);
            border: 1px solid #e5e7eb;
            display: flex;
            flex-direction: column;
            width: 100%;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .event-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 22px rgba(0, 0, 0, 0.1);
        }

        .event-poster-wrap {
            position: relative;
            width: 100%;
            aspect-ratio: 16 / 9;
            overflow: hidden;
            background: #0f172a;
        }

        .event-poster {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .event-card:hover .event-poster {
            transform: scale(1.03);
        }

        .event-badge {
            position: absolute;
            top: 12px;
            right: 12px;
            background: #10b981;
            color: #ffffff;
            font-size: 0.75rem;
            font-weight: 800;
            padding: 4px 10px;
            border-radius: 6px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .past-badge {
            background: #64748b;
        }

        .event-content {
            padding: 20px;
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .event-date {
            font-size: 0.8rem;
            font-weight: 700;
            color: #0e5feb;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 6px;
            display: block;
        }

        .event-title {
            font-size: 1.3rem;
            color: #0f172a;
            margin-bottom: 8px;
            line-height: 1.3;
        }

        .event-title a:hover {
            color: #0e5feb;
        }

        .event-desc {
            font-size: 0.92rem;
            color: #64748b;
            line-height: 1.5;
            margin-bottom: 18px;
            flex-grow: 1;
        }

        /* Mini Works Preview inside Event Card */
        .event-art-preview {
            background: #f8fafc;
            border: 1px solid #f1f5f9;
            border-radius: 10px;
            padding: 10px 12px;
            margin-bottom: 16px;
        }

        .preview-label {
            display: block;
            font-size: 0.78rem;
            font-weight: 700;
            color: #475569;
            margin-bottom: 8px;
        }

        .preview-thumbs {
            display: flex;
            gap: 8px;
        }

        .preview-thumbs a {
            display: block;
            width: 44px;
            height: 44px;
            border-radius: 6px;
            overflow: hidden;
            border: 1px solid #cbd5e1;
            transition: transform 0.2s, border-color 0.2s;
        }

        .preview-thumbs a:hover {
            transform: scale(1.08);
            border-color: #0e5feb;
        }

        .preview-thumbs img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .event-footer {
            border-top: 1px solid #f1f5f9;
            padding-top: 12px;
            display: flex;
            justify-content: flex-end;
        }

        .view-event-link {
            color: #0e5feb;
            font-size: 0.88rem;
            font-weight: 700;
            transition: transform 0.2s;
        }

        .view-event-link:hover {
            transform: translateX(3px);
        }

        /* ==========================================================================
   Add Event Modal Styling
   ========================================================================== */
        .event-form {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .event-form label {
            font-size: 0.85rem;
            font-weight: 600;
            color: #334155;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .event-form input,
        .event-form textarea {
            padding: 8px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 0.9rem;
            font-family: inherit;
        }

        .submit-event-btn {
            background: #0e5feb;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            padding: 10px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 8px;
            transition: background 0.2s;
        }

        .submit-event-btn:hover {
            background: #094bc0;
        }

        /* ==========================================================================
   Mobile Responsive Rules (2 Columns Grid)
   ========================================================================== */
        @media (max-width: 768px) {
            .events-hero {
                padding: 1.5rem 4% 0.5rem;
            }

            .events-bar {
                padding: 1.2rem;
                flex-direction: column;
                text-align: center;
                gap: 1rem;
            }

            .page-title {
                font-size: 1.6rem;
            }

            .events-section {
                padding: 1rem 3% 3rem;
            }

            /* 2 Columns on Mobile */
            .eventsGrid {
                grid-template-columns: repeat(2, 1fr);
                gap: 10px;
            }

            .event-content {
                padding: 10px;
            }

            .event-title {
                font-size: 0.95rem;
                margin-bottom: 4px;
            }

            .event-desc {
                display: none;
                /* إخفاء الوصف الطويل في الموبايل للحفاظ على المقاس المتناسق */
            }

            .event-date {
                font-size: 0.7rem;
            }

            .preview-thumbs a {
                width: 32px;
                height: 32px;
            }

            .preview-label {
                font-size: 0.7rem;
                margin-bottom: 4px;
            }

            .view-event-link {
                font-size: 0.78rem;
            }
        }
    </style>
    <link rel="icon" href="{{ asset('assets/logo.png') }}">
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
        <!-- Events Control Bar (Title + Add Button) -->
        <section class="events-hero">
            <div class="events-bar">
                <div class="events-title-wrap">
                    <h1 class="page-title">Community Events</h1>
                    <p class="page-subtitle">Collaborative fan projects, art exhibitions, and themed weeks.</p>
                </div>
                <div class="events-action">
                    <a href="" class="add-event-btn" title="Add New Event">
                        <span class="plus-icon">+</span>
                        <span class="btn-text">Add Event</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Events Grid (2 Cols on Mobile) -->
        <section class="events-section">
            <div class="eventsGrid">

                <!-- Event Card 1 -->
                <article class="event-card">
                    <a href="/event/1" class="event-link-wrapper">
                        <div class="event-poster-wrap">
                            <img loading="lazy" src="{{ asset('assets/poster1.jpg') }}" alt="Event Poster" class="event-poster">
                            <span class="event-badge">Active</span>
                        </div>
                    </a>

                    <div class="event-content">
                        <span class="event-date">Oct 12 - Oct 20, 2026</span>
                        <h2 class="event-title">
                            <a href="/event/1">Kagurabachi Fan Expo</a>
                        </h2>
                        <p class="event-desc">
                            A grand celebration marking the manga breakweek. Tens of illustrations, models, and
                            colorings gathered in one place.
                        </p>

                        <!-- Preview Snippet: 2-3 Artworks -->
                        <div class="event-art-preview">
                            <span class="preview-label">Featured Entries:</span>
                            <div class="preview-thumbs">
                                <a href="/work/101" title="Chihiro Awakening">
                                    <img src="{{ asset('assets/poster1.jpg') }}" alt="Preview 1">
                                </a>
                                <a href="/work/102" title="Goldfish Sanctum">
                                    <img src="{{ asset('assets/fish1.jpeg') }}" alt="Preview 2">
                                </a>
                                <a href="/work/103" title="Cloud Gouger">
                                    <img src="{{ asset('assets/fish2.png') }}" alt="Preview 3">
                                </a>
                            </div>
                        </div>

                        <div class="event-footer">
                            <a href="/event/1" class="view-event-link">View All Works &rarr;</a>
                        </div>
                    </div>
                </article>

                <!-- Event Card 2 -->
                <article class="event-card">
                    <a href="/event/2" class="event-link-wrapper">
                        <div class="event-poster-wrap">
                            <img loading="lazy" src="{{ asset('assets/poster1.jpg') }}" alt="Event Poster" class="event-poster">
                            <span class="event-badge past-badge">Concluded</span>
                        </div>
                    </a>

                    <div class="event-content">
                        <span class="event-date">Aug 05, 2026</span>
                        <h2 class="event-title">
                            <a href="/event/2">Swordsmiths Gathering</a>
                        </h2>
                        <p class="event-desc">
                            Focusing on the mystic enchanted blades, forging replicas, and custom blade concepts by our
                            resident artists.
                        </p>

                        <!-- Preview Snippet: 2 Artworks -->
                        <div class="event-art-preview">
                            <span class="preview-label">Featured Entries:</span>
                            <div class="preview-thumbs">
                                <a href="/work/104" title="Magatsumi Tribute">
                                    <img src="{{ asset('assets/poster1.jpg') }}" alt="Preview 1">
                                </a>
                                <a href="/work/105" title="Enten Sheath">
                                    <img src="{{ asset('assets/fish2.png') }}" alt="Preview 2">
                                </a>
                            </div>
                        </div>

                        <div class="event-footer">
                            <a href="/event/2" class="view-event-link">View All Works &rarr;</a>
                        </div>
                    </div>
                </article>

            </div>
        </section>

    </main>

    <!-- Footer الموحد -->
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