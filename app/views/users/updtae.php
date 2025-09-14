
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>


<body class="relative min-h-screen flex items-center justify-center font-sans bg-gradient-to-br from-fuchsia-900 via-blue-800 to-cyan-400 overflow-hidden">
  <!-- Hero Section with SVG Wave -->
  <div class="absolute inset-0 z-0">
    <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=1500&q=80" alt="Background" class="w-full h-full object-cover opacity-30" />
    <div class="absolute inset-0 bg-gradient-to-br from-fuchsia-900/80 via-blue-800/70 to-cyan-400/60"></div>
    <svg class="absolute bottom-0 left-0 w-full h-40" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="0.7" d="M0,224L48,197.3C96,171,192,117,288,117.3C384,117,480,171,576,197.3C672,224,768,224,864,197.3C960,171,1056,117,1152,117.3C1248,117,1344,171,1392,197.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
  </div>

  <div class="relative z-10 w-full max-w-lg animate-fadeIn">
    <div class="backdrop-blur-2xl bg-white/40 border border-white/60 shadow-2xl rounded-3xl px-12 py-14" style="box-shadow: 0 10px 40px 0 rgba(120,0,255,0.15), 0 2px 4px 0 rgba(0,0,0,0.10);">
      <div class="flex flex-col items-center mb-10">
        <div class="bg-fuchsia-600 rounded-full p-4 mb-4 shadow-lg animate-bounce">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
        </div>
        <h2 class="text-4xl font-extrabold text-fuchsia-800 drop-shadow text-center tracking-tight">Update Record</h2>
        <p class="text-cyan-100 mt-3 text-center text-lg">Edit your information below</p>
      </div>

      <form action="<?=site_url('users/update/'.$user['id'])?>" method="POST" class="space-y-8">
        <!-- First Name -->
        <div class="relative">
          <label class="block text-fuchsia-800 mb-1 font-bold text-lg">First Name</label>
          <div class="flex items-center bg-white/80 rounded-xl px-4 py-3 shadow-inner">
            <svg class="w-6 h-6 text-fuchsia-500 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
            <input type="text" name="first_name" value="<?= html_escape($user['first_name'])?>" required class="w-full bg-transparent focus:outline-none px-2 py-2 text-gray-800 placeholder-gray-400 text-lg">
          </div>
        </div>

        <!-- Last Name -->
        <div class="relative">
          <label class="block text-fuchsia-800 mb-1 font-bold text-lg">Last Name</label>
          <div class="flex items-center bg-white/80 rounded-xl px-4 py-3 shadow-inner">
            <svg class="w-6 h-6 text-fuchsia-500 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
            <input type="text" name="last_name" value="<?= html_escape($user['last_name'])?>" required class="w-full bg-transparent focus:outline-none px-2 py-2 text-gray-800 placeholder-gray-400 text-lg">
          </div>
        </div>

        <!-- Email -->
        <div class="relative">
          <label class="block text-fuchsia-800 mb-1 font-bold text-lg">Email Address</label>
          <div class="flex items-center bg-white/80 rounded-xl px-4 py-3 shadow-inner">
            <svg class="w-6 h-6 text-fuchsia-500 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16 12H8m8 0a4 4 0 11-8 0 4 4 0 018 0zm0 0v1a2 2 0 01-2 2H10a2 2 0 01-2-2v-1" /></svg>
            <input type="email" name="email" value="<?= html_escape($user['email'])?>" required class="w-full bg-transparent focus:outline-none px-2 py-2 text-gray-800 placeholder-gray-400 text-lg">
          </div>
        </div>

        <!-- Button -->
        <button type="submit" class="w-full bg-gradient-to-r from-fuchsia-600 to-cyan-500 hover:from-fuchsia-700 hover:to-cyan-600 text-white font-extrabold py-4 rounded-xl shadow-xl transition duration-200 text-xl tracking-wide mt-2 animate-fadeIn">
          <span class="inline-flex items-center justify-center gap-2">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
            Update
          </span>
        </button>
      </form>
    </div>
  </div>

  <!-- Custom Animations -->
  <style>
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .animate-fadeIn {
      animation: fadeIn 1s cubic-bezier(.4,0,.2,1);
    }
    @keyframes spin-slow {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    .animate-spin-slow {
      animation: spin-slow 4s linear infinite;
    }
    .animate-bounce {
      animation: bounce 1.5s infinite;
    }
    @keyframes bounce {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }
  </style>
</body>
</html>



edited

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update User - Vintage Style</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Special+Elite&family=EB+Garamond:wght@500&display=swap" rel="stylesheet">
</head>

<body class="min-h-screen flex items-center justify-center font-serif bg-gradient-to-b from-[#f5f1e6] to-[#e0d4c3] text-gray-800 relative">
  <!-- Background Texture -->
  <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/paper-fibers.png')] opacity-30"></div>

  <!-- Vintage Frame -->
  <div class="relative z-10 w-full max-w-xl px-6 animate-fadeIn">
    <div class="bg-[#fdfaf5] border-4 border-[#4a3728] rounded-2xl shadow-2xl relative overflow-hidden">
      <!-- Inner Border -->
      <div class="absolute inset-2 border-2 border-[#8b6b4f] rounded-xl pointer-events-none"></div>

      <div class="px-10 py-12 relative z-10">
        <!-- Header -->
        <div class="flex flex-col items-center mb-8">
          <div class="bg-[#8b6b4f] rounded-full p-4 mb-4 shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-[#fdfaf5]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
          </div>
          <h2 class="text-3xl font-bold text-[#4a3728] font-['Special_Elite'] tracking-wide">Update User</h2>
          <p class="text-[#6b5a4a] mt-2 text-center italic font-['EB_Garamond']">Modify your details below</p>
        </div>

        <!-- Form -->
        <form action="<?= site_url('users/update/'.$user['id']) ?>" method="POST" class="space-y-6">
          <!-- First Name -->
          <div>
            <label class="block text-[#4a3728] mb-1 font-bold font-['EB_Garamond']">First Name</label>
            <input type="text" name="first_name" value="<?= html_escape($user['first_name'])?>" required
              class="w-full border border-[#b0977b] bg-[#fdfaf5] px-4 py-2 rounded-md shadow-inner focus:ring-2 focus:ring-[#8b6b4f] placeholder-gray-500">
          </div>

          <!-- Last Name -->
          <div>
            <label class="block text-[#4a3728] mb-1 font-bold font-['EB_Garamond']">Last Name</label>
            <input type="text" name="last_name" value="<?= html_escape($user['last_name'])?>" required
              class="w-full border border-[#b0977b] bg-[#fdfaf5] px-4 py-2 rounded-md shadow-inner focus:ring-2 focus:ring-[#8b6b4f] placeholder-gray-500">
          </div>

          <!-- Email -->
          <div>
            <label class="block text-[#4a3728] mb-1 font-bold font-['EB_Garamond']">Email</label>
            <input type="email" name="email" value="<?= html_escape($user['email'])?>" required
              class="w-full border border-[#b0977b] bg-[#fdfaf5] px-4 py-2 rounded-md shadow-inner focus:ring-2 focus:ring-[#8b6b4f] placeholder-gray-500">
          </div>

          <!-- Buttons -->
          <div class="flex justify-between gap-4 pt-2">
            <a href="<?= site_url('users'); ?>"
              class="w-1/2 bg-gray-500 hover:bg-gray-600 text-[#fdfaf5] font-bold py-3 rounded-md shadow-lg transition duration-300 font-['Special_Elite'] tracking-wide text-center">
              CANCEL
            </a>
            <button type="submit"
              class="w-1/2 bg-[#8b6b4f] hover:bg-[#6e523d] text-[#fdfaf5] font-bold py-3 rounded-md shadow-lg transition duration-300 font-['Special_Elite'] tracking-wide">
              UPDATE
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Vintage Animations -->
  <style>
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .animate-fadeIn {
      animation: fadeIn 1.2s ease-out;
    }
  </style>
</body>
</html>
