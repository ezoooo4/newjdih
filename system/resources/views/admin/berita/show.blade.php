@extends('template.admin')

@section('content')
<div class="container px-4 mx-5 mt-5">
    <div class="card mb-4">
        <div class="card-header">
            <h3 class="card-title">Detail Berita</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Judul Berita</th>
                        <td>{{ $berita->judul_berita }}</td>
                    </tr>
                    <tr>
                        <th>Isi Berita</th>
                        <td>{{ $berita->isi_berita }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Berita</th>
                        <td>{{ $berita->tgl_berita }}</td>
                    </tr>
                    <tr>
                        <th>Foto Berita</th>
                        <td>
                            @if($berita->foto_berita)
                                <img src="{{ asset('storage/' . $berita->foto_berita) }}" width="200">
                            @else
                                Tidak ada gambar
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Pembuat Berita</th>
                        <td>{{ $berita->pembuat_berita }}</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ url('admin/berita') }}" class="btn btn-secondary mt-3">Kembali</a>
        </div>
    </div>
</div>
@endsection
