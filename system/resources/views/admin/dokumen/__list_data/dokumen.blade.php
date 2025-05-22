
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $item->no_dokumen }}</td>
    <td>{{ $item->nama_dokumen }}</td>
    <td>{{ $item->asal_dokumen }}</td>
    <td>{{ $item->tgl_penetapan }}</td>
    <td>{{ $item->tgl_terbit }}</td>
    <td>{{ $item->status_dokumen}}</td>
    <td>
        @if ($item->file_dokumen)
            <a class="btn btns-sm btn-secondary" href="{{ asset('system/storage/app/public/'. $item->file_dokumen) }}" target="_blank"><i class=" small material-icons">description</i></a>
            
        @else
            Menggunakan Link 
        @endif

            <a class="btn btn-sm btn-info" href="{{ $item->link_dokumen }}" target="_blank">
                <i class="bi bi-link-45deg"></i> Lihat Link
            </a>

    </td>
    
    <td>{{ $item->deskripsi }}</td>
    <td>{{ $item->kategori->nama_kategori }}</td>
    
    <td>
        <a href="{{ url('admin/dokumen/show', $item->id) }}" class="btn btn-secondary btn-sm"><i class="bi bi-eye"></i></a>
        <a href="{{ url('admin/dokumen/edit', $item->id) }}" class="btn btn-warning btn-sm"><i class=" bi bi-pencil"></i></a>
        <button class="btn btn-sm btn-danger bs-tooltip"  data-placement="right" type="button" onclick="deleteData('{{ $item->id }}', '{{ $path ?? '' }}')">
            <i class="bi bi-trash"></i> 
        </button>
        
        
        
    </td>
    @include('scripts.delete-data')
</tr>



