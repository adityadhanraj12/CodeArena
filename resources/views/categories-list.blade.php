<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Categories - CodeArena</title>
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

  <main class="flex-grow max-w-7xl mx-auto px-6 py-12 w-full">
    <div class="text-center max-w-2xl mx-auto mb-12">
      <h1 class="text-4xl font-extrabold tracking-tight text-slate-900 mb-4">
        Explore <span class="bg-gradient-to-r from-teal-600 to-emerald-500 bg-clip-text text-transparent">Categories</span>
      </h1>
      <p class="text-slate-500 text-base">
        Browse categories to find quizzes that match your interests and test your knowledge.
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

    <!-- Categories Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      @forelse($categories as $category)
        <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
          <div>
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

    <!-- Pagination -->
    @if ($categories->hasPages())
    <div class="mt-12 flex flex-col items-center justify-center gap-3.5 bg-white border border-slate-100 rounded-2xl p-5 shadow-sm max-w-md mx-auto w-full">
      <!-- Showing Results Text -->
      <div class="text-sm text-slate-500 font-medium text-center">
        Showing <span class="font-bold text-slate-800">{{ $categories->firstItem() }}</span> to 
        <span class="font-bold text-slate-800">{{ $categories->lastItem() }}</span> of 
        <span class="font-bold text-slate-800">{{ $categories->total() }}</span> results
      </div>

      <!-- Pagination Buttons -->
      <div class="flex items-center space-x-1.5">
        {{-- Previous Page Link --}}
        @if ($categories->onFirstPage())
          <span class="flex items-center justify-center w-9 h-9 rounded-xl border border-slate-100 text-slate-300 cursor-not-allowed transition-all">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
          </span>
        @else
          <a href="{{ $categories->previousPageUrl() }}" class="flex items-center justify-center w-9 h-9 rounded-xl border border-slate-200 text-slate-600 hover:border-teal-500 hover:text-teal-600 hover:bg-teal-50/20 transition-all shadow-sm">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
          </a>
        @endif

        {{-- Page Numbers --}}
        @for ($i = 1; $i <= $categories->lastPage(); $i++)
          @if ($i == $categories->currentPage())
            <span class="flex items-center justify-center w-9 h-9 rounded-xl bg-gradient-to-r from-teal-600 to-emerald-500 text-white font-bold text-sm shadow-md shadow-teal-500/10">
              {{ $i }}
            </span>
          @else
            <a href="{{ $categories->url($i) }}" class="flex items-center justify-center w-9 h-9 rounded-xl border border-slate-200 text-slate-600 hover:border-teal-500 hover:text-teal-600 hover:bg-teal-50/20 font-semibold text-sm transition-all shadow-sm">
              {{ $i }}
            </a>
          @endif
        @endfor

        {{-- Next Page Link --}}
        @if ($categories->hasMorePages())
          <a href="{{ $categories->nextPageUrl() }}" class="flex items-center justify-center w-9 h-9 rounded-xl border border-slate-200 text-slate-600 hover:border-teal-500 hover:text-teal-600 hover:bg-teal-50/20 transition-all shadow-sm">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
          </a>
        @else
          <span class="flex items-center justify-center w-9 h-9 rounded-xl border border-slate-100 text-slate-300 cursor-not-allowed transition-all">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
          </span>
        @endif
      </div>
    </div>
    @endif
  </main>

  <x-footer-user></x-footer-user>
</body>
</html>