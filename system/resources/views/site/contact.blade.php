<x-app>
    <style>
        /* Banner untuk halaman kontak */
        .hero-banner {
            position: relative;
            width: 100%;
            height: 300px;
            background-image: url('{{ url("public/landing/assets/images/bgkontak.jpg") }}');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 40px;
        }

        .hero-banner::before {
            content: "";
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .hero-banner h1 {
            position: relative;
            color: #fff;
            font-size: 40px;
            font-weight: bold;
            text-align: center;
        }

        .contact-section {
            max-width: 1200px;
            margin: 0 auto 60px auto;
            padding: 0 20px;
        }

        .contact-box,
        .contact-form,
        .contact-info,
        .contact-map {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }

        .contact-form form {
            display: grid;
            gap: 20px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1rem;
        }

        .contact-form button {
            background-color: orange;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color: darkorange;
        }

        .contact-map iframe {
            width: 100%;
            height: 400px;
            border: 0;
            border-radius: 12px;
        }

        .contact-info table td:first-child {
            font-weight: bold;
            width: 100px;
        }

        .contact-info table a {
            color: #1a56db;
            text-decoration: none;
        }

        .contact-info table a:hover {
            text-decoration: underline;
        }
    </style>

    <!-- Banner Judul -->
    <div class="hero-banner">
        <h1>HUBUNGI KAMI</h1>
    </div>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <section class="contact-section">
        <!-- Notifikasi -->
        @if(session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: '{{ session('success') }}',
                    confirmButtonColor: '#1a56db'
                });
            </script>
        @endif

        @if(session('error'))
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops!',
                    text: '{{ session('error') }}',
                    confirmButtonColor: '#d33'
                });
            </script>
        @endif
            <!-- Peta -->
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6292.922946030224!2d109.98122521976131!3d-1.8447610727823465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e051843e122a29b%3A0x7dc929a137c9dc5e!2sKantor%20Bupati%20Ketapang!5e0!3m2!1sid!2sid!4v1749878321866!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- Form Kontak -->
        <div class="contact-form">
            <form action="{{ route('kontak.kirim') }}" method="POST">
                @csrf

                <input type="text" name="nama" placeholder="Masukkan nama anda" value="{{ old('nama') }}" required>
                @error('nama') <small style="color:red;">{{ $message }}</small> @enderror

                <input type="email" name="email" placeholder="Masukkan alamat email anda" value="{{ old('email') }}" required>
                @error('email') <small style="color:red;">{{ $message }}</small> @enderror

                <input type="text" name="no_hp" placeholder="Masukkan nomor handphone anda" value="{{ old('no_hp') }}" required>
                @error('no_hp') <small style="color:red;">{{ $message }}</small> @enderror

                <input type="text" name="instansi" placeholder="Masukkan nama instansi atau perorangan" value="{{ old('instansi') }}">
                @error('instansi') <small style="color:red;">{{ $message }}</small> @enderror

                <textarea name="pesan" rows="5" placeholder="Tulis pertanyaan atau saran anda di sini" required>{{ old('pesan') }}</textarea>
                @error('pesan') <small style="color:red;">{{ $message }}</small> @enderror

                {{-- <input type="text" name="captcha" placeholder="Mohon ketikkan captcha" required>
                @error('captcha') <small style="color:red;">{{ $message }}</small> @enderror --}}

                <button type="submit">Kirim</button>
            </form>
        </div>

        <!-- Informasi Kontak -->
        <div class="contact-info">
            <h3>Gedung Kantor Bupati Ketapang</h3>
            <p style="margin-bottom: 20px;">Jl. Jend. Sudirman No.37, Mulia Baru, Kec. Delta Pawan, Kabupaten Ketapang, Kalimantan Barat 78811</p>

            <table>
                <tr>
                    <td>Email</td>
                    <td>: <a href="mailto:setda@gmail.com">setda@gmail.com</a></td>
                </tr>
                <tr>
                    <td>Website</td>
                    <td>: <a href="https://jdih.ketapang.go.id/" target="_blank">https://jdih.ketapang.go.id/</a></td>
                </tr>
                <tr>
                    <td>Instagram</td>
                    <td>: <a href="https://www.instagram.com/informasiketapang" target="_blank">@informasiketapang</a></td>
                </tr>
            </table>
        </div>

        
    </section>
</x-app>
