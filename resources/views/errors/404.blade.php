<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found - CodeArena</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-50 min-h-screen flex flex-col font-sans text-slate-800">
    <x-user-navbar></x-user-navbar>

    <main class="flex-grow flex items-center justify-center px-6 py-24">
        <div class="text-center max-w-md mx-auto">
            <!-- 404 Badge -->
            <div class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-teal-50 text-teal-600 mb-6 animate-bounce">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                </svg>
            </div>

            <!-- Title -->
            <h1 class="text-6xl font-extrabold text-slate-900 tracking-tight mb-4">404</h1>
            <h2 class="text-2xl font-bold text-slate-800 mb-4">Page Not Found</h2>
            <p class="text-slate-500 text-sm leading-relaxed mb-8">
                Oops! The page you are looking for doesn't exist or has been moved. Let's get you back on track.
            </p>

            <!-- Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="/" class="w-full sm:w-auto px-6 py-3 bg-gradient-to-r from-teal-600 to-emerald-500 hover:from-teal-700 hover:to-emerald-600 text-white font-bold rounded-xl transition-all shadow-md shadow-teal-500/10 hover:shadow-teal-500/20 text-sm">
                    Go Back Home
                </a>
                <a href="https://github.com/adityadhanraj12" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto px-6 py-3 bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold rounded-xl transition-all text-sm flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482C19.138 20.197 22 16.44 22 12.017 22 6.484 17.522 2 12 2z"></path></svg>
                    Visit My GitHub
                </a>
            </div>
        </div>
    </main>

    <x-footer-user></x-footer-user>
</body>
</html>
