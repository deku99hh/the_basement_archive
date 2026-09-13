<x-layout :user="auth()->user()">

    <x-slot:heading>
        Artists | The Basement
    </x-slot:heading>

    <x-slot:style>
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
                /* display: grid; */
                grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
                gap: 24px;
                justify-items: center;
                column-width: 15rem;
                column-gap: normal;

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
    </x-slot:style>


    {{-- <section class="events-hero">
        <div class="events-bar">
            <div class="events-title-wrap">
                <h1 class="page-title">artists</h1>
                <p class="page-subtitle">artists.</p>
            </div>
            <div class="events-action">
                <a href="" class="add-event-btn" title="Add New Event">
                    <span class="plus-icon">+</span>
                    <span class="btn-text">Add artest</span>
                </a>
            </div>
        </div>
    </section> --}}

    <section class="events-section">
        <div class="eventsGrid">

            @forelse ($artists as $artist)

                <div class="work" style="margin: 34px 0; break-inside: avoid;">
                    <a href="/artist/{{ $artist->id }}">
                        <div class="work-img">
                            <img class="personalImg" loading="lazy" src="{{ $artist->avatar }}" alt="Artist Avatar">
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
    </section>

</x-layout>