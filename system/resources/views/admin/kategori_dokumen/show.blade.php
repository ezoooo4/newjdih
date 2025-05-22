@extends('template.admin')

@section('content')
<div class="container px-4 mx-5 mt-5">
    <div class="card mb-4">
        <div class="card-header">
            <h3 class="card-title">Detail Kategori Dokumen</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Nama Kategori</th>
                        <td>{{ $kategori->nama_kategori }}</td>
                    </tr>
                    <tr>
                        <th>Deskripsi</th>
                        <td>{{ $kategori->deskripsi }}</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ url('admin/kategori_dokumen') }}" class="btn btn-secondary mt-3">Kembali</a>
        </div>
    </div>
</div>
@endsection
