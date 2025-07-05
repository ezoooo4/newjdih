<x-app>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f4f4f4;
            line-height: 1.6;
        }

        .judul-banner {
            position: relative;
            width: 100%;
            height: 250px;
            background-image: url('{{ url("public/landing/assets/images/bgdokumentasi.jpg") }}');
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

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 0 20px;
        }

        .grid-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }

        .card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 20px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-body h2 {
            font-size: 1.4rem;
            margin-bottom: 10px;
            color: #333;
            font-weight: 600;
        }

        .meta {
            color: #777;
            font-size: 1rem;
            margin-bottom: 12px;
        }

        .btn {
            display: inline-block;
            background-color: orange;
            color: #fff;
            border: none;
            padding: 10px 15px;
            margin-top: auto;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .btn:hover {
            background-color: orange;
        }

        .text-muted {
            color: #999;
            text-align: center;
            font-size: 1.1rem;
        }
        body{
            background-color: #fff;
        }
    </style>
    <body>
        
    
    <!-- Judul dengan Background -->
    <div class="judul-banner">
        <h1>Dokumentasi Kegiatan</h1>
    </div>

    <!-- Konten Dokumentasi -->
    <div class="container">
        <div class="grid-content">
            @forelse($dokumentasi as $item)
                <div class="card">
                    <img src="{{ asset('system/storage/app/public/' . $item->foto) }}" alt="Foto {{ $item->nama_kegiatan }}">
                    <div class="card-body">
                        <h2>{{ $item->nama_kegiatan }}</h2>
                        <p class="meta">&#128197; {{ \Carbon\Carbon::parse($item->tgl_kegiatan)->translatedFormat('d F Y') }}</p>
                        @if($item->url)
                            <a href="{{ $item->url }}" target="_blank" class="btn">Lihat Video</a>
                        @else
                            <a href="{{ url('dokumentasi/' . $item->id) }}" class="btn">Lihat Detil</a>
                        @endif
                    </div>
                </div>
            @empty
                <div class="text-muted">Belum ada dokumentasi kegiatan.</div>
            @endforelse
        </div>
    </div>
    </body>
</x-app>
