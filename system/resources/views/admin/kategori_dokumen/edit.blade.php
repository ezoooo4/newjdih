@extends('template.admin')

@section('content')
<div class="container px-4 mx-5 mt-5">
    <div class="card mb-4"> 
        <div class="card-header">
            <h3 class="card-title">Edit Kategori Dokumen</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/kategori_dokumen/update', $kategori->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Nama Kategori</th>
                            <td>
                                <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" name="nama_kategori" 
                                    value="{{ old('nama_kategori', $kategori->nama_kategori) }}">
                                @error('nama_kategori')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Deskripsi</th>
                            <td>
                                <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" 
                                    value="{{ old('deskripsi', $kategori->deskripsi) }}">
                                @error('deskripsi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary mt-3">Update</button>
                <a href="{{ url('admin/kategori_dokumen') }}" class="btn btn-secondary mt-3">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
