<main class="bg-slate-900 min-h-screen relative flex items-center justify-center py-20 px-4 overflow-hidden">

    <div class="absolute inset-0 opacity-20 pointer-events-none" style="background-image: radial-gradient(#3b82f6 1px, transparent 1px); background-size: 32px 32px;"></div>
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[500px] bg-blue-600/10 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="relative z-10 w-full max-w-3xl">

        <div class="text-center mb-10">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-600 to-indigo-600 shadow-lg shadow-blue-500/30 mb-6 text-white transform -rotate-6">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
            </div>
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 tracking-tight">Unlock your <span class="text-blue-400">Writer</span> Profile</h1>
            <p class="text-slate-400 text-lg max-w-xl mx-auto">
                Join thousands of developers sharing their knowledge. Upgrade today to start publishing articles and building your personal brand.
            </p>
        </div>

        <div class="bg-slate-800 rounded-2xl shadow-2xl border border-slate-700 overflow-hidden">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-px bg-slate-700/50">
                <div class="bg-slate-800 p-8 hover:bg-slate-750 transition duration-300">
                    <div class="w-10 h-10 bg-blue-500/10 rounded-lg flex items-center justify-center text-blue-400 mb-4 border border-blue-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                    </div>
                    <h3 class="font-bold text-white text-lg mb-2">Rich Markdown Editor</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Write in Markdown with live preview, syntax highlighting for 50+ languages, and drag-and-drop image uploads.</p>
                </div>

                <div class="bg-slate-800 p-8 hover:bg-slate-750 transition duration-300">
                    <div class="w-10 h-10 bg-purple-500/10 rounded-lg flex items-center justify-center text-purple-400 mb-4 border border-purple-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    </div>
                    <h3 class="font-bold text-white text-lg mb-2">Audience Analytics</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Track views, reads, and engagement on your articles. Understand what topics resonate with your audience.</p>
                </div>

                <div class="bg-slate-800 p-8 hover:bg-slate-750 transition duration-300">
                    <div class="w-10 h-10 bg-emerald-500/10 rounded-lg flex items-center justify-center text-emerald-400 mb-4 border border-emerald-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="font-bold text-white text-lg mb-2">Build a Following</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Readers can follow your profile. We notify them whenever you publish something new.</p>
                </div>

                <div class="bg-slate-800 p-8 hover:bg-slate-750 transition duration-300">
                    <div class="w-10 h-10 bg-orange-500/10 rounded-lg flex items-center justify-center text-orange-400 mb-4 border border-orange-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="font-bold text-white text-lg mb-2">It's Free. Forever.</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">No hidden fees. StackWrite is open source and community driven. You own your content.</p>
                </div>
            </div>

            <div class="p-8 bg-slate-900/50 border-t border-slate-700">
                <form action="upgrade-role" method="POST">
                    <input type="hidden" name="csrf_token" value="abc123xyz">
                    <input type="hidden" name="action" value="confirm_upgrade">

                    <div class="mb-6">
                        <label class="flex items-start cursor-pointer group">
                            <div class="relative flex items-center">
                                <input type="checkbox" required class="peer h-5 w-5 cursor-pointer appearance-none rounded border border-slate-600 bg-slate-800 checked:bg-blue-600 checked:border-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-offset-0 transition-all">
                                <svg class="pointer-events-none absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-3.5 h-3.5 text-white opacity-0 peer-checked:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <span class="ml-3 text-sm text-slate-400 group-hover:text-slate-300 transition">
                                I agree to follow the <a href="#" class="text-blue-400 hover:underline">Community Guidelines</a> and understand that hate speech or plagiarism will result in a ban.
                            </span>
                        </label>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <button type="submit" class="flex-1 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-bold py-4 rounded-xl shadow-lg shadow-blue-600/20 transition transform hover:-translate-y-0.5">
                            Yes, Upgrade to Author
                        </button>
                        <a href="profile" class="sm:w-32 bg-slate-800 hover:bg-slate-700 text-slate-300 font-medium py-4 rounded-xl text-center border border-slate-700 transition">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>

        </div>

        <p class="text-center text-slate-500 text-sm mt-8">
            Already an author on another platform? <a href="contact" class="text-blue-400 hover:underline">Contact us</a> for import options.
        </p>

    </div>
</main>