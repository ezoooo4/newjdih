<x-app>

    <div class="container mt-5 p-5 mb-5">
        <div class="card shadow  p-4" style="padding: 1rem !important;">
            <div class="card-header " >
                <h1 class="text-center">DAFTAR JENIS DOKUMEN <span style="color: #ff6600;">HASIL INTEGRASI</span></h1>
                <p class="text-center">DOKUMEN HUKUM TINGKAT PUSAT</p>
            </div>
            <div class="card-body ">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Dokumen</th>
                                <th>Jumlah</th>
                                <th>Status</th>
                                <th>Lihat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dokumen as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->nama_dokumen }}</td>
                                    <td>1</td> {{-- Atau ganti sesuai logika jumlah --}}
                                    <td>{{ $item->status_dokumen }}</td>
                                    <td>
                                         <a href="{{ route('dokumen.show', $item->id) }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="fa fa-eye"></i> Lihat
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
