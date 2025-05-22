@extends('template.admin')

@section('content')
<div class="container px-4 mx-5 mt-5">
    <div class="card mb-4">
        <div class="card-header">
            <h3 class="card-title">Detail Agenda</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Pembuat Agenda</th>
                        <td>{{ $agenda->pembuat_agenda }}</td>
                    </tr>
                    <tr>
                        <th>Judul Agenda</th>
                        <td>{{ $agenda->judul_agenda }}</td>
                    </tr>
                    <tr>
                        <th>Deskripsi Agenda</th>
                        <td>{{ $agenda->deskripsi_agenda }}</td>
                    </tr>
                    <tr>
                        <th>Isi Agenda</th>
                        <td>{{ $agenda->isi_agenda }}</td>
                    </tr>
                    <tr>
                        <th>Tempat Agenda</th>
                        <td>{{ $agenda->tempat_agenda }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Agenda</th>
                        <td>{{ $agenda->tgl_agenda }}</td>
                    </tr>
                    <tr>
                        <th>Status Agenda</th>
                        <td>{{ $agenda->status_agenda }}</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ url('admin/agenda') }}" class="btn btn-secondary mt-3">Kembali</a>
        </div>
    </div>
</div>
@endsection
