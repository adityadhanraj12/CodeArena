<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Results - CodeArena</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-50 min-h-screen flex flex-col font-sans text-slate-800">
  <x-user-navbar></x-user-navbar> 

  <main class="flex-grow flex flex-col items-center justify-center px-6 py-12">
    <div class="w-full max-w-2xl bg-white border border-slate-100 rounded-3xl shadow-xl shadow-slate-100/50 p-6 sm:p-8">
        
        <!-- Results Summary Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-extrabold text-slate-900 mb-2">Quiz Completed!</h1>
            <p class="text-slate-500 text-sm">Here is a breakdown of your performance.</p>
        </div>

        @php
            $totalQuestions = count($resultData);
            $scorePercent = $totalQuestions > 0 ? round(($correctAnswers / $totalQuestions) * 100) : 0;
            $passed = $scorePercent >= 70;
        @endphp

        <!-- Scoreboard Card -->
        <div class="bg-slate-50 border border-slate-100 rounded-2xl p-6 mb-8 text-center flex flex-col items-center">
            <div class="w-24 h-24 rounded-full flex items-center justify-center mb-4 {{ $passed ? 'bg-emerald-50 text-emerald-600 border-2 border-emerald-200' : 'bg-rose-50 text-rose-600 border-2 border-rose-200' }}">
                <div class="text-center">
                    <span class="text-2xl font-black block">{{ $scorePercent }}%</span>
                    <span class="text-[10px] uppercase font-bold tracking-wider text-slate-400">Score</span>
                </div>
            </div>
            
            <h3 class="text-xl font-bold text-slate-800 mb-1">
                You answered {{ $correctAnswers }} out of {{ $totalQuestions }} correctly
            </h3>
            
            <span class="text-xs font-semibold px-3 py-1 rounded-full {{ $passed ? 'bg-emerald-100 text-emerald-800' : 'bg-rose-100 text-rose-800' }}">
                {{ $passed ? 'Passed (>= 70%)' : 'Failed (< 70%)' }}
            </span>
        </div>

        <!-- Certificate View/Download -->
        @if($passed)
        <div class="bg-gradient-to-r from-teal-600 to-emerald-500 rounded-2xl p-6 text-white text-center mb-8 shadow-md shadow-teal-500/10 relative overflow-hidden">
            <div class="absolute -right-10 -bottom-10 opacity-10">
                <svg class="w-40 h-40" fill="currentColor" viewBox="0 0 20 20"><path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.714l-.757.324 3.373 1.53a1.001 1.001 0 01.357.258l3.39-1.453a1 1 0 000-1.84l-7-3zM14 9.528v-1.39l.24-.103a1 1 0 01.89 1.714l-.63.27a1 1 0 01-.5-.494zm-5.74.306l-5.69-2.44v5.334a1 1 0 00.596.914l5.484 2.35a1 1 0 00.796-.138c.06-.042.11-.09.153-.146a1 1 0 01-.19-.48l-.153-1.07zm3.146.069a1 1 0 01.19.48l.153 1.07 4.902-2.101a1 1 0 00.596-.914V7.394l-5.841 2.503z"></path></svg>
            </div>
            <h4 class="text-lg font-bold mb-1">Congratulations! You earned a Certificate!</h4>
            <p class="text-teal-100 text-xs mb-4">Your knowledge has met the passing criteria. View your custom certificate now.</p>
            <a 
                href="/certificate" 
                class="inline-block px-6 py-2 bg-white text-teal-700 hover:bg-slate-50 font-bold rounded-xl text-xs tracking-wider transition-all shadow"
            >
                View Certificate
            </a>
        </div>
        @endif

        <!-- Question breakdown -->
        <div>
            <h3 class="text-sm font-bold text-slate-400 uppercase tracking-wider mb-4">Detailed Breakdown</h3>
            
            <div class="divide-y divide-slate-100">
                @foreach($resultData as $key => $item)
                    <div class="py-4 flex items-start space-x-4">
                        <span class="w-6 h-6 rounded-full bg-slate-100 flex items-center justify-center text-xs font-bold text-slate-500 shrink-0">
                            {{ $key + 1 }}
                        </span>
                        <div class="flex-grow">
                            <p class="text-slate-800 text-sm font-semibold leading-relaxed">{{ $item->question }}</p>
                        </div>
                        <div class="shrink-0">
                            @if($item->is_correct)
                                <span class="inline-flex items-center space-x-1 text-xs font-semibold text-emerald-600 bg-emerald-50 border border-emerald-100 px-2.5 py-1 rounded-full">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    <span>Correct</span>
                                </span>
                            @else
                                <span class="inline-flex items-center space-x-1 text-xs font-semibold text-rose-600 bg-rose-50 border border-rose-100 px-2.5 py-1 rounded-full">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12"></path></svg>
                                    <span>Incorrect</span>
                                </span>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Back Home Link -->
        <div class="mt-8 pt-6 border-t border-slate-100 text-center">
            <a href="/" class="text-teal-600 hover:text-teal-700 text-sm font-semibold transition-colors">
                Back to Home Page
            </a>
        </div>

    </div>
  </main>

  <x-footer-user></x-footer-user>
</body>
</html>