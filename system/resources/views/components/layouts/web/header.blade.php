<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Navbar Responsive</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f4f4;
    }

    nav {
      background-color: white;
      display: flex;
      align-items: center;
      padding: 1.5rem 3rem;
      position: relative;
    }

    .logo {
      margin-right: 40px;
    }

    .logo img {
      width: 60px;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 2rem;
      align-items: center;
      justify-content: center;
      flex-grow: 1;
    }

    nav ul li {
      position: relative;
    }

    nav ul li a {
      text-decoration: none;
      color: #191919;
      font-weight: 600;
      padding: 6px 0;
      transition: all 0.3s ease;
      border-bottom: none;
    }

    nav ul li a:hover,
    nav ul li.active > a {
      color: orange;
      border-bottom: 3px solid orange;
    }
    
    nav ul li .dropdown-menu {
      position: absolute;
      top: 45px;
      left: 0;
      background-color: #fff;
      padding: 10px 0;
      display: none;
      flex-direction: column;
      min-width: 200px;
      border-radius: 10px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
      z-index: 99;
    }

    nav ul li.show-dropdown .dropdown-menu {
      display: flex;
    }

    nav ul li .dropdown-menu li {
      width: 100%;
    }

    nav ul li .dropdown-menu li a {
      padding: 12px 20px;
      display: block;
      color: #666;
      font-weight: 500;
      transition: all 0.3s ease;
      text-decoration: none;
    }

    nav ul li .dropdown-menu li a:hover {
      background-color: #f3f3f3;
      color: orange;
      font-weight: 600;
      border-radius: 6px;
    }

    nav ul li .dropdown-menu li.active > a {
      color: orange;
      font-weight: 600;
    }

    .menu-toggle {
      display: none;
      font-size: 24px;
      cursor: pointer;
    }

    @media (max-width: 768px) {
      nav {
        flex-direction: column;
        align-items: flex-start;
        padding: 1rem;
      }

      .menu-toggle {
        display: block;
        align-self: flex-end;
        margin-bottom: 10px;
      }

      nav ul {
        flex-direction: column;
        width: 100%;
        display: none;
        padding-left: 0;
        margin-top: 10px;
      }

      nav ul.show {
        display: flex;
      }

      nav ul li {
        width: 100%;
      }

      nav ul li a {
        display: block;
        padding: 10px;
      }

      nav ul li .dropdown-menu {
        position: static;
        box-shadow: none;
        padding-left: 20px;
        border-radius: 0;
      }
    }
  </style>
</head>
<body>
  <nav>
    <div class="logo">
      <img src="{{ url('public') }}/landing/assets/images/logo-jdihn.png" alt="Logo" />
    </div>

    <div class="menu-toggle" onclick="toggleMenu()">☰</div>

    <ul id="nav-menu">
      <li class="dropdown {{ request()->is('/') || request()->is('sejarah') || request()->is('maknalogo') ? 'active' : '' }}">
        <a href="#" onclick="toggleDropdown(event)">JDIH</a>
        <ul class="dropdown-menu">
          <li><a href="{{ url('/') }}">Utama</a></li>
          <li><a href="{{ url('sejarah') }}">Sejarah</a></li>
          <li><a href="{{ url('maknalogo') }}">Makna Logo</a></li>
        </ul>
      </li>
      <li class="{{ request()->is('dokumen') ? 'active' : '' }}"><a href="{{ url('dokumen') }}">Dokumen</a></li>
      <li class="{{ request()->is('berita') ? 'active' : '' }}"><a href="{{ url('berita') }}">Berita</a></li>
      <li class="{{ request()->is('dokumentasi') ? 'active' : '' }}"><a href="{{ url('dokumentasi') }}">Dokumentasi</a></li>
      <li class="{{ request()->is('agenda') ? 'active' : '' }}"><a href="{{ url('agenda') }}">Agenda</a></li>
      <li class="{{ request()->is('kontak') ? 'active' : '' }}"><a href="{{ url('kontak') }}">Contact</a></li>
    </ul>
  </nav>

  <script>
    function toggleMenu() {
      document.getElementById('nav-menu').classList.toggle('show');
    }

    function toggleDropdown(event) {
      event.preventDefault();
      event.stopPropagation();
      const dropdown = event.target.closest('li');
      const isOpen = dropdown.classList.contains('show-dropdown');

      document.querySelectorAll('nav ul li.dropdown').forEach(li => {
        li.classList.remove('show-dropdown');
      });

      if (!isOpen) {
        dropdown.classList.add('show-dropdown');
      }
    }

    document.addEventListener('click', function () {
      document.querySelectorAll('nav ul li.dropdown').forEach(li => {
        li.classList.remove('show-dropdown');
      });
    });

    document.querySelectorAll('.dropdown-menu a').forEach(link => {
      link.addEventListener('click', function () {
        document.querySelectorAll('nav ul li.dropdown').forEach(li => {
          li.classList.remove('show-dropdown');
        });
        document.getElementById('nav-menu').classList.remove('show');
      });
    });
  </script>
</body>
</html>
