<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Quiz: {{ str_replace('-',' ', $quizName)}} - CodeArena</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-50 min-h-screen flex flex-col font-sans text-slate-800">
    <x-user-navbar></x-user-navbar>

    <main class="flex-grow flex items-center justify-center px-6 py-12">
        <div class="bg-white border border-slate-100 rounded-3xl shadow-xl shadow-slate-100/50 p-8 w-full max-w-lg text-center">
            
            <!-- Success/Status Alert -->
            @if(session('message-success'))
            <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 px-4 py-3 rounded-2xl flex items-center space-x-2 shadow-sm mb-6 text-left">
                <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span class="font-medium text-xs">{{session('message-success')}}</span>
            </div>
            @endif

            <!-- Quiz Header -->
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-teal-50 text-teal-600 mb-6 shadow-inner">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
            </div>
            
            <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mb-2">
                {{ str_replace('-',' ', $quizName)}}
            </h1>
            <p class="text-slate-500 text-sm mb-8">Test your expertise. Ready to see how much you know?</p>

            <!-- Quiz Details Grid -->
            <div class="grid grid-cols-2 gap-4 mb-8 bg-slate-50 p-4 rounded-2xl border border-slate-100">
                <div class="text-center">
                    <span class="block text-slate-400 text-xs font-semibold uppercase tracking-wider">Questions</span>
                    <span class="text-lg font-bold text-slate-800 mt-1 block">{{$quizCount}} Questions</span>
                </div>
                <div class="text-center border-l border-slate-200">
                    <span class="block text-slate-400 text-xs font-semibold uppercase tracking-wider">Time Limit</span>
                    <span class="text-lg font-bold text-slate-800 mt-1 block">Unlimited</span>
                </div>
            </div>

            <!-- Quiz Description Warning / Rules -->
            <div class="text-slate-500 text-sm mb-8 text-left space-y-2 bg-amber-50/50 border border-amber-100 p-4 rounded-2xl">
                <p class="font-semibold text-amber-800 flex items-center space-x-1">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                    <span>Important Guidelines:</span>
                </p>
                <ul class="list-disc list-inside text-xs text-amber-700 space-y-1 pl-1">
                    <li>Make sure to select one answer for each question.</li>
                    <li>Double check before proceeding as you cannot go back.</li>
                </ul>
            </div>

            <!-- Actions -->
            @if(session('user'))
                <a 
                    href="/mcq/{{session('firstMCQ')->id.'/'.$quizName}}" 
                    class="w-full inline-block py-3 bg-gradient-to-r from-teal-600 to-emerald-500 hover:from-teal-700 hover:to-emerald-600 text-white font-bold rounded-xl transition-all shadow-md shadow-teal-500/10 hover:shadow-teal-500/20 text-sm" 
                >
                    Start Quiz Now
                </a>
            @else
                <div class="flex flex-col space-y-3">
                    <p class="text-xs text-slate-400 font-medium">Please sign in or register to begin this quiz.</p>
                    <div class="flex space-x-4">
                        <a 
                            href="/user-login-quiz" 
                            class="flex-1 py-2.5 border border-teal-200 text-teal-700 hover:bg-teal-50 font-bold rounded-xl transition-colors text-sm text-center" 
                        >
                            Log In
                        </a>
                        <a 
                            href="/user-signup-quiz" 
                            class="flex-1 py-2.5 bg-teal-600 hover:bg-teal-700 text-white font-bold rounded-xl transition-colors text-sm text-center shadow-sm" 
                        >
                            Sign Up
                        </a>
                    </div>
                </div>
            @endif

        </div>
    </main>

    <x-footer-user></x-footer-user>
</body>
</html>