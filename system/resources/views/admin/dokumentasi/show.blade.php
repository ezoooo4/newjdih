@extends('template.admin')

@section('content')
<div class="container px-4 mx-5 mt-5">
    <div class="card mb-4">
        <div class="card-header">
            <h3 class="card-title">Detail Dokumentasi</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Nama Kegiatan</th>
                    <td>{{ $dokumentasi->nama_kegiatan }}</td>
                </tr>
                <tr>
                    <th>Tanggal Kegiatan</th>
                    <td>{{ $dokumentasi->tgl_kegiatan }}</td>
                </tr>
                <tr>
                    <th>Kategori</th>
                    <td>{{ $dokumentasi->kategori }}</td>
                </tr>
                <tr>
                    <th>Foto Dokumentasi</th>
                    <td>
                        @if ($dokumentasi->foto && file_exists(public_path('storage/' . $dokumentasi->foto)))
                            <a href="{{ asset('storage/' . $dokumentasi->foto) }}" target="_blank" class="btn btn-sm btn-info">
                                Lihat Foto
                            </a>
                        @else
                            <span class="text-muted">Tidak ada foto</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Status Dokumentasi</th>
                    <td>{{ $dokumentasi->status_dokumentasi }}</td>
                </tr>
                <tr>
                    <th>URL</th>
                    <td>
                        <a href="{{ $dokumentasi->url }}" target="_blank">{{ $dokumentasi->url }}</a>
                    </td>
                </tr>
            </table>

            <a href="{{ url('admin/dokumentasi') }}" class="btn btn-secondary mt-3">Kembali</a>
        </div>
    </div>
</div>
@endsection
