@extends('template.admin')

@section('content')
<div class="container px-4 mx-5 mt-5">
    <div class="card mb-4">
        <div class="card-header">
            <h3 class="card-title">Edit Agenda</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/agenda/update/' . $agenda->id) }}" method="post">
                @csrf
                @method('PUT')
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Pembuat Agenda</th>
                            <td>
                                <input type="text" class="form-control @error('pembuat_agenda') is-invalid @enderror" name="pembuat_agenda" value="{{ old('pembuat_agenda', $agenda->pembuat_agenda) }}">
                                @error('pembuat_agenda')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Judul Agenda</th>
                            <td>
                                <input type="text" class="form-control @error('judul_agenda') is-invalid @enderror" name="judul_agenda" value="{{ old('judul_agenda', $agenda->judul_agenda) }}">
                                @error('judul_agenda')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Deskripsi Agenda</th>
                            <td>
                                <textarea class="form-control @error('deskripsi_agenda') is-invalid @enderror" name="deskripsi_agenda">{{ old('deskripsi_agenda', $agenda->deskripsi_agenda) }}</textarea>
                                @error('deskripsi_agenda')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Isi Agenda</th>
                            <td>
                                <textarea class="form-control @error('isi_agenda') is-invalid @enderror" name="isi_agenda">{{ old('isi_agenda', $agenda->isi_agenda) }}</textarea>
                                @error('isi_agenda')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Tempat Agenda</th>
                            <td>
                                <input type="text" class="form-control @error('tempat_agenda') is-invalid @enderror" name="tempat_agenda" value="{{ old('tempat_agenda', $agenda->tempat_agenda) }}">
                                @error('tempat_agenda')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Tanggal Agenda</th>
                            <td>
                                <input type="date" class="form-control @error('tgl_agenda') is-invalid @enderror" name="tgl_agenda" value="{{ old('tgl_agenda', $agenda->tgl_agenda) }}">
                                @error('tgl_agenda')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Status Agenda</th>
                            <td>
                                <select class="form-control @error('status_agenda') is-invalid @enderror" name="status_agenda">
                                    <option value="">Pilih Status</option>
                                    <option value="Aktif" {{ old('status_agenda', $agenda->status_agenda) == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                                    <option value="Nonaktif" {{ old('status_agenda', $agenda->status_agenda) == 'Nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                                </select>
                                @error('status_agenda')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary mt-3">Simpan Perubahan</button>
                <a href="{{ url('admin/agenda') }}" class="btn btn-secondary mt-3">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
