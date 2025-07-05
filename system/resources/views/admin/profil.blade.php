@extends('template.admin')

@section('content')
<div class="container mt-5">
    <!-- Judul Menarik di Tengah -->
    <h3 class="text-center fw-bold mb-4" style="color: #ff8c00;">
        <i class="bi bi-person-circle me-2"></i> Perbarui Profil Admin
    </h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.profil.update') }}" method="POST">
        @csrf

        <!-- Nama -->
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" id="name" name="name" value="{{ old('name', $admin->name ?? '') }}" class="form-control" required>
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email', $admin->email ?? '') }}" class="form-control" required>
        </div>

        <hr>
        <p class="fw-bold">Ganti Password (Opsional)</p>

        <!-- Password Lama -->
        <div class="mb-3">
            <label class="form-label">Password Lama</label>
            <div class="input-group">
                <input type="password" id="current_password" name="current_password" class="form-control">
                <button type="button" class="btn btn-outline-secondary" onclick="togglePassword('current_password', this)">Lihat</button>
            </div>
        </div>

        <!-- Password Baru -->
        <div class="mb-3">
            <label class="form-label">Password Baru</label>
            <div class="input-group">
                <input type="password" id="password" name="password" class="form-control">
                <button type="button" class="btn btn-outline-secondary" onclick="togglePassword('password', this)">Lihat</button>
            </div>
        </div>

        <!-- Konfirmasi Password -->
        <div class="mb-3">
            <label class="form-label">Konfirmasi Password Baru</label>
            <div class="input-group">
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                <button type="button" class="btn btn-outline-secondary" onclick="togglePassword('password_confirmation', this)">Lihat</button>
            </div>
        </div>

        <!-- Tombol -->
        <div class="d-flex justify-content-between">
            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    function togglePassword(fieldId, button) {
        const input = document.getElementById(fieldId);
        if (input) {
            const isHidden = input.type === "password";
            input.type = isHidden ? "text" : "password";
            button.textContent = isHidden ? "Sembunyikan" : "Lihat";
        }
    }
</script>
@endpush
