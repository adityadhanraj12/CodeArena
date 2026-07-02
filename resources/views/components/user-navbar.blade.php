<nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-100 px-6 py-4 shadow-sm">
  <div class="max-w-7xl mx-auto flex justify-between items-center">
    <!-- Logo -->
    <a href="/" class="text-2xl font-extrabold tracking-tight bg-gradient-to-r from-teal-600 to-emerald-500 bg-clip-text text-transparent hover:opacity-90 transition-all cursor-pointer">
      CodeArena
    </a>
    
    <!-- Navigation Links -->
    <div class="flex items-center space-x-6">
      <a class="text-slate-600 hover:text-teal-600 font-medium transition-colors" href="/">Home</a>
      <a class="text-slate-600 hover:text-teal-600 font-medium transition-colors" href="/categories-list">Categories</a>
      
      @if(session('user'))
        <div class="relative inline-block text-left" id="user-dropdown-container">
          <!-- Dropdown Trigger Button -->
          <button 
            id="dropdownButton" 
            class="flex items-center space-x-2 bg-slate-50 border border-slate-100 hover:border-teal-200 px-4 py-2 rounded-full text-slate-700 hover:text-teal-600 font-semibold transition-all shadow-sm cursor-pointer focus:outline-none"
          >
            <span class="w-2 h-2 rounded-full bg-teal-500 animate-pulse"></span>
            <span>{{session('user')->name}}</span>
            <svg class="w-4 h-4 text-slate-400 group-hover:text-teal-600 transition-transform duration-200" id="dropdownArrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>

          <!-- Dropdown Menu -->
          <div 
            id="dropdownMenu" 
            class="absolute right-0 mt-2.5 w-56 origin-top-right rounded-2xl bg-white border border-slate-100 shadow-xl shadow-slate-100/55 py-2 focus:outline-none transition-all duration-200 scale-95 opacity-0 pointer-events-none"
          >
            <a href="/user-details" class="flex items-center px-4 py-2.5 text-sm text-slate-700 hover:bg-slate-50 hover:text-teal-600 font-medium transition-all">
              <svg class="w-4 h-4 mr-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
              My Dashboard
            </a>

            <a href="/user-change-password" class="flex items-center px-4 py-2.5 text-sm text-slate-700 hover:bg-slate-50 hover:text-teal-600 font-medium transition-all">
              <svg class="w-4 h-4 mr-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
              Change Password
            </a>
            <hr class="border-slate-100 my-1">
            <a href="/user-logout" class="flex items-center px-4 py-2.5 text-sm text-red-600 hover:bg-red-50 font-medium transition-all">
              <svg class="w-4 h-4 mr-3 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
              Logout
            </a>
          </div>

          <script>
            document.addEventListener('DOMContentLoaded', () => {
              const btn = document.getElementById('dropdownButton');
              const menu = document.getElementById('dropdownMenu');
              const arrow = document.getElementById('dropdownArrow');

              btn.addEventListener('click', (e) => {
                e.stopPropagation();
                const isHidden = menu.classList.contains('opacity-0');
                if (isHidden) {
                  menu.classList.remove('scale-95', 'opacity-0', 'pointer-events-none');
                  menu.classList.add('scale-100', 'opacity-100');
                  arrow.classList.add('rotate-180');
                } else {
                  menu.classList.add('scale-95', 'opacity-0', 'pointer-events-none');
                  menu.classList.remove('scale-100', 'opacity-100');
                  arrow.classList.remove('rotate-180');
                }
              });

              document.addEventListener('click', () => {
                menu.classList.add('scale-95', 'opacity-0', 'pointer-events-none');
                menu.classList.remove('scale-100', 'opacity-100');
                arrow.classList.remove('rotate-180');
              });
            });
          </script>
        </div>
      @else
        <a class="text-slate-600 hover:text-teal-600 font-medium transition-colors" href="/user-login">Login</a>
        <a class="bg-gradient-to-r from-teal-600 to-emerald-500 hover:from-teal-700 hover:to-emerald-600 text-white font-medium px-5 py-2 rounded-full transition-all shadow-md shadow-teal-500/10 hover:shadow-teal-500/20 text-sm" href="/user-signup">Signup</a>
      @endif
    </div>
  </div>
</nav>