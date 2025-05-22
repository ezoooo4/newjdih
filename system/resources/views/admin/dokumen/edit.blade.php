@extends('template.admin')

@section('content')
<div class="container px-4 mx-5 mt-5">
    <div class="card mb-4">
        <div class="card-header">
            <h3 class="card-title">Tambah Dokumen</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/dokumen/update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Nomor Dokumen</th>
                            <td>
                                <input type="text" class="form-control @error('no_dokumen') is-invalid @enderror" name="no_dokumen" value="{{ old('no_dokumen') }}">
                                @error('no_dokumen')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Nama Dokumen</th>
                            <td>
                                <input type="text" class="form-control @error('nama_dokumen') is-invalid @enderror" name="nama_dokumen" value="{{ old('nama_dokumen') }}">
                                @error('nama_dokumen')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Asal Dokumen</th>
                            <td>
                                <input type="text" class="form-control @error('asal_dokumen') is-invalid @enderror" name="asal_dokumen" value="{{ old('asal_dokumen') }}">
                                @error('asal_dokumen')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Tgl Penetapan</th>
                            <td>
                                <input type="date" class="form-control @error('tgl_penetapan') is-invalid @enderror" name="tgl_penetapan" value="{{ old('tgl_penetapan') }}">
                                @error('tgl_penetapan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Tgl Terbit</th>
                            <td>
                                <input type="date" class="form-control @error('tgl_terbit') is-invalid @enderror" name="tgl_terbit" value="{{ old('tgl_terbit') }}">
                                @error('tgl_terbit')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>File</th>
                            <td>
                                <div class="form-group">
                                        <label for="file_dokumen">Upload File Dokumen (PDF)</label>
                                        <input type="file" name="file_dokumen" class="form-control">
                                </div>
                                @error('file_dokumen')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                        <label for="link_dokumen">Link Dokumen (opsional jika file terlalu besar)</label>
                                        <input type="url" name="link_dokumen" class="form-control" placeholder="https://...">
                                </div>                        
                                @error('link_dokumen')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Deskripsi</th>
                            <td>
                                <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi">{{ old('deskripsi') }}</textarea>
                                @error('deskripsi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th> <label for="kategori">Kategori</label></th>
                          
                            <th>
                                <select id="nama" class="form-select"  name="kategori_id" required>
                                    <option value="" disabled selected>Pilih kategori</option>
                                   @foreach($list_kategori as $kategori)
                                   <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
                                   @endforeach
                                </select>
                            </th>
                        </tr>
                        <tr>
                            <th>Status Dokumen</th>
                            <td>
                                <select class="form-control @error('status_dokumen') is-invalid @enderror" name="status_dokumen">
                                    <option value="">Pilih Status</option>
                                    <option value="Masih Berlaku" {{ old('status_dokumen') == 'Masih Berlaku' ? 'selected' : '' }}>Masih berlaku</option>
                                    <option value="Tidak Berlaku" {{ old('status_dokumen') == 'Tidak Berlaku' ? 'selected' : '' }}>Tidak Berlaku</option>
                                </select>
                                @error('status_dokumen')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                    </tbody>
                    </table>
                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                <a href="{{ url('admin/dokumen') }}" class="btn btn-secondary mt-3">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection