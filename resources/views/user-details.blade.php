<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - CodeArena</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-50 min-h-screen flex flex-col font-sans text-slate-800">
  <x-user-navbar></x-user-navbar> 

  <main class="flex-grow max-w-4xl mx-auto px-6 py-12 w-full">
    
    <!-- Profile Card Header -->
    <div class="bg-white border border-slate-100 rounded-3xl p-6 sm:p-8 shadow-xl shadow-slate-100/50 mb-8 flex flex-col sm:flex-row items-center justify-between space-y-4 sm:space-y-0">
      <div class="flex items-center space-x-4">
        <div class="w-16 h-16 rounded-2xl bg-teal-50 text-teal-600 flex items-center justify-center text-2xl font-bold">
          {{ strtoupper(substr(session('user')->name, 0, 1)) }}
        </div>
        <div>
          <h1 class="text-2xl font-black text-slate-800">{{ session('user')->name }}</h1>
          <p class="text-sm text-slate-500">{{ session('user')->email }}</p>
        </div>
      </div>
      <div class="bg-slate-50 border border-slate-100 px-5 py-3 rounded-2xl text-center">
        <span class="text-slate-400 text-[10px] font-bold uppercase tracking-wider block">Total Attempts</span>
        <span class="text-2xl font-black text-slate-800 mt-1 block">{{ count($quizRecord) }}</span>
      </div>
    </div>

    <!-- History Section -->
    <div class="bg-white border border-slate-100 rounded-3xl shadow-xl shadow-slate-100/50 overflow-hidden">
      <div class="px-6 py-5 border-b border-slate-100">
        <h3 class="text-lg font-bold text-slate-800">Your Quiz History</h3>
        <p class="text-slate-400 text-xs">A record of your started and completed quizzes</p>
      </div>

      <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
          <thead>
            <tr class="bg-slate-50/50 border-b border-slate-100">
              <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-400 w-16">S. No</th>
              <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-400">Quiz Title</th>
              <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-400 w-40">Status</th>
              <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-400 w-44">Action</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-slate-100">
            @forelse($quizRecord as $key => $record)
              <tr class="hover:bg-slate-50/50 transition-colors">
                <td class="px-6 py-4 text-sm text-slate-500 font-semibold">{{ $key + 1 }}</td>
                <td class="px-6 py-4 text-sm text-slate-800 font-bold">{{ $record->name }}</td>
                <td class="px-6 py-4 text-sm">
                  @if($record->status == 2)
                    @php
                        $score = $record->getScorePercent();
                    @endphp
                    @if($score >= 70)
                      <span class="inline-flex items-center space-x-1.5 px-3 py-1 text-xs font-semibold text-emerald-700 bg-emerald-50 border border-emerald-100 rounded-full">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                        <span>Passed ({{ $score }}%)</span>
                      </span>
                    @else
                      <span class="inline-flex items-center space-x-1.5 px-3 py-1 text-xs font-semibold text-rose-700 bg-rose-50 border border-rose-100 rounded-full">
                        <span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span>
                        <span>Failed ({{ $score }}%)</span>
                      </span>
                    @endif
                  @else
                    <span class="inline-flex items-center space-x-1.5 px-3 py-1 text-xs font-semibold text-amber-700 bg-amber-50 border border-amber-100 rounded-full">
                      <span class="w-1.5 h-1.5 rounded-full bg-amber-400 animate-pulse"></span>
                      <span>In Progress</span>
                    </span>
                  @endif
                </td>
                <td class="px-6 py-4 text-sm">
                  @if($record->status == 2 && $record->getScorePercent() >= 70)
                    <a href="/certificate/{{ $record->id }}" target="_blank" class="inline-flex items-center space-x-1 text-teal-600 hover:text-teal-700 font-bold text-xs transition-colors">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                      <span>Certificate</span>
                    </a>
                  @else
                    <span class="text-slate-400 text-xs">-</span>
                  @endif
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="4" class="px-6 py-12 text-center text-slate-500 text-sm">
                  You haven't attempted any quizzes yet. <a href="/" class="text-teal-600 hover:text-teal-700 font-bold transition-colors">Find a quiz</a> to start!
                </td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </main>

  <x-footer-user></x-footer-user>
</body>
</html>