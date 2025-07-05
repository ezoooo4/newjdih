@extends('template.admin')

@section('content')
<div class="container px-4 mx-5 mt-5">
    <div class="card mb-4">
        <div class="card-header">
            <h3 class="card-title">Edit Berita</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/berita/update', $berita->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Judul Berita</th>
                            <td>
                                <input type="text" class="form-control @error('judul_berita') is-invalid @enderror" name="judul_berita" value="{{ old('judul_berita', $berita->judul_berita) }}">
                                @error('judul_berita')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Isi Berita</th>
                            <td>
                                <textarea class="form-control @error('isi_berita') is-invalid @enderror" name="isi_berita">{{ old('isi_berita', $berita->isi_berita) }}</textarea>
                                @error('isi_berita')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Tanggal Berita</th>
                            <td>
                                <input type="date" class="form-control @error('tgl_berita') is-invalid @enderror" name="tgl_berita" value="{{ old('tgl_berita', $berita->tgl_berita) }}">
                                @error('tgl_berita')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Foto Berita</th>
                            <td>
                                <input type="file" class="form-control @error('foto_berita') is-invalid @enderror" name="foto_berita">
                                @error('foto_berita')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                @if($berita->foto_berita)
                                    <div class="mt-2">
                                        <img src="{{ asset('system/storage/app/public/' . $berita->foto_berita) }}" width="150">
                                    </div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Pembuat Berita</th>
                            <td>
                                <input type="text" class="form-control @error('pembuat_berita') is-invalid @enderror" name="pembuat_berita" value="{{ old('pembuat_berita', $berita->pembuat_berita) }}">
                                @error('pembuat_berita')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary mt-3">Update</button>
                <a href="{{ url('admin/berita') }}" class="btn btn-secondary mt-3">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
