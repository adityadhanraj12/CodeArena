<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - CodeArena</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-50 min-h-screen flex flex-col font-sans text-slate-800">
    <x-user-navbar></x-user-navbar>

    <main class="flex-grow max-w-6xl mx-auto px-6 py-16 w-full">
        <!-- Header -->
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h1 class="text-4xl font-extrabold tracking-tight text-slate-900 mb-4">
                Get in <span class="bg-gradient-to-r from-teal-600 to-emerald-500 bg-clip-text text-transparent">Touch</span>
            </h1>
            <p class="text-slate-500 text-base">
                Have feedback, found a bug, or want to partner with us? Fill out the form below and we will get back to you shortly.
            </p>
        </div>

        <!-- Success Notification -->
        @if(session('message-success'))
        <div class="max-w-4xl mx-auto mb-8 w-full">
            <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 px-4 py-3 rounded-2xl flex items-center space-x-3 shadow-sm">
                <svg class="w-5 h-5 text-emerald-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span class="font-medium text-sm">{{session('message-success')}}</span>
            </div>
        </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 max-w-4xl mx-auto">
            <!-- Contact info cards -->
            <div class="lg:col-span-1 space-y-6">
                <div class="bg-white p-6 border border-slate-100 rounded-2xl shadow-sm">
                    <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center text-teal-600 mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="font-bold text-slate-800 text-sm mb-1">Email Support</h3>
                    <p class="text-xs text-slate-500 mb-3">Reach our support team directly.</p>
                    <a href="mailto:support@codearena.com" class="text-sm font-semibold text-teal-600 hover:text-teal-700 transition-colors">support@codearena.com</a>
                </div>

                <div class="bg-white p-6 border border-slate-100 rounded-2xl shadow-sm">
                    <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center text-teal-600 mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <h3 class="font-bold text-slate-800 text-sm mb-1">Our Location</h3>
                    <p class="text-xs text-slate-500 mb-3">Chandigarh University Campus</p>
                    <span class="text-sm font-semibold text-slate-700">Mohali, Punjab, India</span>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-2 bg-white p-8 border border-slate-100 rounded-2xl shadow-sm">
                <form action="/contact-submit" method="post" class="space-y-5">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-2">Your Name</label>
                            <input type="text" name="name" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-teal-500/20 focus:border-teal-500 focus:bg-white transition-all">
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-2">Your Email</label>
                            <input type="email" name="email" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-teal-500/20 focus:border-teal-500 focus:bg-white transition-all">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-2">Subject</label>
                        <input type="text" name="subject" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-teal-500/20 focus:border-teal-500 focus:bg-white transition-all">
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-2">Message</label>
                        <textarea name="message" rows="5" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-teal-500/20 focus:border-teal-500 focus:bg-white transition-all"></textarea>
                    </div>

                    <button type="submit" class="w-full py-3 bg-gradient-to-r from-teal-600 to-emerald-500 hover:from-teal-700 hover:to-emerald-600 text-white font-bold rounded-xl transition-all shadow-md shadow-teal-500/10 hover:shadow-teal-500/20 text-sm">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </main>

    <x-footer-user></x-footer-user>
</body>
</html>
