<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizzes in {{str_replace('-',' ', $category)}} - CodeArena</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-50 min-h-screen flex flex-col font-sans text-slate-800">
    <x-user-navbar></x-user-navbar>

    <main class="flex-grow max-w-7xl mx-auto px-6 py-12 w-full">
        <!-- Back Button -->
        <a href="/categories-list" class="text-teal-600 hover:text-teal-700 font-semibold text-sm transition-colors flex items-center space-x-1 mb-6">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span>Back to Categories</span>
        </a>

        <div class="mb-10">
            <span class="text-xs font-semibold uppercase tracking-wider text-teal-600 bg-teal-50 px-2.5 py-1 rounded-full">Category</span>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 mt-2">
                {{str_replace('-',' ', $category)}} Quizzes
            </h1>
            <p class="text-slate-500 text-sm mt-1">Select a quiz below to challenge your knowledge in this category.</p>
        </div>

        <!-- Quizzes Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($quizData as $item)
                <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <!-- Icon representation -->
                        <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center text-teal-600 mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <h3 class="text-lg font-bold text-slate-800 mb-1">{{$item->name}}</h3>
                        <p class="text-sm text-slate-500 mb-6 flex items-center space-x-1.5">
                            <span class="w-2 h-2 rounded-full bg-teal-500"></span>
                            <span>{{$item->mcq_count}} {{Str::plural('Question', $item->mcq_count)}}</span>
                        </p>
                    </div>

                    <a 
                        href="/start-quiz/{{$item->id}}/{{str_replace(' ','-', $item->name)}}" 
                        class="w-full text-center py-2.5 bg-teal-600 hover:bg-teal-700 text-white rounded-xl text-sm font-semibold transition-colors shadow-sm"
                    >
                        Attempt Quiz
                    </a>
                </div>
            @empty
                <div class="col-span-full bg-white rounded-2xl p-12 border border-dashed border-slate-200 text-center">
                    <p class="text-slate-500">No quizzes found for this category yet.</p>
                </div>
            @endforelse
        </div>
    </main>

    <x-footer-user></x-footer-user>
</body>
</html>