<x-app>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #fff;
            line-height: 1.6;
        }

        .judul-banner {
            position: relative;
            width: 100%;
            height: 250px;
            background-image: url('{{ url("public/landing/assets/images/bgberita.jpg") }}');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
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

        .container {
            display: flex;
            max-width: 1200px;
            gap: 20px;
            padding: 0 20px;
            margin: 0 auto;
        }

        .main-content {
            flex: 2;
        }

        .article {
            display: flex;
            gap: 20px;
            align-items: flex-start;
            background: #fff;
            margin-bottom: 20px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 15px;
        }

        .article img {
            width: 180px;
            height: 120px;
            object-fit: cover;
            border-radius: 8px;
            flex-shrink: 0;
        }

        .article-details {
            flex: 1;
        }

        .article-details h2 {
            font-size: 1.25rem;
            margin-bottom: 10px;
        }

        .meta {
            color: #777;
            font-size: 0.9rem;
            margin-bottom: 10px;
        }

        .btn {
            display: inline-block;
            background-color: orange;
            color: #fff;
            border: none;
            padding: 10px 15px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn:hover {
            background-color: darkorange;
        }

        .text-muted {
            color: #999;
            text-align: center;
        }
    </style>

    <body>
        <!-- Judul Banner dengan Background -->
        <header>
            <div class="judul-banner">
                <h1>Berita JDIH</h1>
            </div>
        </header>

        <!-- Kontainer Berita -->
        <div class="container">
            <div class="main-content">
                @forelse($berita as $item)
                    <div class="article">
                        @if($item->foto_berita)
                            <img src="{{ asset('system/storage/app/public/' . $item->foto_berita) }}" alt="Gambar {{ $item->judul_berita }}">
                        @else
                            <img src="https://via.placeholder.com/180x120?text=No+Image" alt="Gambar default">
                        @endif
                        <div class="article-details">
                            <h2>{{ $item->judul_berita }}</h2>
                            <p class="meta">&#128100; {{ $item->pembuat_berita }} &nbsp; | &nbsp; &#128197; {{ \Carbon\Carbon::parse($item->tgl_berita)->translatedFormat('d F Y') }}</p>
                            <p>{{ Str::limit(strip_tags($item->isi_berita), 200, '...') }}</p>
                            <a href="{{ url('berita/' . $item->id) }}" class="btn">LIHAT DETIL</a>
                        </div>
                    </div>
                @empty
                    <div class="text-muted">Belum ada berita yang tersedia.</div>
                @endforelse
            </div>
        </div>
    </body>
</x-app>
