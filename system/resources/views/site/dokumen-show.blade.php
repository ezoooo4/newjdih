<x-app>
    <div class="container mt-5 mb-5">
        <div class="card shadow">
            <div class="card-header p-5  text-white">
                <h4 class="mb-0">Detail Dokumen</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th width="30%">No Dokumen</th>
                        <td>{{ $dokumen->no_dokumen }}</td>
                    </tr>
                    <tr>
                        <th>Nama Dokumen</th>
                        <td>{{ $dokumen->nama_dokumen }}</td>
                    </tr>
                    <tr>
                        <th>Asal Dokumen</th>
                        <td>{{ $dokumen->asal_dokumen }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Penetapan</th>
                        <td>{{ $dokumen->tgl_penetapan }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Terbit</th>
                        <td>{{ $dokumen->tgl_terbit }}</td>
                    </tr>
                    <tr>
                        <th>Status Dokumen</th>
                        <td>{{ $dokumen->status_dokumen }}</td>
                    </tr>
                    <tr>
                        <th>Deskripsi</th>
                        <td>{{ $dokumen->deskripsi }}</td>
                    </tr>
                    <tr>
                        <th>File Dokumen</th>
                        <td>
                            @if ($dokumen->file_dokumen)
                                <a href="{{ url('system/storage/app/public/' . $dokumen->file_dokumen) }}" target="_blank" class="btn btn-sm btn-success">
                                    <i class="bi bi-file-earmark-text"></i> Lihat File
                                </a>
                            @else
                                <span class="text-muted">Tidak ada file</span>
                            @endif
                        </td>
                    </tr>
                </table>

                <a href="{{ url()->previous() }}" class="btn btn-outline-secondary mt-3">
                    Kembali
                </a>
            </div>
        </div>
    </div>

</x-app>
