<x-layout>

    <x-slot:heading>
        {{ $event->event_name }} | The Basement
    </x-slot:heading>

    <x-slot:style>
        <style>
            .section-title {
                text-align: center;
                font-size: 2rem;
                color: #1e293b;
                margin-bottom: 2rem;
                font-family: "mangaFont", Arial, Helvetica, sans-serif;
            }

            /* ==========================================================================
            Event Showcase Header
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
                align-items: flex-start;
                gap: 2rem;
                flex-wrap: wrap;
            }

            .event-poster-img {
                width: 220px;
                aspect-ratio: 16 / 9;
                border-radius: 12px;
                object-fit: cover;
                border: 2px solid #4288ff;
                box-shadow: 0 4px 12px rgba(66, 136, 255, 0.25);
            }

            .profile-meta {
                flex: 1;
                min-width: 250px;
            }

            .event-badge-container {
                margin-bottom: 0.6rem;
            }

            .status-badge {
                display: inline-block;
                padding: 4px 12px;
                border-radius: 20px;
                font-size: 0.75rem;
                font-weight: 800;
                text-transform: uppercase;
                letter-spacing: 0.5px;
            }

            .status-ongoing {
                background-color: #dcfce7;
                color: #15803d;
                border: 1px solid #bbf7d0;
            }

            .status-done {
                background-color: #f1f5f9;
                color: #64748b;
                border: 1px solid #e2e8f0;
            }

            .profile-name {
                font-size: 1.8rem;
                color: #0f172a;
                margin-bottom: 0.5rem;
            }

            .profile-bio {
                font-size: 0.95rem;
                color: #475569;
                line-height: 1.6;
            }

            .event-links {
                display: flex;
                gap: 12px;
                margin-top: 1.5rem;
                padding-top: 1.2rem;
                border-top: 1px solid #f1f5f9;
            }

            .external-link-btn {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                background-color: #4288ff;
                color: #ffffff;
                padding: 8px 16px;
                border-radius: 10px;
                font-weight: 600;
                font-size: 0.85rem;
                transition: background-color 0.2s ease;
            }

            .external-link-btn:hover {
                background-color: #2563eb;
            }

            /* ==========================================================================
            Event Works Grid
            ========================================================================== */
            .artist-works-section {
                padding: 2rem 5% 4rem;
            }

            .section-heading-wrap {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
                margin-bottom: 2rem;
            }

            .works-count {
                color: #64748b;
                font-size: 0.95rem;
                font-weight: bold;
                background: #f1f5f9;
                padding: 2px 10px;
                border-radius: 12px;
            }

            .work-artist-tag {
                font-size: 0.8rem;
                color: #4288ff;
                font-weight: 700;
                margin-top: 4px;
                display: block;
            }

            @media (max-width: 768px) {
                .profile-header-top {
                    flex-direction: column;
                    align-items: center;
                    text-align: center;
                }

                .event-poster-img {
                    width: 100%;
                    max-width: 320px;
                }

                .event-links {
                    justify-content: center;
                }
            }
        </style>
    </x-slot:style>

    <section class="events-section">
        <!-- Event Header Card -->
        <section class="profile-hero">
            <div class="profile-card">
                <div class="profile-header-top">
                    <img class="event-poster-img" src="{{ asset($event->poster_path ?? 'assets/jujitsu.jpg') }}" alt="{{ $event->event_name }}">

                    <div class="profile-meta">
                        <div class="event-badge-container">
                            <span class="status-badge {{ $event->event_status === 'ongoing' ? 'status-ongoing' : 'status-done' }}">
                                {{ $event->event_status }}
                            </span>
                        </div>

                        <h1 class="profile-name">{{ $event->event_name }}</h1>
                        <p class="profile-bio">
                            {{ $event->event_about_text }}
                        </p>
                    </div>
                </div>

                @if($event->link)
                    <div class="event-links">
                        <a href="{{ $event->link }}" target="_blank" rel="noopener" class="external-link-btn">
                            Visit Event Details &rarr;
                        </a>
                    </div>
                @endif
            </div>
        </section>

        <!-- Associated Works Section -->
        <section class="artist-works-section">
            <div class="section-heading-wrap">
                <h2 class="section-title">Submissions</h2>
                <span class="works-count">{{ $event->works->count() }} works</span>
            </div>

            <div class="cardSection">
                @forelse($event->works as $work)
                    <div class="work">
                        <div class="work-img">
                            <a href="/work/{{ $work->id }}">
                                <img loading="lazy" src="{{ asset($work->poster_path) }}" alt="{{ $work->work_name }}">
                            </a>
                        </div>
                        <div class="work-info">
                            <h2 class="work-title">
                                <a href="/work/{{ $work->id }}">{{ $work->work_name }}</a>
                            </h2>
                            @if($work->artist)
                                <a href="/artist/{{ $work->artist->id }}" class="work-artist-tag">
                                    by {{ $work->artist->artist_name }}
                                </a>
                            @endif
                        </div>
                    </div>
                @empty
                    <p style="text-align: center; color: #64748b; grid-column: 1 / -1;">No submissions yet for this event.</p>
                @endforelse
            </div>
        </section>
    </section>

</x-layout>