<x-app>
    <style>
        .hero-banner {
            position: relative;
            width: 100%;
            height: 300px;
            background-image: url('{{ url("public/landing/assets/images/bgdokumenshow.jpg") }}');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
        }

        .hero-banner::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .hero-banner h1 {
            position: relative;
            color: #fff;
            font-size: 40px;
            font-weight: bold;
            text-align: center;
            margin: 0;
        }

        .info-box {
            background-color: #fff8dc;
            padding: 24px 28px;
            border-left: 5px solid orange;
            border-radius: 10px 10px 0 0;
            font-weight: bold;
            font-size: 1.4rem;
            color: #333;
        }

        .detail-table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 0 0 10px 10px;
            overflow: hidden;
            font-size: 1.2rem;
        }

        .detail-table tr {
            border-bottom: 1px solid #eee;
        }

        .detail-table td {
            padding: 20px 0;
            vertical-align: top;
        }

        .detail-table td:first-child {
            width: 30%;
            font-weight: bold;
            color: #222;
            padding-left: 28px;
        }

        .detail-table td:nth-child(2)::before {
            content: ":";
            margin-right: 10px;
            color: #999;
        }

        .btn-download {
            padding: 10px 16px;
            border: 1px solid transparent;
            border-radius: 6px;
            font-size: 1.05rem;
            display: inline-flex;
            align-items: center;
            text-decoration: none;
        }

        .btn-orange {
            background-color: #fff3e0;
            border: 1px solid orange;
            color: orange;
        }

        .btn-green {
            background-color: #e8f5e9;
            border: 1px solid #66bb6a;
            color: #2e7d32;
        }

        .btn-download i {
            margin-right: 8px;
        }

        .container-box {
            max-width: 1000px;
            margin: 50px auto;
            background-color: #fdfdfd;
            border-radius: 12px;
            
        }

        .btn-kembali {
            margin-top: 25px;
            background-color: #007bff;
            color: white;
            padding: 14px 28px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            font-size: 1.1rem;
        }

        .btn-kembali:hover {
            background-color: #0056b3;
        }

        .text-muted {
            color: #888;
        }

        .kembali-wrapper {
            display: flex;
            justify-content: flex-start;
            padding: 0 28px 28px 28px;
        }

        body {
            background-color: #fff;
        }
    </style>

    <body>
        <div class="hero-banner">
            <h1>INFORMASI DETIL DOKUMEN</h1>
        </div>

        <div class="container-box">
            <div class="info-box">
                Informasi Detil Dokumen
            </div>

            <table class="detail-table">
                <tr>
                    <td>Asal Dokumen</td>
                    <td>{{ $dokumen->asal_dokumen ?? '-' }}</td>
                </tr>
                <tr>
                    <td>Jenis Dokumen</td>
                    <td>{{ $dokumen->nama_dokumen ?? '-' }}</td>
                </tr>
                <tr>
                    <td>Nomor</td>
                    <td>{{ $dokumen->no_dokumen ?? '-' }}</td>
                </tr>
                <tr>
                    <td>Tahun</td>
                    <td>{{ $dokumen->tahun ?? '-' }}</td>
                </tr>
                <tr>
                    <td>Judul</td>
                    <td>{{ $dokumen->judul ?? '-' }}</td>
                </tr>
                <tr>
                    <td>Tempat Terbit</td>
                    <td>{{ $dokumen->tempat_terbit ?? '-' }}</td>
                </tr>
                <tr>
                    <td>Tanggal Penetapan</td>
                    <td>{{ $dokumen->tgl_penetapan ?? '-' }}</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                         {{ $dokumen->status }}                        
                    </td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td>{{ $dokumen->kategori->nama_kategori ?? '-' }}</td>
                </tr>
                <tr>
                    <td>Bahasa</td>
                    <td>{{ $dokumen->bahasa ?? 'Indonesia' }}</td>
                </tr>
                <tr>
                    <td>File Dokumen</td>
                    <td>
                        @if ($dokumen->file_dokumen)
                            <a href="{{ asset('system/storage/app/public/' . $dokumen->file_dokumen) }}" target="_blank" class="btn-download btn-orange">
                                <i class="bi bi-download"></i> unduh pdf 
                            </a>
                        @else
                            <span class="text-muted">Tidak tersedia</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Unduhan Alternatif</td>
                    <td>
                        @if ($dokumen->link_dokumen)
                            <a href="{{ $dokumen->link_dokumen }}" target="_blank" class="btn-download btn-green">
                                <i class="bi bi-download"></i> Link Eksternal
                            </a>
                        @else
                            <span class="text-muted">Tidak tersedia</span>
                        @endif
                    </td>
                </tr>
            </table>
            <div class="kembali-wrapper">
                <a href="{{ url()->previous() }}" class="btn-kembali">
                    ← Kembali
                </a>
            </div>
        </div>
    </body>
</x-app>
