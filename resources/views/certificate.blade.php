<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate Preview - CodeArena</title>
    @vite('resources/css/app.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@500;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap');
        .cert-title {
            font-family: 'Cinzel', serif;
        }
        .cert-name {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>
<body class="bg-slate-900 min-h-screen flex flex-col font-sans text-slate-800">
    
    <!-- Top Action Bar -->
    <header class="bg-slate-950 border-b border-slate-800 px-6 py-4 sticky top-0 z-50 shadow-md">
        <div class="max-w-5xl mx-auto flex justify-between items-center">
            <a href="/user-details" class="inline-flex items-center space-x-2 text-slate-400 hover:text-white transition-colors text-sm font-bold">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                <span>Back to Dashboard</span>
            </a>
            
            <a href="/download-certificate" class="inline-flex items-center space-x-2 bg-teal-600 hover:bg-teal-700 text-white font-bold px-5 py-2.5 rounded-full transition-all shadow-md shadow-teal-500/10 hover:shadow-teal-500/20 text-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                <span>Download PDF Certificate</span>
            </a>
        </div>
    </header>

    <!-- Certificate Container -->
    <main class="flex-grow flex items-center justify-center p-8 overflow-auto">
        
        <div class="relative w-[842px] h-[595px] bg-white border-[16px] border-slate-900 p-8 shadow-2xl rounded-sm overflow-hidden flex flex-col justify-between box-border scale-90 sm:scale-100 transition-all origin-center">
            
            <!-- Elegant Inner Gold/Teal Border -->
            <div class="absolute inset-2 border border-teal-500 pointer-events-none"></div>
            <div class="absolute inset-3 border-2 border-emerald-500/30 pointer-events-none"></div>

            <!-- Corner Corner Decorations -->
            <div class="absolute top-4 left-4 w-12 h-12 border-t-2 border-l-2 border-teal-500"></div>
            <div class="absolute top-4 right-4 w-12 h-12 border-t-2 border-r-2 border-teal-500"></div>
            <div class="absolute bottom-4 left-4 w-12 h-12 border-b-2 border-l-2 border-teal-500"></div>
            <div class="absolute bottom-4 right-4 w-12 h-12 border-b-2 border-r-2 border-teal-500"></div>

            <!-- Watermark / Background Emblem -->
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 opacity-[0.02] pointer-events-none">
                <svg class="w-96 h-96 text-teal-600" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2L2 22h20L12 2zm0 3.99L19.53 19H4.47L12 5.99zM11 10v4h2v-4h-2zm0 6v2h2v-2h-2z"/>
                </svg>
            </div>

            <!-- Top Header Logo -->
            <div class="text-center mt-4">
                <div class="flex items-center justify-center space-x-2">
                    <!-- CS Code Icon -->
                    <div class="w-8 h-8 rounded-lg bg-teal-600 flex items-center justify-center text-white font-extrabold text-sm shadow-md shadow-teal-500/20">
                        &lt;/&gt;
                    </div>
                    <span class="text-xl font-black tracking-tight bg-gradient-to-r from-teal-600 to-emerald-500 bg-clip-text text-transparent">CodeArena</span>
                </div>
                <p class="text-[9px] uppercase tracking-[0.25em] text-slate-400 font-semibold mt-1">Academy of Computer Science & Engineering</p>
            </div>

            <!-- Certificate Heading -->
            <div class="text-center my-2">
                <h1 class="cert-title text-3xl font-extrabold tracking-[0.1em] text-slate-900">Certificate of Achievement</h1>
                <div class="flex items-center justify-center space-x-2 mt-1">
                    <span class="w-8 h-[1px] bg-slate-300"></span>
                    <span class="text-xs italic text-slate-400">This is proudly presented to</span>
                    <span class="w-8 h-[1px] bg-slate-300"></span>
                </div>
            </div>

            <!-- User Name Section -->
            <div class="text-center my-2">
                <h2 class="cert-name text-4xl font-extrabold italic text-teal-600 relative inline-block px-4">
                    {{ $data['name'] }}
                </h2>
                <div class="w-48 h-[2px] bg-gradient-to-r from-transparent via-teal-500 to-transparent mx-auto mt-2"></div>
            </div>

            <!-- Description Paragraph -->
            <div class="text-center max-w-xl mx-auto px-6">
                <p class="text-xs text-slate-500 leading-relaxed">
                    for successfully completing the advanced technical assessment in <br>
                    <strong class="text-slate-800 text-sm font-bold tracking-wide">{{ $data['quiz'] }}</strong> <br>
                    demonstrating proficiency in core computer science subjects, algorithms, and engineering design principles.
                </p>
            </div>

            <!-- Footer signatures and date -->
            <div class="flex justify-between items-end px-12 mb-6">
                <!-- Date Column -->
                <div class="text-center w-36">
                    <span class="block text-xs font-semibold text-slate-800 border-b border-slate-200 pb-1.5">{{ date('Y-m-d') }}</span>
                    <span class="block text-[8px] uppercase tracking-wider text-slate-400 mt-1 font-bold">Date of Issuance</span>
                </div>

                <!-- Certified Emblem -->
                <div class="relative -top-2">
                    <div class="w-16 h-16 rounded-full border-4 border-teal-500/20 bg-teal-50 flex items-center justify-center text-teal-600 shadow-sm relative">
                        <svg class="w-8 h-8 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Signature / ID Column -->
                <div class="text-center w-44">
                    <span class="block text-[10px] font-mono text-slate-700 border-b border-slate-200 pb-1.5">CA-{{ $data['record_id'] ?? 'TEMP' }}-{{ date('Y') }}</span>
                    <span class="block text-[8px] uppercase tracking-wider text-slate-400 mt-1 font-bold">Verification ID</span>
                </div>
            </div>

        </div>

    </main>

</body>
</html>