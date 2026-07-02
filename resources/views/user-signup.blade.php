<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - CodeArena</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-50 min-h-screen flex flex-col font-sans text-slate-800">
<x-user-navbar></x-user-navbar> 

<main class="flex-grow flex items-center justify-center px-6 py-12">
    <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-xl shadow-slate-100/50 w-full max-w-md">
        
        <div class="text-center mb-8">
            <h2 class="text-2xl font-extrabold text-slate-900 mb-1">Create Account</h2>
            <p class="text-slate-500 text-xs font-medium">Join us to test your skills and save your progress</p>
        </div>

        @error('user')
            <div class="text-rose-500 text-xs font-semibold mb-4 bg-rose-50 p-3 rounded-xl border border-rose-100">{{$message}}</div>
        @enderror

        <form action="/user-signup" method="post" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-slate-500 text-xs font-bold uppercase tracking-wider mb-2">User Name</label>
                <input 
                    type="text" 
                    id="name"
                    placeholder="Enter your name" 
                    name="name"
                    class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-teal-500/20 focus:border-teal-500 transition-all text-sm text-slate-800 placeholder-slate-400"
                    required
                >
                @error('name')
                    <div class="text-rose-500 text-xs font-semibold mt-1">{{$message}}</div>
                @enderror
            </div>

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
                <label for="password" class="block text-slate-500 text-xs font-bold uppercase tracking-wider mb-2">Password</label>
                <input 
                    type="password" 
                    id="password"
                    placeholder="Create a password" 
                    name="password"
                    class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-teal-500/20 focus:border-teal-500 transition-all text-sm text-slate-800 placeholder-slate-400"
                    required
                >
                @error('password')
                    <div class="text-rose-500 text-xs font-semibold mt-1">{{$message}}</div>
                @enderror
            </div>

            <div>
                <label for="password_confirmation" class="block text-slate-500 text-xs font-bold uppercase tracking-wider mb-2">Confirm Password</label>
                <input 
                    type="password" 
                    id="password_confirmation"
                    placeholder="Confirm your password" 
                    name="password_confirmation"
                    class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-teal-500/20 focus:border-teal-500 transition-all text-sm text-slate-800 placeholder-slate-400"
                    required
                >
            </div>

            <button type="submit" class="w-full py-3.5 mt-4 bg-gradient-to-r from-teal-600 to-emerald-500 hover:from-teal-700 hover:to-emerald-600 text-white font-bold rounded-2xl transition-all shadow-md shadow-teal-500/10 hover:shadow-teal-500/20 text-sm">
                Sign Up
            </button>
        </form>

        <p class="text-center text-slate-500 text-xs mt-6">
            Already have an account? <a href="/user-login" class="text-teal-600 hover:text-teal-700 font-bold transition-colors">Log in</a>
        </p>

    </div>
</main>

<x-footer-user></x-footer-user>
</body>
</html>