<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $item->nama_kegiatan }}</td>
    <td>{{ $item->tgl_kegiatan }}</td>
    <td>{{ $item->kategori }}</td>
    <td>{{ $item->foto}}</td>
    <td>{{ $item->status_dokumentasi }}</td>
    <td>{{ $item->url }}</td>

    <td>
        <a href="{{ url('admin/dokumentasi/show', $item->id) }}" class="btn btn-secondary btn-sm"><i class="bi bi-eye"></i></a>
        <a href="{{ url('admin/dokumentasi/edit', $item->id) }}" class="btn btn-warning btn-sm"><i class=" bi bi-pencil"></i></a>
        <button class="btn btn-sm btn-danger bs-tooltip"  data-placement="right" type="button" onclick="deleteData('{{ $item->id }}', '{{ $path ?? '' }}')">
            <i class="bi bi-trash"></i> 
        </button>
        
        
        
    </td>
    @include('scripts.delete-data')
</tr>