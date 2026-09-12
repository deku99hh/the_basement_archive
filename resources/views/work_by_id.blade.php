<x-layout>

    <x-slot:heading>
        {{ $work->work_name }} | The Basement
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


            img {
                max-width: 50%;
                /* display: flex; */
                /* height: auto; */
                /* display: block; */
                justify-content: center;
            }

            main {
                padding-top: 3.6rem;
                display: flex;
                justify-content: center;
            }
            
        </style>
    </x-slot:style>

    <x-imageORvideo :type="$work->type"> {{ $work->poster_path }} </x-imageORvideo>

</x-layout>