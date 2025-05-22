@extends('template.admin')

@section('content')
<div class="container my-5">
  <div class="card">
      <div class="card-header">
        <a href="{{ url('admin/agenda/create') }}" class="btn float-end btn-sm btn-primary">Tambah Agenda</a>
          <h3>Agenda</h3>
          </div>
      <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover" id="datatable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Agenda</th>
                    <th>Deskripsi Agenda</th>
                    <th>Isi Agenda</th>
                    <th>Tempat Agenda</th>
                    <th>Tgl Agenda</th>
                    <th>Status Agenda</th>
                    <th>Action</th>
                </tr>
                </thead>
            <tbody>
                @foreach ($agenda as $item)
                @include('admin.agenda._list_data.agenda', $data=[])
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    </div>
</div>
@endsection