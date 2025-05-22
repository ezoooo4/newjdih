@extends('template.admin')

@section('content')
<div class="container my-5">
  <div class="card">
      <div class="card-header">
        <a href="{{ url('admin/dokumen/create') }}" class="btn float-end btn-sm btn-primary">Tambah Data</a>
          <h3>Data Dokumen</h3>
          </div>
      <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover" id="datatable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Dokumen</th>
                    <th>Nama Dokumen</th>
                    <th>Asal Dokumen</th>
                    <th>Tgl Penetapan</th>
                    <th>Tgl Terbit</th>
                    <th>Status Dokumen</th>
                    <th>File</th>
                    
                    <th>Deskripsi</th>
                    <th>Kategori</th>
                    <th>Action</th>
                </tr>
                <thead>
                    <tbody>
                        @foreach ($dokumen as $item)
                        @include('admin.dokumen.__list_data.dokumen', $data=[])
                        @endforeach
                    </tbody>
                </thead>
            </div>
            </div>
            </div>
        </div>    
@endsection