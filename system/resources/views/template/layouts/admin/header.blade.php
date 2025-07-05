<style>
    .navbars {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: linear-gradient(to right, #1e90ff, #00bcd4);
        color: white;
        padding: 10px 0px;
        position: relative;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        z-index: 1000;
    }

    .header-left {
        display: flex;
        align-items: center;
    }

    .header-brand {
        font-size: 24px;
        font-weight: bold;
        margin-right: 20px;
    }

    .header-system-name {
        font-size: 16px;
        white-space: nowrap;
    }

    .header-right {
        position: relative;
        padding-right: 20px;
    }

    .profile-img {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        cursor: pointer;
        border: 2px solid white;
    }

    .profile-dropdown {
        position: relative;
        margin-left: 10px;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        right: 0;
        top: 48px;
        background-color: white;
        color: black;
        min-width: 160px;
        border-radius: 6px;
        box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
        z-index: 1000;
        padding: 10px;
        text-align: center;
    }

    .profile-name {
        font-weight: bold;
        display: block;
        margin-bottom: 10px;
    }

    .logout-button {
        background-color: #dc3545;
        color: white;
        border: none;
        padding: 6px 12px;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }

    .logout-button:hover {
        background-color: #c82333;
    }

    .profile-dropdown.active .dropdown-content {
        display: block;
    }
    img{
        width: 50px;
        height: 50px;
        
    }
</style>
<!-- HEADER -->
<header class="navbars">
    <div class="header-left">
        <div  class="header-brand">JDIH</div>
         <img src="{{ url('public/landing') }}/assets/images//logo-jdihn.png" alt="Logo" class="logo">
        <div class="header-system-name">
            Sistem Jaringan Dokumentasi Informasi Hukum
        </div>
    </div>

    {{-- <div class="header-right">
        <div class="profile-dropdown">
            <img src="{{ asset('public/assets/images/profiladmin.jpg') }}" alt="Admin" class="profile-img" onclick="toggleDropdown()" />
            <div id="dropdownMenu" class="dropdown-content">
                <span class="profile-name">{{ Auth::user()->name ?? 'Admin' }}</span>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="logout-button">Logout</button>
                </form>
            </div>
        </div>
    </div> --}}
</header>

<!-- CSS -->
<!-- JavaScript -->
<script>
    function toggleDropdown() {
        document.querySelector('.profile-dropdown').classList.toggle('active');
    }

    // Optional: close dropdown if click outside
    document.addEventListener('click', function(event) {
        const dropdown = document.querySelector('.profile-dropdown');
        if (!dropdown.contains(event.target)) {
            dropdown.classList.remove('active');
        }
    });
</script>
