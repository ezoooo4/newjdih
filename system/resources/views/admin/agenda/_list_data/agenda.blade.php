<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $item->judul_agenda }}</td>
    <td>{{ $item->deskripsi_agenda }}</td>
    <td>{{ $item->isi_agenda }}</td>
    <td>{{ $item->tempat_agenda }}</td>
    <td>{{ $item->tgl_agenda }}</td>
    <td>{{ $item->status_agenda }}</td>

    <td>
        <a href="{{ url('admin/agenda/show', $item->id) }}" class="btn btn-secondary btn-sm"><i class="bi bi-eye"></i></a>
        <a href="{{ url('admin/agenda/edit', $item->id) }}" class="btn btn-warning btn-sm"><i class=" bi bi-pencil"></i></a>
        <button class="btn btn-sm btn-danger bs-tooltip"  data-placement="right" type="button" onclick="deleteData('{{ $item->id }}', '{{ $path ?? '' }}')">
            <i class="bi bi-trash"></i> 
        </button>
        
        
        
    </td>
    @include('scripts.delete-data')
</tr>