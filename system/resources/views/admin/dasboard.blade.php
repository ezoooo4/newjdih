@extends('template.admin')

@section('content')
<style>
    .dashboard-container {
        padding: 30px;
        background: #fafbfc;
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        0% { opacity: 0; transform: translateY(20px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    .dashboard-header {
        font-size: 28px;
        font-weight: bold;
        color: white;
        padding: 40px;
        border-radius: 15px;
        margin-bottom: 40px;
        background: linear-gradient(135deg, #0d6efd, #4dabf7);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        animation: slideIn 1s ease-in-out;
        position: relative;
    }

    .logout-form, .profil-button {
        position: absolute;
        top: 20px;
    }

    .logout-form {
        right: 20px;
    }

    .profil-button {
        right: 120px;
    }

    .logout-form button,
    .profil-button a {
        background-color: #dc3545;
        border: none;
        color: white;
        padding: 6px 14px;
        border-radius: 6px;
        font-size: 14px;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .logout-form button:hover {
        background-color: #bb2d3b;
    }

    .profil-button a {
        background-color: #ffc107;
        color: black;
    }

    .profil-button a:hover {
        background-color: #e0a800;
        color: black;
    }

    @keyframes slideIn {
        from { opacity: 0; transform: translateX(-20px); }
        to { opacity: 1; transform: translateX(0); }
    }

    .card-box {
        background: white;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        padding: 30px;
        display: flex;
        align-items: center;
        transition: 0.4s ease;
        animation: zoomIn 0.6s ease forwards;
    }

    @keyframes zoomIn {
        0% { transform: scale(0.9); opacity: 0; }
        100% { transform: scale(1); opacity: 1; }
    }

    .card-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 50px 45px rgba(73, 170, 199, 0.329);
    }

    .card-icon {
        font-size: 42px;
        padding: 18px;
        border-radius: 50%;
        color: white;
        margin-right: 25px;
        animation: popIn 0.6s ease-in-out;
    }

    @keyframes popIn {
        0% { transform: scale(0); }
        100% { transform: scale(1); }
    }

    .icon-doc { background-color: #0d6efd; }
    .icon-berita { background-color: #198754; }
    .icon-dokumentasi { background-color: #ffc107; }
    .icon-agenda { background-color: #6f42c1; }
    .icon-kategori { background-color: #fd7e14; }

    .card-info h4 {
        margin: 0;
        font-size: 18px;
        color: #666;
    }

    .card-info p {
        
        margin: 0;
        font-size: 28px;
        font-weight: bold;
        color: #222;
    }
</style>

<div class="dashboard-container">
    <div class="dashboard-header">
        Selamat Datang di Dashboard Admin


        <!-- Tombol Profil Admin -->
        <div class="profil-button">
            <a href="{{ route('admin.profil') }}">Profil Admin</a>
        </div>

        <!-- Tombol Logout dengan Konfirmasi -->
        <form action="{{ route('logout') }}" method="POST" class="logout-form">
            @csrf
            <button type="submit" onclick="return confirm('Yakin ingin keluar?')">Logout</button>
        </form>
    </div>

    <div class="row g-4">
        <div class="col-md-6 col-xl-4">
            <div class="card-box">
                <div class="card-icon icon-doc"><i class="bi bi-file-earmark-text-fill"></i></div>
                <div class="card-info">
                    <h4>Total Dokumen</h4>
                    <p>{{ $jumlah_dokumen ?? 0 }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card-box">
                <div class="card-icon icon-berita"><i class="bi bi-newspaper"></i></div>
                <div class="card-info">
                    <h4>Total Berita</h4>
                    <p>{{ $jumlah_berita ?? 0 }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card-box">
                <div class="card-icon icon-dokumentasi"><i class="bi bi-camera-fill"></i></div>
                <div class="card-info">
                    <h4>Total Dokumentasi</h4>
                    <p>{{ $jumlah_dokumentasi ?? 0 }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card-box">
                <div class="card-icon icon-agenda"><i class="bi bi-calendar2-event"></i></div>
                <div class="card-info">
                    <h4>Total Agenda</h4>
                    <p>{{ $jumlah_agenda ?? 0 }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card-box">
                <div class="card-icon icon-kategori"><i class="bi bi-bookmark-plus-fill"></i></div>
                <div class="card-info">
                    <h4>Total Kategori Dokumen</h4>
                    <p>{{ $jumlah_kategori_dokumen ?? 0 }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
