<x-app>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #fff;
            margin: 0;
        }

        /* Tambahan banner background untuk judul */
        .hero-banner {
            position: relative;
            width: 100%;
            height: 300px;
            background-image: url('{{ url("public/landing/assets/images/bgdokumen.jpg") }}');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
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
        }
    </style>

    <!-- Banner Judul -->
    <div class="hero-banner">
        <h1>DAFTAR JENIS  <span style="color: orange;">DOKUMEN</span></h1>
    </div>

    <!-- Sisa kode tidak diubah -->
    <div class="container mt-5 p-5 mb-5">
        <div class="card shadow p-4 rounded-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-rounded" id="datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Dokumen</th>
                                <th>judul</th>
                                <th>Nomo Dokumen</th>
                                <th>Tahun</th>
                                <th>Status</th>
                                <th>Lihat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dokumen as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->nama_dokumen }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->no_dokumen }}</td>
                                    <td>{{ $item->tahun }}</td>
                                    <td>{{ $item->status}}</td>
                                    <td>
                                        <a href="{{ route('dokumen.show', $item->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fa fa-eye"></i> Detail
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app>
