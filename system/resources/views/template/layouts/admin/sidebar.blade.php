<aside class="sidebar">
    <ul class="menu">
        <li class="{{ request()->is('admin/dasboard') ? 'active' : '' }}">
            <a href="{{ url('admin/dasboard') }}">
                <i class="bi bi-house"></i>
                <span>Dasboard</span>
            </a>
        </li>
        <li class="{{ request()->is('admin/agenda') ? 'active' : '' }}">
            <a href="{{ url('admin/agenda') }}">
                <i class="bi bi-calendar2-event"></i>
                <span>Agenda</span>
            </a>
        </li>
        <li class="{{ request()->is('admin/berita') ? 'active' : '' }}">
            <a href="{{ url('admin/berita') }}">
                <i class="bi bi-newspaper"></i>
                <span>Berita</span>
            </a>
        </li>
        <li class="{{ request()->is('admin/dokumen') ? 'active' : '' }}">
            <a href="{{ url('admin/dokumen') }}">
                <i class="bi bi-file-earmark-text-fill"></i>
                <span>Dokumen</span>
            </a>
        </li>
        <li class="{{ request()->is('admin/dokumentasi') ? 'active' : '' }}">
            <a href="{{ url('admin/dokumentasi') }}">
                <i class="bi bi-collection"></i>
                <span>Dokumentasi</span>
            </a>
        </li>
        <li class="{{ request()->is('admin/Kategori_dokumen') ? 'active' : '' }}">
            <a href="{{ url('admin/kategori_dokumen') }}">
                <i class="bi bi-bookmark-plus-fill"></i>
                <span>Kategori_dokumen</span>
            </a>
        </li>
    </ul>
</aside>
