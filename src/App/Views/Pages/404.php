<main class="relative flex flex-col items-center justify-center min-h-[80vh] bg-slate-900 overflow-hidden px-6">
    
    <div class="absolute inset-0 opacity-20 pointer-events-none" style="background-image: radial-gradient(#3b82f6 1px, transparent 1px); background-size: 32px 32px;"></div>
    
    <h1 class="absolute text-[15rem] md:text-[20rem] font-black text-slate-800/50 select-none z-0 -translate-y-12">
        404
    </h1>

    <div class="relative z-10 w-full max-w-lg text-center">
        
        <div class="bg-slate-950 rounded-xl border border-slate-800 shadow-2xl mb-10 overflow-hidden text-left mx-auto transform transition hover:scale-105 duration-500 hover:border-slate-600">
            <div class="bg-slate-900 px-4 py-3 border-b border-slate-800 flex items-center space-x-2">
                <div class="w-3 h-3 rounded-full bg-red-500"></div>
                <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                <div class="w-3 h-3 rounded-full bg-green-500"></div>
                <div class="ml-4 text-xs text-slate-500 font-mono">error_log.php</div>
            </div>
            
            <div class="p-6 font-mono text-sm md:text-base leading-relaxed">
                <div class="flex">
                    <span class="text-slate-600 mr-4 select-none">1</span>
                    <p class="text-slate-300">
                        <span class="text-purple-400">try</span> {
                    </p>
                </div>
                <div class="flex">
                    <span class="text-slate-600 mr-4 select-none">2</span>
                    <p class="text-slate-300 pl-4">
                        <span class="text-blue-400">$page</span>-><span class="text-yellow-300">load</span>();
                    </p>
                </div>
                <div class="flex">
                    <span class="text-slate-600 mr-4 select-none">3</span>
                    <p class="text-slate-300">
                        } <span class="text-purple-400">catch</span> (<span class="text-yellow-300">NotFoundException</span> <span class="text-blue-400">$e</span>) {
                    </p>
                </div>
                <div class="flex">
                    <span class="text-slate-600 mr-4 select-none">4</span>
                    <p class="text-slate-300 pl-4">
                        <span class="text-red-400">echo</span> <span class="text-green-400">"Page not found."</span>;
                    </p>
                </div>
                <div class="flex">
                    <span class="text-slate-600 mr-4 select-none">5</span>
                    <p class="text-slate-300">
                        }
                    </p>
                </div>
            </div>
        </div>

        <h2 class="text-3xl font-bold text-white mb-4">You've ventured into the void.</h2>
        <p class="text-slate-400 mb-8 max-w-md mx-auto">
            The article you are looking for might have been removed, had its name changed, or simply never existed in this timeline.
        </p>

        <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4 justify-center">
            <a href="/" class="bg-blue-600 hover:bg-blue-500 text-white px-8 py-3.5 rounded-lg font-bold transition shadow-lg shadow-blue-500/20 hover:shadow-blue-500/40 flex items-center justify-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                Return Home
            </a>
            <a href="contact" class="bg-slate-800 border border-slate-700 hover:bg-slate-700 text-slate-300 px-8 py-3.5 rounded-lg font-bold transition flex items-center justify-center">
                Contact Support
            </a>
        </div>
    </div>

</main>