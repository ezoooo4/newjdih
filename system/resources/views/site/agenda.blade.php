<x-app>
    <style>
        .judul-banner {
            position: relative;
            width: 100%;
            height: 250px;
            background-image: url('{{ url("public/landing/assets/images/bgagenda.jpg") }}');
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

        .agenda {
            max-width: 1200px;
            margin: 0 auto 40px auto;
            padding: 0 20px;
        }

        .agenda-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #fff;
            padding: 28px;
            margin-bottom: 22px;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .agenda-item .left {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .agenda-item .icon {
            background-color: orange;
            color: #fff;
            border-radius: 12px;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
        }

        .agenda-item .details h3 {
            font-size: 1.25rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
        }

        .agenda-item .details p {
            font-size: 1.1rem;
            color: #555;
            margin: 0;
        }

        .agenda-item .right {
            text-align: right;
        }

        .agenda-item .date {
            font-weight: 700;
            color: orange;
            font-size: 1.3rem;
        }

        .agenda-item .location {
            font-size: 1.1rem;
            color: #666;
            margin-top: 6px;
        }

        .text-muted {
            color: #999;
            text-align: center;
        }
    </style>

    <!-- Judul dengan Background -->
    <div class="judul-banner">
        <h1>Agenda Kegiatan</h1>
    </div>

    <!-- Konten Agenda -->
    <section class="agenda">
        @forelse($agenda as $item)
            <div class="agenda-item">
                <div class="left">
                    <div class="icon">&#128197;</div>
                    <div class="details">
                        <h3>{{ $item->judul_agenda }}</h3>
                        <p>{{ $item->pembuat_agenda }}</p>
                    </div>
                </div>
                <div class="right">
                    <div class="date">{{ \Carbon\Carbon::parse($item->tgl_agenda)->translatedFormat('d F Y') }}</div>
                    <div class="location">{{ $item->tempat_agenda }}</div>
                </div>
            </div>
        @empty
            <div class="text-muted">Tidak ada agenda.</div>
        @endforelse
    </section>
</x-app>
