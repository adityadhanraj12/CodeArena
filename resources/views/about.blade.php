<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - CodeArena</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-50 min-h-screen flex flex-col font-sans text-slate-800">
    <x-user-navbar></x-user-navbar>

    <main class="flex-grow max-w-5xl mx-auto px-6 py-16 w-full">
        <!-- Hero Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-slate-900 mb-6 leading-tight">
                Empowering Developers Through <span class="bg-gradient-to-r from-teal-600 to-emerald-500 bg-clip-text text-transparent">CodeArena</span>
            </h1>
            <p class="text-slate-500 text-lg leading-relaxed">
                CodeArena is a premier testing platform designed for computer science students and software engineers to test, track, and master fundamental engineering concepts.
            </p>
        </div>

        <!-- Vision and Values -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20">
            <div>
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Our Mission</h2>
                <p class="text-slate-600 leading-relaxed mb-6">
                    We believe that deep, conceptual understanding is the foundation of excellent software engineering. CodeArena provides structured, real-world assessment quizzes across core disciplines like Data Structures, Operating Systems, Networks, and Database Systems.
                </p>
                <p class="text-slate-600 leading-relaxed">
                    By combining targeted questionnaires, instant performance scorecards, and verifiable completion certificates, we help students and junior developers evaluate their knowledge gaps and build confidence for technical interviews.
                </p>
            </div>
            <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-xl shadow-slate-100/50">
                <h3 class="text-lg font-bold text-slate-800 mb-6">Why Choose CodeArena?</h3>
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center text-teal-600 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-800 text-sm">1,300+ Verified Questions</h4>
                            <p class="text-xs text-slate-500 mt-1">Realistic scenarios crafted around actual university curricula and interview concepts.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center text-teal-600 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-800 text-sm">Interactive Player & Tracking</h4>
                            <p class="text-xs text-slate-500 mt-1">Seamless quiz-taking UI with dynamic progress feedback and profile dashboard histories.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center text-teal-600 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-800 text-sm">Verifiable Certifications</h4>
                            <p class="text-xs text-slate-500 mt-1">Download official, stylized completion certificates to display on your resume and LinkedIn.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team / Contact Link Callout -->
        <div class="bg-gradient-to-r from-teal-900 to-slate-900 text-white rounded-3xl p-8 sm:p-12 text-center shadow-xl">
            <h2 class="text-2xl sm:text-3xl font-extrabold mb-4">Have Questions or Suggestions?</h2>
            <p class="text-teal-100 max-w-xl mx-auto mb-8 text-sm sm:text-base leading-relaxed">
                We are constantly expanding our quiz pools and refining question explanations. If you would like to contribute or get in touch, contact us today!
            </p>
            <a href="/contact" class="inline-block bg-white hover:bg-teal-50 text-slate-900 font-bold px-8 py-3.5 rounded-full transition-all shadow-md shadow-black/10 hover:shadow-black/20 text-sm">
                Get In Touch
            </a>
        </div>
    </main>

    <x-footer-user></x-footer-user>
</body>
</html>
