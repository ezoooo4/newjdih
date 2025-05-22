@extends('template.admin')

@section('content')
<div class="container my-5">
  <div class="card">
      <div class="card-header">
        <a href="{{ url('admin/berita/create') }}" class="btn float-end btn-sm btn-primary">Tambah Berita</a>
          <h3>Berita</h3>
          </div>
      <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover" id="datatable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Berita</th>
                    <th>Tanggal</th>
                    <th>Isi Berita</th>
                    <th>Foto Berita</th>
                    <th>Pembuat</th>
                    <th>Action</th>
                </tr>
                </thead>
            <tbody>
                @foreach ($berita as $item)
                @include('admin.berita._list_data.berita', $data=[])
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    </div>
</div>
@endsection