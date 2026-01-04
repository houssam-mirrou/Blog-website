<div class="relative bg-slate-900 border-b border-slate-800 py-12">
    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#3b82f6 1px, transparent 1px); background-size: 24px 24px;"></div>
    
    <div class="container mx-auto px-6 relative z-10 flex flex-col md:flex-row justify-between items-center gap-6">
        <div>
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">Developer Discussions</h1>
            <p class="text-slate-400 text-lg">Ask questions, share projects, and connect with the community.</p>
        </div>
        <button class="bg-blue-600 hover:bg-blue-500 text-white px-6 py-3 rounded-lg font-bold transition shadow-lg shadow-blue-500/20 flex items-center group">
            <svg class="w-5 h-5 mr-2 group-hover:rotate-90 transition transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            Start New Discussion
        </button>
    </div>
</div>

<main class="bg-slate-900 min-h-screen container mx-auto px-6 py-8 flex flex-col lg:flex-row gap-8">

    <div class="lg:w-3/4">

        <div class="flex gap-2 overflow-x-auto pb-4 mb-4 no-scrollbar">
            <button class="whitespace-nowrap px-4 py-2 bg-slate-800 text-white border border-slate-700 rounded-full text-sm font-medium shadow-md">Newest</button>
            <button class="whitespace-nowrap px-4 py-2 bg-slate-900 text-slate-400 border border-slate-700 rounded-full text-sm font-medium hover:bg-slate-800 hover:text-white transition">Top this week</button>
            <button class="whitespace-nowrap px-4 py-2 bg-slate-900 text-slate-400 border border-slate-700 rounded-full text-sm font-medium hover:bg-slate-800 hover:text-white transition">Unanswered</button>
        </div>

        <div class="bg-slate-800/50 p-6 rounded-xl shadow-lg border border-slate-700 border-l-4 border-l-blue-500 mb-6 hover:border-slate-600 transition cursor-pointer group relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500/5 rounded-full blur-2xl -mr-10 -mt-10"></div>
            
            <div class="flex items-start gap-4 relative z-10">
                <div class="shrink-0">
                    <img src="https://ui-avatars.com/api/?name=Admin&background=0f172a&color=3b82f6" class="w-12 h-12 rounded-full border-2 border-slate-700" alt="User">
                </div>
                <div class="flex-1">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="bg-blue-500/10 text-blue-400 border border-blue-500/20 text-[10px] font-bold px-2 py-0.5 rounded uppercase tracking-wide">Official</span>
                        <span class="text-slate-500 text-xs">Posted by <span class="text-blue-400 font-semibold">Admin</span> • 1 hour ago</span>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2 group-hover:text-blue-400 transition">Welcome to the StackWrite Community! Read the guidelines.</h3>
                    <p class="text-slate-400 text-sm line-clamp-2 leading-relaxed">Please treat everyone with respect. This is a place for learning and sharing, not for gatekeeping. Check out our updated code of conduct.</p>
                </div>
                <div class="hidden sm:flex flex-col items-end gap-2 text-slate-500 text-xs font-mono">
                    <span class="flex items-center bg-slate-900 px-2 py-1 rounded border border-slate-700">
                        <svg class="w-4 h-4 mr-1.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg> 
                        42
                    </span>
                    <span class="flex items-center bg-slate-900 px-2 py-1 rounded border border-slate-700">
                        <svg class="w-4 h-4 mr-1.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg> 
                        1.2k
                    </span>
                </div>
            </div>
        </div>

        <div class="bg-slate-800 p-6 rounded-xl shadow-sm border border-slate-700 mb-4 hover:border-slate-500 transition cursor-pointer group">
            <div class="flex items-start gap-4">
                <div class="shrink-0">
                    <img src="https://ui-avatars.com/api/?name=Sarah+Dev&background=random" class="w-10 h-10 rounded-full border border-slate-600" alt="User">
                </div>
                <div class="flex-1">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 text-[10px] font-bold px-2 py-0.5 rounded uppercase">Help</span>
                        <span class="text-slate-500 text-xs">Posted by <span class="text-slate-300">Sarah Dev</span> • 3 hours ago</span>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2 group-hover:text-blue-400 transition">Best practices for handling JWT tokens in LocalStorage?</h3>
                    <p class="text-slate-400 text-sm line-clamp-2 mb-3">I keep reading conflicting advice about whether to store JWTs in cookies or local storage. What do you guys use for production apps?</p>

                    <div class="flex gap-2">
                        <span class="text-xs bg-slate-700 text-slate-300 px-2.5 py-1 rounded-md border border-slate-600 hover:text-white transition">#security</span>
                        <span class="text-xs bg-slate-700 text-slate-300 px-2.5 py-1 rounded-md border border-slate-600 hover:text-white transition">#javascript</span>
                    </div>
                </div>
                <div class="hidden sm:flex flex-col items-end gap-1 text-slate-500 text-xs">
                    <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg> 15</span>
                </div>
            </div>
        </div>

        <div class="bg-slate-800 p-6 rounded-xl shadow-sm border border-slate-700 mb-4 hover:border-slate-500 transition cursor-pointer group">
            <div class="flex items-start gap-4">
                <div class="shrink-0">
                    <img src="https://ui-avatars.com/api/?name=Houssam&background=0D8ABC&color=fff" class="w-10 h-10 rounded-full border border-slate-600" alt="User">
                </div>
                <div class="flex-1">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="bg-purple-500/10 text-purple-400 border border-purple-500/20 text-[10px] font-bold px-2 py-0.5 rounded uppercase">Showcase</span>
                        <span class="text-slate-500 text-xs">Posted by <span class="text-slate-300">Houssam</span> • 5 hours ago</span>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2 group-hover:text-blue-400 transition">I built a C library from scratch!</h3>
                    <p class="text-slate-400 text-sm line-clamp-2 mb-3">It's called mylibc. I implemented stacks, queues, and hashmaps just to learn how they work under the hood. Check out the repo.</p>
                    <div class="flex gap-2">
                        <span class="text-xs bg-slate-700 text-slate-300 px-2.5 py-1 rounded-md border border-slate-600 hover:text-white transition">#c-programming</span>
                        <span class="text-xs bg-slate-700 text-slate-300 px-2.5 py-1 rounded-md border border-slate-600 hover:text-white transition">#opensource</span>
                    </div>
                </div>
                <div class="hidden sm:flex flex-col items-end gap-1 text-slate-500 text-xs">
                    <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg> 8</span>
                </div>
            </div>
        </div>

        <div class="mt-8 flex justify-center">
            <button class="bg-slate-800 border border-slate-700 text-slate-400 px-6 py-3 rounded-lg text-sm font-medium hover:bg-slate-700 hover:text-white transition">Load More Discussions</button>
        </div>

    </div>

    <aside class="lg:w-1/4 space-y-6">

        <div class="bg-slate-800 p-6 rounded-xl shadow-lg border border-slate-700">
            <h3 class="font-bold text-white mb-6 flex items-center">
                <svg class="w-5 h-5 text-yellow-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                Top Contributors
            </h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between group">
                    <div class="flex items-center gap-3">
                        <span class="text-yellow-500 font-mono font-bold text-sm">1</span>
                        <img src="https://ui-avatars.com/api/?name=Houssam&background=0D8ABC&color=fff" class="w-8 h-8 rounded-full border border-slate-600">
                        <span class="text-sm font-bold text-slate-200 group-hover:text-blue-400 transition">Houssam</span>
                    </div>
                    <span class="text-xs font-bold text-blue-400 bg-blue-500/10 px-2 py-1 rounded-full border border-blue-500/20">950 pts</span>
                </div>
                <div class="flex items-center justify-between group">
                    <div class="flex items-center gap-3">
                        <span class="text-slate-400 font-mono text-sm">2</span>
                        <img src="https://ui-avatars.com/api/?name=Sarah&background=random" class="w-8 h-8 rounded-full border border-slate-600">
                        <span class="text-sm font-bold text-slate-200 group-hover:text-blue-400 transition">Sarah Dev</span>
                    </div>
                    <span class="text-xs font-bold text-slate-400 bg-slate-700/50 px-2 py-1 rounded-full border border-slate-700">820 pts</span>
                </div>
                <div class="flex items-center justify-between group">
                    <div class="flex items-center gap-3">
                        <span class="text-slate-500 font-mono text-sm">3</span>
                        <img src="https://ui-avatars.com/api/?name=Alex&background=random" class="w-8 h-8 rounded-full border border-slate-600">
                        <span class="text-sm font-bold text-slate-200 group-hover:text-blue-400 transition">Alex Root</span>
                    </div>
                    <span class="text-xs font-bold text-slate-400 bg-slate-700/50 px-2 py-1 rounded-full border border-slate-700">740 pts</span>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-b from-slate-800 to-slate-900 p-6 rounded-xl border border-slate-700">
            <h3 class="font-bold text-white mb-3 text-sm uppercase tracking-wide">Community Guidelines</h3>
            <ul class="space-y-3 text-xs text-slate-400 list-disc pl-4 marker:text-blue-500">
                <li>Be respectful to other developers and their code.</li>
                <li>No spam, self-promotion, or "follow for follow".</li>
                <li>Use <span class="bg-slate-700 px-1 rounded text-slate-300 font-mono">code blocks</span> for code snippets.</li>
                <li>Search the forum before posting a new question.</li>
            </ul>
        </div>

    </aside>

</main>