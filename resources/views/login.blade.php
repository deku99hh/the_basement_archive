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
                /* display: grid; */
                display: flex;
                grid-template-columns: 1fr;
                gap: 2rem;
                justify-content: center;
            }

            .form-box {
                background: #ffffff;
                border-radius: 16px;
                padding: 24px;
                border: 1px solid #e5e7eb;
                box-shadow: 0 4px 14px rgba(0, 0, 0, 0.05);
                width: 53vw;
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
                width: 100%;
            }

            .btn-submit:hover {
                opacity: 0.9;
            }

            @media (max-width: 768px) {
                .form-box {
                    width: 100%;
                }

                .make-container {
                    grid-template-columns: 1fr;
                    gap: 1.5rem;
                }
            }
        </style>
    </x-slot:style>

    <div class="make-container">
        <!-- Work Form -->
        <div class="form-box">

            <h2 class="form-title">login</h2>

            <form action="/login" method="POST">
                @csrf


                <div class="form-group">
                    <label>username</label>
                    <input type="text" name="username" placeholder="username" required>
                </div>

                <div class="form-group">
                    <label>password</label>
                    <input type="password" name="password" placeholder="password" required>
                </div>

                <button type="submit" class="btn-submit">login</button>

            </form>
        </div>
    </div>

</x-layout>