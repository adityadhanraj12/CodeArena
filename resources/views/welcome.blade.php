<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeArena - Challenge Your Skills</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-50 min-h-screen flex flex-col font-sans text-slate-800">
  <x-user-navbar></x-user-navbar> 

  <!-- Success Notification -->
  @if(session('message-success'))
  <div class="max-w-7xl mx-auto px-6 mt-4 w-full">
    <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 px-4 py-3 rounded-2xl flex items-center space-x-3 shadow-sm">
      <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
      <span class="font-medium text-sm">{{session('message-success')}}</span>
    </div>
  </div>
  @endif

  <!-- Main Hero Section -->
  <main class="flex-grow max-w-7xl mx-auto px-6 py-12 w-full">
    <div class="text-center max-w-2xl mx-auto mb-12">
      <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-slate-900 mb-4">
        Challenge and <span class="bg-gradient-to-r from-teal-600 to-emerald-500 bg-clip-text text-transparent">Grow Your Skills</span>
      </h1>
      <p class="text-slate-500 text-lg leading-relaxed">
        Choose a category, take interactive quizzes, and earn certificates to showcase your programming mastery.
      </p>

      <!-- Modern Search Bar -->
      <div class="mt-8 max-w-md mx-auto">
        <form action="search-quiz" method="get" class="relative">
          <input 
            class="w-full pl-5 pr-12 py-3.5 text-slate-700 bg-white border border-slate-200 rounded-full shadow-sm shadow-slate-100 focus:outline-none focus:ring-2 focus:ring-teal-500/20 focus:border-teal-500 transition-all text-sm" 
            type="text" 
            name="search"  
            placeholder="Search for quizzes..." 
          />
          <button type="submit" class="absolute right-2 top-2 p-2 bg-teal-600 hover:bg-teal-700 text-white rounded-full transition-colors shadow-sm">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
          </button>
        </form>
      </div>
    </div>

    <!-- Top Categories Grid -->
    <section class="mb-16">
      <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold text-slate-900">Explore Top Categories</h2>
        <a href="/categories-list" class="text-teal-600 hover:text-teal-700 font-semibold text-sm transition-colors flex items-center space-x-1">
          <span>View all</span>
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </a>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($categories as $category)
          <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
            <div>
              <!-- Circular Icon Badge -->
              <div class="w-12 h-12 rounded-xl bg-teal-50 flex items-center justify-center text-teal-600 mb-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
              </div>
              <h3 class="text-lg font-bold text-slate-800 mb-1">{{$category->name}}</h3>
              <p class="text-sm text-slate-500 mb-4">{{$category->quizzes_count}} Available {{Str::plural('Quiz', $category->quizzes_count)}}</p>
            </div>
            
            <a 
              href="user-quiz-list/{{$category->id}}/{{str_replace(' ','-',$category->name)}}" 
              class="w-full text-center py-2.5 bg-slate-50 hover:bg-teal-50 text-slate-700 hover:text-teal-700 rounded-xl text-sm font-semibold transition-all border border-slate-100 hover:border-teal-100"
            >
              Explore Quizzes
            </a>
          </div>
        @empty
          <div class="col-span-full bg-white rounded-2xl p-12 border border-dashed border-slate-200 text-center">
            <p class="text-slate-500">No categories found. Create some categories in the admin dashboard!</p>
          </div>
        @endforelse
      </div>
    </section>

    <!-- Top Quizzes Grid -->
    <section class="mb-8">
      <h2 class="text-2xl font-bold text-slate-900 mb-6">Trending Quizzes</h2>
      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @forelse($quizData as $item)
          <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 flex justify-between items-center">
            <div>
              <span class="text-xs font-semibold uppercase tracking-wider text-teal-600 bg-teal-50 px-2.5 py-1 rounded-full">Quiz</span>
              <h3 class="text-lg font-bold text-slate-800 mt-2 mb-1">{{$item->name}}</h3>
              <p class="text-sm text-slate-500 flex items-center space-x-1">
                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span>Practice Mode</span>
              </p>
            </div>
            
            <a 
              href="/start-quiz/{{$item->id}}/{{str_replace(' ','-', $item->name)}}" 
              class="px-5 py-2.5 bg-teal-600 hover:bg-teal-700 text-white rounded-xl text-sm font-semibold transition-colors shadow-sm"
            >
              Start Quiz
            </a>
          </div>
        @empty
          <div class="col-span-full bg-white rounded-2xl p-12 border border-dashed border-slate-200 text-center">
            <p class="text-slate-500">No quizzes available. Add quizzes in the admin panel!</p>
          </div>
        @endforelse
      </div>
    </section>
  </main>

  <x-footer-user></x-footer-user>
</body>
</html>