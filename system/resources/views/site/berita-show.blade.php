<x-app>
    <style>
        .judul-banner {
            position: relative;
            width: 100%;
            height: 250px;
            background-image: url('{{ url("public/landing/assets/images/bgberitashow.jpg") }}');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 40px;
        }

        .judul-banner::before {
            content: "";
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .judul-banner h1 {
            position: relative;
            color: #fff;
            font-size: 36px;
            font-weight: bold;
            text-align: center;
        }

        .berita-detail {
            max-width: 900px;
            margin: 0 auto 50px auto;
            background: #fff;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
            font-family: 'Poppins', sans-serif;
        }

        .berita-detail img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .berita-detail h2 {
            font-size: 2rem;
            font-weight: bold;
            color: orange;
            margin-bottom: 10px;
        }

        .meta-info {
            font-size: 0.95rem;
            color: #555;
            margin-bottom: 20px;
        }

        .meta-info i {
            margin-right: 5px;
        }

        .berita-detail .isi-berita {
            font-size: 1rem;
            color: #333;
            line-height: 1.8;
        }

        .btn-kembali {
            margin-top: 30px;
        }
        body{
            background-color: #fff;
        }
    </style>
    <body>
        
  
    <!-- Banner Judul dengan Background -->
    <div class="judul-banner">
        <h1>Detail Berita</h1>
    </div>

    <!-- Konten Detail Berita -->
    <div class="berita-detail">
        @if ($berita->foto_berita)
            <img src="{{ asset('system/storage/app/public/' . $berita->foto_berita) }}" alt="Gambar Berita">
        @else
            <img src="https://via.placeholder.com/800x400?text=Tidak+Ada+Gambar" alt="Default Image">
        @endif

        <h2>{{ $berita->judul_berita }}</h2>

        <div class="meta-info">
            <span><i class="fas fa-user"></i> {{ $berita->pembuat_berita }}</span>
            &nbsp; | &nbsp;
            <span><i class="fas fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($berita->tgl_berita)->translatedFormat('d F Y') }}</span>
        </div>

        <div class="isi-berita">
            {!! $berita->isi_berita !!}
        </div>

        <a href="{{ url()->previous() }}" class="btn btn-primary btn-kembali">
            Kembali
        </a>
    </div>

    <!-- Font Awesome untuk ikon -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
      </body>
</x-app>
