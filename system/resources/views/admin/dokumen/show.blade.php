@extends('template.admin')

@section('content')
    @php
        use Illuminate\Support\Facades\Storage;
    @endphp

    <div class="container px-4 mx-5 mt-5">
        <div class="card mb-4">
            <div class="card-header">
                <a href="{{ url('admin/dokumen') }}" class="btn btn-secondary float-end">
                    Kembali
                </a>
                <h3 class="card-title">Detail Dokumen</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th style="width: 25%">Judul</th>
                            <td>{{ $dokumen->judul ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>Nomor Dokumen</th>
                            <td>{{ $dokumen->no_dokumen ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>Nama Jenis Dokumen</th>
                            <td>{{ $dokumen->nama_dokumen ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>Asal Dokumen</th>
                            <td>{{ $dokumen->asal_dokumen ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>Tahun</th>
                            <td>{{ $dokumen->tahun ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Penetapan</th>
                            <td>{{ $dokumen->tgl_penetapan ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>Tempat Terbit</th>
                            <td>{{ $dokumen->tempat_terbit ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>Status Dokumen</th>
                            <td>{{ ucfirst($dokumen->status ?? '-') }}</td>
                        </tr>
                        <tr>
                            <th>Deskripsi</th>
                            <td>{!! $dokumen->deskripsi ? nl2br(e($dokumen->deskripsi)) : '-' !!}</td>
                        </tr>
                        <tr>
                            <th>Kategori</th>
                            <td>{{ optional($dokumen->kategori)->nama_kategori ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>File Dokumen</th>
                            <td>
                                @if (!empty($dokumen->file_dokumen) && Storage::disk('public')->exists($dokumen->file_dokumen))
                                    <a href="{{ asset('system/storage/app/public/' . $dokumen->file_dokumen) }}" target="_blank" class="btn btn-primary">
                                        <i class="bi bi-file-earmark-pdf"></i> Lihat File
                                    </a>
                                @else
                                    <span class="text-muted">Tidak ada file dokumen yang diunggah.</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Link Dokumen</th>
                            <td>
                                @if (!empty($dokumen->link_dokumen))
                                    <a href="{{ $dokumen->link_dokumen }}" target="_blank" class="btn btn-success">
                                        <i class="bi bi-link-45deg"></i> Lihat Link
                                    </a>
                                @else
                                    <span class="text-muted">Tidak ada link dokumen.</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
