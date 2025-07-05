@extends('template.admin')

@section('content')
<div class="container px-4 mx-5 mt-5">
    <div class="card mb-4">
        <div class="card-header">
            <h3 class="card-title">Edit Dokumentasi</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/dokumentasi/update', $dokumentasi->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Nama Kegiatan</th>
                            <td>
                                <input type="text" class="form-control @error('nama_kegiatan') is-invalid @enderror" name="nama_kegiatan" value="{{ old('nama_kegiatan', $dokumentasi->nama_kegiatan) }}">
                                @error('nama_kegiatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Tanggal Kegiatan</th>
                            <td>
                                <input type="date" class="form-control @error('tgl_kegiatan') is-invalid @enderror" name="tgl_kegiatan" value="{{ old('tgl_kegiatan', $dokumentasi->tgl_kegiatan) }}">
                                @error('tgl_kegiatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Foto Dokumentasi</th>
                            <td>
                                <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
                                @error('foto')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                @if ($dokumentasi->foto)
                                    <div class="mt-2">
                                        <img src="{{ asset('system/storage/app/public/' . $dokumentasi->foto) }}" alt="Foto Dokumentasi" width="150">
                                    </div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Status Dokumentasi</th>
                            <td>
                                <select class="form-control @error('status_dokumentasi') is-invalid @enderror" name="status_dokumentasi">
                                    <option value="Publik" {{ old('status_dokumentasi', $dokumentasi->status_dokumentasi) == 'Publik' ? 'selected' : '' }}>Publik</option>
                                    <option value="Privat" {{ old('status_dokumentasi', $dokumentasi->status_dokumentasi) == 'Privat' ? 'selected' : '' }}>Privat</option>
                                </select>
                                @error('status_dokumentasi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>URL</th>
                            <td>
                                <input type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url', $dokumentasi->url) }}">
                                @error('url')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary mt-3">Update</button>
                <a href="{{ url('admin/dokumentasi') }}" class="btn btn-secondary mt-3">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
