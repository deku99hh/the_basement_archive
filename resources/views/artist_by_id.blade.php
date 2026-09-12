<x-layout>

    <x-slot:heading>
        {{ $artist->artist_name }} | The Basement
    </x-slot:heading>

    <x-slot:style>
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
    </x-slot:style>

    <section class="events-section">
        <div class="eventsGrid">

            <section class="profile-hero">
                <div class="profile-card">
                    <div class="profile-header-top">
                        {{-- <img class="profile-avatar" src="{{ $artist->avatar=='assets/teto.png' ? ('../' . $artist->avatar) : $artist->avatar }}" alt="Kaustav Banerjee"> --}}
                        <x-imageORvideo class="profile-avatar"> {{ $artist->avatar=='assets/teto.png' ? ('../' . $artist->avatar) : $artist->avatar }} </x-imageORvideo>

                        <div class="profile-meta">
                            <h1 class="profile-name">{{ $artist->artist_name }}</h1>
                            <p class="profile-bio">
                                {{ $artist->artist_about_text }}
                            </p>
                        </div>

                        {{-- <div class="profile-action">
                            <a href="" class="add-work-btn" title="Add New Work">
                                <span class="plus-icon">+</span>
                                <span class="btn-text">Add Work</span>
                            </a>
                        </div> --}}
                    </div>

                    <!-- Social & Support Links -->
                    <div class="profile-socials">
                        @if ($artist->instagram)
                            <a href="{{ $artist->instagram }}" target="_blank" rel="noopener" class="social-chip"
                                title="Instagram">
                                <img src="https://www.svgrepo.com/show/521711/instagram.svg" alt="Instagram">
                                <span>Instagram</span>
                            </a>
                        @endif

                        @if ($artist->Twitter)
                            <a href="{{ $artist->Twitter }}" target="_blank" rel="noopener" class="social-chip"
                                title="X / Twitter">
                                <img src="https://www.svgrepo.com/show/94588/twitter-black-shape.svg" alt="Twitter">
                                <span>Twitter</span>
                            </a>
                        @endif

                        @if ($artist->YouTube)
                            <a href="{{ $artist->YouTube }}" target="_blank" rel="noopener" class="social-chip"
                                title="YouTube">
                                <img src="https://www.svgrepo.com/show/513089/youtube-168.svg" alt="YouTube">
                                <span>YouTube</span>
                            </a>
                        @endif

                        @if ($artist->buy_me_a_coffee)
                            <a href="{{ $artist->buy_me_a_coffee }}" target="_blank" rel="noopener"
                                class="social-chip bmc-chip" title="Buy Me a Coffee">
                                <img style="border-radius: 50%;"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAA4CAMAAACfWMssAAAAsVBMVEX/3QD///8AACT/4gD/5QD/4AAAAAAAACL/5wD/6wD/2wD/41IAABQAAA2jkBcAAB7cwQzAqBHIrxAODCKrlxSPfBhoWxyymxM8NCB+bhoAAAbv0QbTuQ7Msw/myglwYxtcUR1BOR+TghhQRh4hHSGGeBl3aBsUESEtKSEmIiFIQB8dGSH/64j/9cr//O399tj/53Tx8vXJxrbh4eK1tbnKysuamp6AgIRhYWg1NUBMTFWGPe99AAAB/ElEQVRIie2X25KiMBBAYy4kshgIIIgwoDiIl9Vd18uM+/8ftjDoGPclrW9TNecJqDp0uukmgH6gp3hS++arwEgHY49IlKSZiqWUoXrJCSVAj3gFxxoTRWHxPIz5dD6UYRzKMpk1qgTFZD7mQRn7med52Uss0xiPYCFJ+KqvtBQcwypEqMiVrOZRFBWVjG0xwznAZKl6SYnofyLEEFfImCXL2+Xx0axIhg1VMZnW7RXPFJMmOEpG+I5FEeGJqT50hBkVKPV8FTco30uRoP2am9bKcN2n5D9of4lTg0gWeJVIleUpYg3IbmKHwxXGBq/pm+CaGm/4zFOZy0pyP6yi1WIdcB6sl9PJPMAlgzQdUZmgghLW3qU56Ec4gzUrDu5qL1agzmkiBvx2Yts2WRsr09E8ykvtbfRzs93+cmrYKNMJ9tpI6Pem17KzgGNFk/GfzWaz7V3YW8Z+6yCldehpHK0EKMaDky4erBKWI/OdN108DUKg6Lnvuvjm+MAXZOqedfHdMU7xFV7r4tk1jdQVsrR2mlhzs9IhVnfi4BW6B9DI2t+8nTUVULGyjjdxb0Ww59/kKMda64Abp51kvQMOY9ieg9oO4M6tOn/dDLy50pkbnI4th9PZAc5GR8EH1gcDN4EutIuJfBV+7OXpI/FaLl8Pj3w7fPMVefb34R+t7yOxsaF4rAAAAABJRU5ErkJggg=="
                                    alt="Buy Me a Coffee">
                                <span>Buy Me a Coffee</span>
                            </a>
                        @endif

                    </div>
                </div>
            </section>

            <section class="artist-works-section">
                <div class="section-heading-wrap">
                    <h2 class="section-title">Artworks</h2>
                    <span class="works-count">{{ $artist->works()->get()->count() }} creations</span>
                </div>

                <div class="cardSection">

                    @foreach($artist->works()->get() as $index => $work)
                                    {{-- <a href="/work/{{ $work->id }}" title="{{ $work->title }}">
                                        <img src="{{ asset($work->poster_path) }}" alt="Preview {{ $index + 1 }}">
                                    </a> --}}

                        <div class="work">
                            <div class="work-img">
                                <a href="/work/{{ $work->id }}">
                                    <x-imageORvideo :type="$work->type"> {{ $work->poster_path }} </x-imageORvideo>
                                </a>
                            </div>
                            <div class="work-info">
                                <h2 class="work-title">
                                    <a href="/work/{{ $work->id }}">{{ $work->work_name }}</a>
                                    <p class="work-desc">{{ $work->work_name }}</p>
                                </h2>
                            </div>
                        </div>

                    @endforeach

                </div>
            </section>

        </div>
    </section>

</x-layout>