<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $item->nama_kegiatan }}</td>
    <td>{{ $item->tgl_kegiatan }}</td>
   
    <td>
    @if (!empty($item->foto))
            <a href="{{ asset('system/storage/app/public/' . $item->foto) }}" target="_blank" class="btn btn-info btn-sm">
                <i class="bi bi-image"></i> Lihat Foto
            </a>
        @else
            <span class="text-muted">Tidak ada foto</span>
        @endif
</td>


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