@extends('template.admin')

@section('content')
<div class="container my-5">
  <div class="card">
      <div class="card-header">
        <a href="{{ url('admin/dokumentasi/create') }}" class="btn float-end btn-sm btn-primary">Tambah Dokumentasi</a>
          <h3>Dokumentasi</h3>
          </div>
      <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover" id="datatable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kegiatan</th>
                    <th>Tgl Kegiatan</th>
                    <th>Kategori</th>
                    <th>Foto Dokumentasi</th>
                    <th>Status Dokumentasi</th>
                    <th>Url</th>
                    <th>Action</th>
                </tr>
                </thead>
            <tbody>
                @foreach ($dokumentasi as $item)
                @include('admin.dokumentasi._list_data.dokumentasi', $data=[])
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    </div>
</div>
@endsection