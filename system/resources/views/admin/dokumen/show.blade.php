@extends('template.admin')

@section('content')

@php
  use Illuminate\Support\Facades\Storage;
@endphp

<div class="container px-4 mx-5 mt-5">
    <div class="card mb-4">
        <div class="card-header">
            <a href="{{ url('admin/dokumen') }}" class="btn btn-secondary float-end" title="Kembali ke daftar dokumen">Kembali</a>
            <h3 class="card-title">Detail Dokumen</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Nomor Dokumen</th>
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
                        <th>Tanggal Penerbit</th>
                        <td>{{ $dokumen->tgl_terbit }}</td>
                    </tr>
                    <tr>
                        <th>Status Dokumen</th>
                        <td>{{ $dokumen->status_dokumen }}</td>
                    </tr>
                    <tr>
                        <th>Deskripsi</th>
                        <td>{{ $dokumen->deskripsi ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th>File Dokumen</th>
                        <td>
                            @if (!empty($dokumen->file_dokumen) && Storage::disk('public')->exists($dokumen->file_dokumen))
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pdfModal" title="Lihat file PDF">
                                    Lihat File
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="pdfModalLabel">Pratinjau File PDF</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                            </div>
                                            <div class="modal-body">
                                                <iframe 
                                                    src="{{ asset('storage/' . $dokumen->file_dokumen) }}" 
                                                    width="100%" 
                                                    height="600px" 
                                                    loading="lazy" 
                                                    frameborder="0"
                                                    allowfullscreen
                                                ></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <span class="text-muted">Tidak ada file</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Link Dokumen</th>
                        <td>
                            @if (!empty($dokumen->link_dokumen))
                                <a href="{{ $dokumen->link_dokumen }}" target="_blank" class="btn btn-info" title="Buka link dokumen PDF">
                                    Lihat Link PDF
                                </a>
                            @else
                                <span class="text-muted">Tidak ada link</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Kategori</th>
                        <td>{{ optional($dokumen->kategori)->nama_kategori ?? '-' }}</td>
                    </tr>
                </tbody>
            </table>  
        </div>
    </div>
</div>

@endsection
