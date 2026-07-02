<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CodeArena</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-50 min-h-screen flex flex-col font-sans text-slate-800">
<x-user-navbar></x-user-navbar> 

<main class="flex-grow flex items-center justify-center px-6 py-12">
    <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-xl shadow-slate-100/50 w-full max-w-md">

        <!-- Errors / Success Alert -->
        @if(session('message-error'))
        <div class="bg-rose-50 border border-rose-200 text-rose-800 px-4 py-3 rounded-2xl flex items-center space-x-2 shadow-sm mb-6 text-xs font-semibold">
            <svg class="w-4 h-4 text-rose-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
            <span>{{session('message-error')}}</span>
        </div>
        @endif

        @if(session('message-success'))
        <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 px-4 py-3 rounded-2xl flex items-center space-x-2 shadow-sm mb-6 text-xs font-semibold">
            <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span>{{session('message-success')}}</span>
        </div>
        @endif

        <div class="text-center mb-8">
            <h2 class="text-2xl font-extrabold text-slate-900 mb-1">Welcome Back</h2>
            <p class="text-slate-500 text-xs font-medium">Log in to track your scores and attempt new quizzes</p>
        </div>

        @error('user')
            <div class="text-rose-500 text-xs font-semibold mb-4 bg-rose-50 p-3 rounded-xl border border-rose-100">{{$message}}</div>
        @enderror

        <form action="/user-login" method="post" class="space-y-5">
            @csrf
        
            <div>
                <label for="email" class="block text-slate-500 text-xs font-bold uppercase tracking-wider mb-2">User Email</label>
                <input 
                    type="email" 
                    id="email"
                    placeholder="name@example.com" 
                    name="email"
                    class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-teal-500/20 focus:border-teal-500 transition-all text-sm text-slate-800 placeholder-slate-400"
                    required
                >
                @error('email')
                    <div class="text-rose-500 text-xs font-semibold mt-1">{{$message}}</div>
                @enderror
            </div>

            <div>
                <div class="flex justify-between items-center mb-2">
                    <label for="password" class="block text-slate-500 text-xs font-bold uppercase tracking-wider">Password</label>
                    <a href="user-forgot-password" class="text-teal-600 hover:text-teal-700 text-xs font-semibold transition-colors">Forgot Password?</a>
                </div>
                <input 
                    type="password" 
                    id="password"
                    placeholder="Enter password" 
                    name="password"
                    class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-teal-500/20 focus:border-teal-500 transition-all text-sm text-slate-800 placeholder-slate-400"
                    required
                >
                @error('password')
                    <div class="text-rose-500 text-xs font-semibold mt-1">{{$message}}</div>
                @enderror
            </div>

            <button type="submit" class="w-full py-3.5 mt-2 bg-gradient-to-r from-teal-600 to-emerald-500 hover:from-teal-700 hover:to-emerald-600 text-white font-bold rounded-2xl transition-all shadow-md shadow-teal-500/10 hover:shadow-teal-500/20 text-sm">
                Log In
            </button>
        </form>

        <p class="text-center text-slate-500 text-xs mt-6">
            Don't have an account? <a href="/user-signup" class="text-teal-600 hover:text-teal-700 font-bold transition-colors">Sign up</a>
        </p>

    </div>
</main>

<x-footer-user></x-footer-user>
</body>
</html>