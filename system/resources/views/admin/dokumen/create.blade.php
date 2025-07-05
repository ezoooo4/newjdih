@extends('template.admin')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center fw-bold">Form Tambah Dokumen</h2>
    <div class="card mx-auto" style="max-width: 1000px;">
        <div class="card-body">
            <form action="{{ url('admin/dokumen/store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!-- Kolom Kiri -->
                    <div class="col-md-6">
                        <!-- Judul -->
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul Dokumen</label>
                            <input type="text" name="judul" id="judul"
                                   class="form-control @error('judul') is-invalid @enderror"
                                   value="{{ old('judul') }}" required>
                            @error('judul')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Nomor Dokumen -->
                        <div class="mb-3">
                            <label class="form-label">Nomor Dokumen</label>
                            <input type="text" name="no_dokumen"
                                   class="form-control @error('no_dokumen') is-invalid @enderror"
                                   value="{{ old('no_dokumen') }}">
                            @error('no_dokumen')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Nama Jenis Dokumen -->
                        <div class="mb-3">
                            <label class="form-label">Nama Jenis Dokumen</label>
                            <input type="text" name="nama_dokumen"
                                   class="form-control @error('nama_dokumen') is-invalid @enderror"
                                   value="{{ old('nama_dokumen') }}">
                            @error('nama_dokumen')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Asal Dokumen -->
                        <div class="mb-3">
                            <label class="form-label">Asal Dokumen</label>
                            <input type="text" name="asal_dokumen"
                                   class="form-control @error('asal_dokumen') is-invalid @enderror"
                                   value="{{ old('asal_dokumen') }}">
                            @error('asal_dokumen')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Tahun -->
                        <div class="mb-3">
                            <label class="form-label">Tahun</label>
                            <input type="number" name="tahun"
                                   class="form-control @error('tahun') is-invalid @enderror"
                                   value="{{ old('tahun') }}">
                            @error('tahun')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Tanggal Penetapan -->
                        <div class="mb-3">
                            <label class="form-label">Tanggal Penetapan</label>
                            <input type="date" name="tgl_penetapan"
                                   class="form-control @error('tgl_penetapan') is-invalid @enderror"
                                   value="{{ old('tgl_penetapan') }}">
                            @error('tgl_penetapan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="col-md-6">
                        <!-- Tempat Terbit -->
                        <div class="mb-3">
                            <label class="form-label">Tempat Terbit</label>
                            <input type="text" name="tempat_terbit"
                                   class="form-control @error('tempat_terbit') is-invalid @enderror"
                                   value="{{ old('tempat_terbit') }}">
                            @error('tempat_terbit')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- File Dokumen -->
                        <div class="mb-3">
                            <label class="form-label">Upload File Dokumen (PDF)</label>
                            <input type="file" name="file_dokumen"
                                   class="form-control @error('file_dokumen') is-invalid @enderror">
                            @error('file_dokumen')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Link Dokumen -->
                        <div class="mb-3">
                            <label class="form-label">Link Dokumen (opsional)</label>
                            <input type="url" name="link_dokumen"
                                   class="form-control @error('link_dokumen') is-invalid @enderror"
                                   placeholder="https://..." value="{{ old('link_dokumen') }}">
                            @error('link_dokumen')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Deskripsi -->
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea name="deskripsi"
                                      class="form-control @error('deskripsi') is-invalid @enderror"
                                      rows="4">{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Kategori -->
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select name="kategori_id"
                                    class="form-select @error('kategori_id') is-invalid @enderror" required>
                                <option value="">Pilih Kategori</option>
                                @foreach ($list_kategori as $kategori)
                                    <option value="{{ $kategori->id }}"
                                        {{ old('kategori_id') == $kategori->id ? 'selected' : '' }}>
                                        {{ $kategori->nama_kategori }}</option>
                                @endforeach
                            </select>
                            @error('kategori_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Status Dokumen -->
                        <div class="mb-3">
                            <label class="form-label">Status Dokumen</label>
                            <select name="status"
                                    class="form-select @error('status') is-invalid @enderror" required>
                                <option value="">Pilih Status</option>
                                <option value="masih berlaku" {{ old('status') == 'masih berlaku' ? 'selected' : '' }}>Masih Berlaku</option>
                                <option value="tidak berlaku" {{ old('status') == 'tidak berlaku' ? 'selected' : '' }}>Tidak Berlaku</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Tombol -->
                <div class="mt-4 d-flex justify-content-end gap-2">
                    <a href="{{ url('admin/dokumen') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
