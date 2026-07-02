<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password - CodeArena</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-50 min-h-screen flex flex-col font-sans text-slate-800">
  <x-user-navbar></x-user-navbar> 

  <main class="flex-grow flex items-center justify-center px-6 py-16">
    <div class="w-full max-w-md bg-white border border-slate-100 rounded-3xl shadow-xl shadow-slate-100/50 overflow-hidden">
      
      <!-- Top header branding -->
      <div class="bg-slate-900 px-8 py-10 text-center relative overflow-hidden">
        <div class="absolute -right-10 -top-10 w-40 h-40 rounded-full bg-teal-500/10 blur-2xl"></div>
        <div class="absolute -left-10 -bottom-10 w-40 h-40 rounded-full bg-emerald-500/10 blur-2xl"></div>
        
        <h2 class="text-2xl font-extrabold text-white relative z-10">Change Password</h2>
        <p class="text-slate-400 text-xs mt-2 relative z-10">Update your credentials to keep your account secure</p>
      </div>

      <!-- Form container -->
      <div class="p-8">
        
        <!-- Alerts & Errors -->
        @if(session('message-success'))
          <div class="mb-6 bg-emerald-50 border border-emerald-100 text-emerald-800 px-4 py-3 rounded-2xl flex items-center space-x-3 text-sm">
            <svg class="w-5 h-5 text-emerald-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span class="font-semibold">{{ session('message-success') }}</span>
          </div>
        @endif

        @if($errors->any())
          <div class="mb-6 bg-rose-50 border border-rose-100 text-rose-800 px-4 py-3 rounded-2xl text-xs space-y-1">
            @foreach($errors->all() as $error)
              <div class="flex items-start space-x-2">
                <span class="w-1.5 h-1.5 rounded-full bg-rose-500 mt-1 shrink-0"></span>
                <span>{{ $error }}</span>
              </div>
            @endforeach
          </div>
        @endif

        <form action="/user-change-password" method="POST" class="space-y-5">
          @csrf
          
          <div>
            <label class="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-2">Current Password</label>
            <input 
              type="password" 
              name="current_password" 
              required 
              class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-teal-500/20 focus:border-teal-500 focus:bg-white transition-all"
              placeholder="Enter current password"
            />
          </div>

          <div>
            <label class="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-2">New Password</label>
            <input 
              type="password" 
              name="new_password" 
              required 
              class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-teal-500/20 focus:border-teal-500 focus:bg-white transition-all"
              placeholder="Minimum 6 characters"
            />
          </div>

          <div>
            <label class="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-2">Confirm New Password</label>
            <input 
              type="password" 
              name="new_password_confirmation" 
              required 
              class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-teal-500/20 focus:border-teal-500 focus:bg-white transition-all"
              placeholder="Confirm new password"
            />
          </div>

          <button 
            type="submit" 
            class="w-full py-3.5 bg-gradient-to-r from-teal-600 to-emerald-500 hover:from-teal-700 hover:to-emerald-600 text-white font-bold rounded-xl transition-all shadow-md shadow-teal-500/10 hover:shadow-teal-500/20 text-sm cursor-pointer"
          >
            Update Password
          </button>
        </form>

        <div class="mt-6 text-center">
          <a href="/user-details" class="text-xs font-bold text-teal-600 hover:text-teal-700 transition-colors">
            Back to Dashboard
          </a>
        </div>
      </div>
    </div>
  </main>

  <x-footer-user></x-footer-user>
</body>
</html>
