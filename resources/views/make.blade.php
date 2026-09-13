<x-layout>

    <x-slot:heading>
        Make | The Basement
    </x-slot:heading>

    <x-slot:style>
        <style>
            .make-container {
                max-width: 900px;
                margin: 2rem auto;
                /* padding: 0 1rem; */
                display: grid;
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .form-box {
                background: #ffffff;
                border-radius: 16px;
                padding: 24px;
                border: 1px solid #e5e7eb;
                box-shadow: 0 4px 14px rgba(0, 0, 0, 0.05);
            }

            .form-title {
                font-size: 1.3rem;
                color: #0f172a;
                margin-bottom: 1.2rem;
                padding-bottom: 0.5rem;
                border-bottom: 2px solid #4288ff;
            }

            .simple-form {
                display: flex;
                flex-direction: column;
                gap: 12px;
            }

            .form-group {
                display: flex;
                flex-direction: column;
                gap: 5px;
            }

            .form-group label {
                font-size: 0.85rem;
                font-weight: 700;
                color: #334155;
            }

            .form-group input,
            .form-group textarea,
            .form-group select {
                padding: 9px 12px;
                border: 1px solid #cbd5e1;
                border-radius: 8px;
                font-size: 0.9rem;
                font-family: inherit;
                outline: none;
                transition: border-color 0.2s;
            }

            .form-group input:focus,
            .form-group textarea:focus,
            .form-group select:focus {
                border-color: #4288ff;
            }

            .btn-submit {
                background: #4288ff;
                background-image: linear-gradient(135deg, #4288ff, #1369ff);
                color: #ffffff;
                border: none;
                border-radius: 8px;
                padding: 10px;
                font-weight: 700;
                font-size: 0.95rem;
                cursor: pointer;
                margin-top: 6px;
                transition: opacity 0.2s;
            }

            .btn-submit:hover {
                opacity: 0.9;
            }

            @media (max-width: 768px) {
                .make-container {
                    grid-template-columns: 1fr;
                    gap: 1.5rem;
                }
            }
        </style>
    </x-slot:style>
    <h2>{{ $usr->artist_name }}</h2>
    <h2>{{ $usr->username }}</h2>

    <div class="make-container">
        <div class="form-box">
            <h2 class="form-title">+ New Work</h2>
            <form action="/addwork" method="POST">
                @csrf

                <div class="form-group">
                    <label> <span style="color: red;">*</span> Work Name</label>
                    <input type="text" name="work_name" value="{{ old('work_name') }}" placeholder="e.g. Enten Drawing"
                        required>
                    @error('work_name')
                        <span style="color: red; display:block; margin-top: 5px;">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label><span style="color: red;">*</span> Description</label>
                    <textarea name="work_about_text" rows="3" placeholder="Short description..."
                        required>{{ old('work_about_text') }}</textarea>
                    @error('work_about_text')
                        <span style="color: red; display:block; margin-top: 5px;">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label> <span style="color: red;">*</span> art</label>
                    <input type="text" name="poster_path" placeholder="link...."required>
                    @error('poster_path')
                        <span style="color: red; display:block; margin-top: 5px;">{{ $message }}</span>
                    @enderror
                </div>

                <div style="color: #334155; display: flex; align-items: center; gap: 23vw; justify-content: center;">
                    <div>
                        <label>image</label>
                        <input type="checkbox" name="image" value="1" {{ old('image') ? 'checked' : '' }}>
                    </div>
                    <div>
                        <label>video</label>
                        <input type="checkbox" name="video" value="1" {{ old('video') ? 'checked' : '' }}>
                    </div>
                </div>

                <div class="form-group">
                    <label>Event (Optional)</label>
                    <select name="event_id">
                        <option value="">None</option>
                        @foreach($events as $event)
                            <option value="{{ $event->id }}" {{ old('event_id') == $event->id ? 'selected' : '' }}>
                                {{ $event->event_name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn-submit">Publish Work</button>
            </form>
        </div>


        @if ($usr->role == 'admin')

            <div class="form-box">
                <h2 class="form-title">+ New Event</h2>
                <form action="/addevent" method="POST" enctype="multipart/form-data" class="simple-form">
                    @csrf

                    <div class="form-group">
                        <label>Event Name</label>
                        <input type="text" name="event_name" placeholder="e.g. Manga Week" required>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="event_about_text" rows="3" placeholder="Event details..." required></textarea>
                    </div>

                    <div class="form-group">
                        <label>Poster</label>
                        <input type="text" name="poster_path" placeholder="link...." required>
                    </div>

                    <div class="form-group">
                        <label>External Link (Optional)</label>
                        <input type="url" name="link" placeholder="https://...">
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select name="event_status">
                            <option value="ongoing">Ongoing</option>
                            <option value="done">Done</option>
                        </select>
                    </div>

                    <button type="submit" class="btn-submit">Create Event</button>
                </form>
            </div>

        @endif
    </div>

</x-layout>