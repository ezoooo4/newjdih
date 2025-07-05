<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <title>Login Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      min-height: 100vh;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      background: url('{{ ('public/assets/images/bg_login.jpg') }}') no-repeat center center fixed;
      background-size: cover;
      position: relative;
    }

    .glass {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.25);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
    }

    .click-effect {
      position: absolute;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.5);
      pointer-events: none;
      animation: clickBurst 0.8s ease-out forwards;
      z-index: 1;
    }

    @keyframes clickBurst {
      0% {
        transform: scale(1);
        opacity: 0.8;
      }

      100% {
        transform: scale(8);
        opacity: 0;
      }
    }
  </style>
</head>

<body onclick="rippleEffect(event)">
  <div class="w-full max-w-md p-8 glass rounded-xl text-white z-10 relative">
    <h2 class="text-3xl font-bold text-center mb-6">Login JDIH</h2>

    @if ($errors->any())
    <div class="bg-red-100 text-red-700 text-sm rounded px-4 py-2 mb-4">
      {{ $errors->first() }}
    </div>
    @endif

    <form action="{{ route('login.process') }}" method="POST" class="space-y-4">
      @csrf

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm mb-1">Email</label>
        <input type="email" name="email" id="email" required
          class="w-full px-4 py-2 rounded bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-orange-400">
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block text-sm mb-1">Password</label>
        <input type="password" name="password" id="password" required
          class="w-full px-4 py-2 rounded bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-orange-400">
      </div>

    
      <!-- Submit -->
      <button type="submit"
        class="w-full bg-white text-orange-700 font-semibold py-2 rounded hover:bg-orange-100 transition">
        Login
      </button>

      <!-- Register link -->
      <p class="text-center text-sm mt-4">Don't have an account?
        <a href="#" class="text-white font-semibold hover:underline">Register</a>
      </p>
    </form>
  </div>

  <script>
    function rippleEffect(e) {
      const ripple = document.createElement("div");
      ripple.classList.add("click-effect");
      ripple.style.left = `${e.clientX - 10}px`;
      ripple.style.top = `${e.clientY - 10}px`;
      document.body.appendChild(ripple);
      ripple.addEventListener("animationend", () => {
        ripple.remove();
      });
    }
  </script>
</body>

</html>
