<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz: {{$quizName}} - CodeArena</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-50 min-h-screen flex flex-col font-sans text-slate-800">
    <x-user-navbar></x-user-navbar>
    
    @if(session('message'))
    <div class="max-w-3xl mx-auto px-6 mt-4 w-full">
        <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 px-4 py-3 rounded-2xl flex items-center space-x-2 shadow-sm">
            <span class="font-medium text-sm">{{session('message')}}</span>
        </div>
    </div>
    @endif

    <main class="flex-grow flex flex-col items-center justify-center px-6 py-12">
        <div class="w-full max-w-2xl bg-white border border-slate-100 rounded-3xl shadow-xl shadow-slate-100/50 p-6 sm:p-8">
            
            <!-- Quiz Info & Progress -->
            <div class="mb-8">
                <span class="text-xs font-bold uppercase tracking-wider text-teal-600 bg-teal-50 px-2.5 py-1 rounded-full">{{$quizName}}</span>
                
                <div class="flex justify-between items-end mt-4 mb-2">
                    <h2 class="text-sm font-semibold text-slate-400 uppercase tracking-wider">Progress</h2>
                    <span class="text-sm font-bold text-slate-700">
                        {{session('currentQuiz')['currentMcq']}} of {{session('currentQuiz')['totalMcq']}} Questions
                    </span>
                </div>

                <!-- Dynamic Progress Bar -->
                @php
                    $percent = (session('currentQuiz')['currentMcq'] / session('currentQuiz')['totalMcq']) * 100;
                @endphp
                <div class="w-full bg-slate-100 rounded-full h-2.5 overflow-hidden">
                    <div class="bg-gradient-to-r from-teal-500 to-emerald-400 h-2.5 rounded-full transition-all duration-500" style="width: {{ $percent }}%"></div>
                </div>
            </div>

            <!-- Question Card -->
            <div class="mb-6">
                <h3 class="text-slate-800 font-extrabold text-lg sm:text-xl leading-relaxed mb-6">{{$mcqData->question}}</h3>
                
                <form action="/submit-next/{{$mcqData->id}}" class="space-y-4" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$mcqData->id}}">
                    
                    <!-- Option A -->
                    <label for="option_1" class="group flex items-center justify-between p-4 border border-slate-200 hover:border-teal-400 hover:bg-slate-50/50 rounded-2xl cursor-pointer transition-all duration-200 shadow-sm has-[:checked]:border-teal-500 has-[:checked]:bg-teal-50/30 has-[:checked]:shadow-teal-500/5">
                        <div class="flex items-center flex-grow pr-4">
                            <span class="flex items-center justify-center w-8 h-8 rounded-full bg-slate-100 text-slate-500 font-bold text-sm shrink-0 transition-colors duration-200 group-hover:bg-teal-50 group-hover:text-teal-600 group-has-[:checked]:bg-teal-600 group-has-[:checked]:text-white">A</span>
                            <span class="text-slate-700 font-medium pl-3.5 transition-colors duration-200 group-hover:text-slate-900 group-has-[:checked]:text-teal-900 group-has-[:checked]:font-semibold">{{$mcqData->a}}</span>
                        </div>
                        <input id="option_1" class="w-5 h-5 text-teal-600 border-slate-300 focus:ring-teal-500 accent-teal-600 transition-transform duration-200 group-hover:scale-110 shrink-0" type="radio" value="a" name="option" required>
                    </label>

                    <!-- Option B -->
                    <label for="option_2" class="group flex items-center justify-between p-4 border border-slate-200 hover:border-teal-400 hover:bg-slate-50/50 rounded-2xl cursor-pointer transition-all duration-200 shadow-sm has-[:checked]:border-teal-500 has-[:checked]:bg-teal-50/30 has-[:checked]:shadow-teal-500/5">
                        <div class="flex items-center flex-grow pr-4">
                            <span class="flex items-center justify-center w-8 h-8 rounded-full bg-slate-100 text-slate-500 font-bold text-sm shrink-0 transition-colors duration-200 group-hover:bg-teal-50 group-hover:text-teal-600 group-has-[:checked]:bg-teal-600 group-has-[:checked]:text-white">B</span>
                            <span class="text-slate-700 font-medium pl-3.5 transition-colors duration-200 group-hover:text-slate-900 group-has-[:checked]:text-teal-900 group-has-[:checked]:font-semibold">{{$mcqData->b}}</span>
                        </div>
                        <input id="option_2" class="w-5 h-5 text-teal-600 border-slate-300 focus:ring-teal-500 accent-teal-600 transition-transform duration-200 group-hover:scale-110 shrink-0" type="radio" value="b" name="option">
                    </label>

                    <!-- Option C -->
                    <label for="option_3" class="group flex items-center justify-between p-4 border border-slate-200 hover:border-teal-400 hover:bg-slate-50/50 rounded-2xl cursor-pointer transition-all duration-200 shadow-sm has-[:checked]:border-teal-500 has-[:checked]:bg-teal-50/30 has-[:checked]:shadow-teal-500/5">
                        <div class="flex items-center flex-grow pr-4">
                            <span class="flex items-center justify-center w-8 h-8 rounded-full bg-slate-100 text-slate-500 font-bold text-sm shrink-0 transition-colors duration-200 group-hover:bg-teal-50 group-hover:text-teal-600 group-has-[:checked]:bg-teal-600 group-has-[:checked]:text-white">C</span>
                            <span class="text-slate-700 font-medium pl-3.5 transition-colors duration-200 group-hover:text-slate-900 group-has-[:checked]:text-teal-900 group-has-[:checked]:font-semibold">{{$mcqData->c}}</span>
                        </div>
                        <input id="option_3" class="w-5 h-5 text-teal-600 border-slate-300 focus:ring-teal-500 accent-teal-600 transition-transform duration-200 group-hover:scale-110 shrink-0" type="radio" value="c" name="option">
                    </label>

                    <!-- Option D -->
                    <label for="option_4" class="group flex items-center justify-between p-4 border border-slate-200 hover:border-teal-400 hover:bg-slate-50/50 rounded-2xl cursor-pointer transition-all duration-200 shadow-sm has-[:checked]:border-teal-500 has-[:checked]:bg-teal-50/30 has-[:checked]:shadow-teal-500/5">
                        <div class="flex items-center flex-grow pr-4">
                            <span class="flex items-center justify-center w-8 h-8 rounded-full bg-slate-100 text-slate-500 font-bold text-sm shrink-0 transition-colors duration-200 group-hover:bg-teal-50 group-hover:text-teal-600 group-has-[:checked]:bg-teal-600 group-has-[:checked]:text-white">D</span>
                            <span class="text-slate-700 font-medium pl-3.5 transition-colors duration-200 group-hover:text-slate-900 group-has-[:checked]:text-teal-900 group-has-[:checked]:font-semibold">{{$mcqData->d}}</span>
                        </div>
                        <input id="option_4" class="w-5 h-5 text-teal-600 border-slate-300 focus:ring-teal-500 accent-teal-600 transition-transform duration-200 group-hover:scale-110 shrink-0" type="radio" value="d" name="option">
                    </label>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full mt-6 py-3.5 bg-gradient-to-r from-teal-600 to-emerald-500 hover:from-teal-700 hover:to-emerald-600 text-white font-bold rounded-2xl transition-all shadow-md shadow-teal-500/10 hover:shadow-teal-500/20 text-sm">
                        Submit &amp; Next Question
                    </button>
                </form>
            </div>

        </div>
    </main>

    <x-footer-user></x-footer-user>
</body>
</html>