
@extends('template.admin')

@section('content')
<div class="container my-5">
  <div class="card">
      <div class="card-header">
        <a href="{{ url('admin/kategori_dokumen/create') }}" class="btn float-end btn-sm btn-primary">Tambah Kategori Dokumen</a>
          <h3>Data Kategori Dokumen</h3>
          </div>
      <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover" id="datatable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Kategori</th>
                    <th>Deskripsi</th>
                    <th>Action</th>
                </tr>
                </thead>
            <tbody>
                @foreach ($kategori_dokumen as $item)
                @include('admin.kategori_dokumen._list_data.kategori', $data=[])
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    </div>
</div>
@endsection