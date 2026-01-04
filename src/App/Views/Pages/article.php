<main class="bg-slate-900 min-h-screen pb-20 relative">

    <div class="absolute inset-0 opacity-10 pointer-events-none" style="background-image: radial-gradient(#3b82f6 1px, transparent 1px); background-size: 32px 32px;"></div>

    <div class="max-w-4xl mx-auto px-4 py-8 relative z-10">

        <article class="bg-slate-800 rounded-2xl shadow-2xl border border-slate-700 overflow-hidden mb-12">

            <div class="relative h-96 w-full">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-800 to-transparent z-10"></div>
                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1200&q=80" alt="Coding Setup" class="w-full h-full object-cover">
                
                <div class="absolute bottom-6 left-8 z-20 flex gap-2">
                    <span class="px-3 py-1 bg-blue-500/20 text-blue-300 border border-blue-500/30 text-xs font-bold rounded-full backdrop-blur-md">
                        Technology
                    </span>
                    <span class="px-3 py-1 bg-teal-500/20 text-teal-300 border border-teal-500/30 text-xs font-bold rounded-full backdrop-blur-md">
                        Architecture
                    </span>
                </div>
            </div>

            <div class="px-8 py-10">
                
                <div class="flex justify-between items-start mb-8">
                    <div>
                        <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-6 leading-tight">The Evolution of Modern Web Architecture</h1>
                        
                        <div class="flex items-center">
                            <img src="https://ui-avatars.com/api/?name=Houssam+Dev&background=0f172a&color=3b82f6" alt="Author" class="h-12 w-12 rounded-full mr-4 border-2 border-slate-600">
                            <div>
                                <p class="text-base font-bold text-white hover:text-blue-400 cursor-pointer transition">Houssam Dev</p>
                                <div class="flex items-center text-sm text-slate-400">
                                    <span>Dec 28, 2025</span>
                                    <span class="mx-2">•</span>
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        5 min read
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button onclick="openReportModal('Article', 'The Future of Web Dev')" class="text-slate-500 hover:text-red-400 transition-colors flex items-center gap-2 text-sm font-medium group">
                        <svg class="w-4 h-4 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13a1 1 0 011-1h1.5a1 1 0 011 1v4a1 1 0 01-1 1H13a1 1 0 01-1-1V8z"></path></svg>
                        Report
                    </button>
                </div>

                <div class="prose prose-invert prose-lg max-w-none text-slate-300 leading-relaxed">
                    <p class="mb-6">
                        When we talk about web architecture, we often get lost in the sea of new frameworks. React, Vue, Svelte, HTMX—the list goes on. But understanding the underlying patterns (MVC, MVVM, Islands Architecture) is what separates a coder from an engineer.
                    </p>
                    
                    <h2 class="text-2xl font-bold text-white mt-8 mb-4">The Shift from Monoliths</h2>
                    <p class="mb-6">
                        In the early days of PHP, we wrote everything in a single file. Logic, database queries, and HTML were mixed together. This was known as "Spaghetti Code". Then came the MVC pattern.
                    </p>

                    <div class="not-prose my-8">
                        <div class="bg-slate-950 rounded-lg overflow-hidden border border-slate-700 shadow-lg">
                            <div class="flex items-center justify-between px-4 py-2 bg-slate-900 border-b border-slate-700">
                                <span class="text-xs text-slate-400 font-mono">UserController.php</span>
                                <div class="flex space-x-1.5">
                                    <div class="w-3 h-3 rounded-full bg-red-500"></div>
                                    <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                                    <div class="w-3 h-3 rounded-full bg-green-500"></div>
                                </div>
                            </div>
                            <div class="p-4 overflow-x-auto">
<pre class="font-mono text-sm">
<span class="text-purple-400">class</span> <span class="text-yellow-200">UserController</span> <span class="text-purple-400">extends</span> <span class="text-yellow-200">Controller</span>
{
    <span class="text-blue-400">public function</span> <span class="text-yellow-200">index</span>()
    {
        <span class="text-slate-400">// This is how we used to do it</span>
        <span class="text-blue-300">$users</span> = <span class="text-blue-300">User</span>::<span class="text-yellow-200">all</span>();
        <span class="text-purple-400">return</span> <span class="text-blue-300">view</span>(<span class="text-green-300">'users.index'</span>, [<span class="text-green-300">'users'</span> => <span class="text-blue-300">$users</span>]);
    }
}
</pre>
                            </div>
                        </div>
                    </div>

                    <blockquote class="border-l-4 border-blue-500 pl-6 py-2 italic my-8 text-slate-400 bg-slate-700/30 rounded-r-lg">
                        "The only way to do great work is to love what you do. Code is poetry written by machines."
                    </blockquote>

                    <p>
                        Today, we are moving towards edge computing and serverless functions. This reduces latency but introduces complexity in state management.
                    </p>
                    
                </div>

                <div class="flex items-center justify-between pt-8 mt-12 border-t border-slate-700">
                    <div class="flex items-center gap-6">
                        <button onclick="toggleLike(this)" class="group flex items-center gap-2 text-slate-400 hover:text-red-500 transition-colors">
                            <div class="p-2 rounded-full group-hover:bg-red-500/10 transition">
                                <svg class="w-6 h-6 transform group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                            </div>
                            <span class="font-bold text-lg">1,240</span>
                        </button>

                        <button class="flex items-center gap-2 text-slate-400 hover:text-blue-400 transition-colors">
                            <div class="p-2 rounded-full hover:bg-blue-500/10 transition">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                            </div>
                            <span class="font-bold text-lg">48</span>
                        </button>
                    </div>

                    <button class="text-slate-400 hover:text-white transition p-2 hover:bg-slate-700 rounded-full">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>
                    </button>
                </div>
            </div>
        </article>

        <section class="bg-slate-800 rounded-2xl shadow-xl border border-slate-700 p-8">
            <h3 class="text-2xl font-bold text-white mb-8 flex items-center">
                Discussion <span class="ml-3 text-sm bg-slate-700 text-slate-300 px-3 py-1 rounded-full">48</span>
            </h3>

            <div class="flex gap-4 mb-10">
                <img src="https://ui-avatars.com/api/?name=Guest+User&background=1e293b&color=94a3b8" class="w-12 h-12 rounded-full border border-slate-600">
                <div class="flex-1">
                    <textarea placeholder="Write a comment..." class="w-full bg-slate-900 border border-slate-700 rounded-xl p-4 text-slate-200 placeholder-slate-500 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all h-28 resize-none shadow-inner font-sans"></textarea>
                    <div class="flex justify-end mt-3">
                        <button class="bg-blue-600 text-white px-6 py-2.5 rounded-lg hover:bg-blue-500 transition-colors font-bold shadow-lg shadow-blue-500/20">Post Comment</button>
                    </div>
                </div>
            </div>

            <div class="space-y-6">

                <div class="flex gap-4 p-5 rounded-xl border border-transparent hover:bg-slate-700/50 hover:border-slate-700 transition duration-200 group">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-10 h-10 rounded-full flex-shrink-0 border border-slate-600">
                    <div class="flex-1">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-bold text-white text-sm">Alex Johnson</h4>
                                <span class="text-xs text-slate-500">2 hours ago</span>
                            </div>

                            <button onclick="openReportModal('Comment', 'Comment by Alex Johnson')" class="text-slate-600 hover:text-red-400 opacity-0 group-hover:opacity-100 transition-all text-xs flex items-center gap-1 font-medium">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z" clip-rule="evenodd" /></svg>
                                Report
                            </button>
                        </div>

                        <p class="text-slate-300 mt-2 text-sm leading-relaxed">Great article! I really liked the explanation about MVC architecture. It cleared up a lot of confusion I had regarding Controllers.</p>

                        <div class="flex items-center gap-5 mt-3">
                            <button onclick="toggleLike(this)" class="text-slate-500 hover:text-red-500 text-xs flex items-center gap-1.5 transition-colors font-medium">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg> 
                                12
                            </button>
                            <button class="text-slate-500 hover:text-blue-400 text-xs font-medium">Reply</button>
                        </div>
                    </div>
                </div>

                <div class="flex gap-4 p-5 rounded-xl border border-transparent hover:bg-slate-700/50 hover:border-slate-700 transition duration-200 group">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" class="w-10 h-10 rounded-full flex-shrink-0 border border-slate-600">
                    <div class="flex-1">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-bold text-white text-sm">Sarah Williams</h4>
                                <span class="text-xs text-slate-500">5 hours ago</span>
                            </div>
                            <button onclick="openReportModal('Comment', 'Comment by Sarah Williams')" class="text-slate-600 hover:text-red-400 opacity-0 group-hover:opacity-100 transition-all text-xs flex items-center gap-1 font-medium">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z" clip-rule="evenodd" /></svg>
                                Report
                            </button>
                        </div>

                        <p class="text-slate-300 mt-2 text-sm leading-relaxed">I disagree with the point about raw SQL. ORMs are much safer for beginners to prevent injection attacks.</p>

                        <div class="flex items-center gap-5 mt-3">
                            <button onclick="toggleLike(this)" class="text-slate-500 hover:text-red-500 text-xs flex items-center gap-1.5 transition-colors font-medium">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg> 
                                5
                            </button>
                            <button class="text-slate-500 hover:text-blue-400 text-xs font-medium">Reply</button>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
</main>

<div id="reportModal" class="fixed inset-0 z-50 hidden flex items-center justify-center">
    <div class="absolute inset-0 bg-slate-950/80 backdrop-blur-sm transition-opacity" onclick="closeReportModal()"></div>
    
    <div class="relative bg-slate-800 rounded-2xl shadow-2xl border border-slate-700 w-full max-w-md mx-4 transform transition-all scale-100 overflow-hidden">
        <div class="p-6 border-b border-slate-700 flex justify-between items-center bg-slate-900/50">
            <h3 class="text-lg font-bold text-white flex items-center gap-2">
                <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                Report Content
            </h3>
            <button onclick="closeReportModal()" class="text-slate-400 hover:text-white transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <div class="p-6">
            <p class="text-sm text-slate-400 mb-6">You are reporting: <span id="reportTarget" class="font-bold text-white block mt-1 truncate">Target</span></p>

            <form onsubmit="event.preventDefault(); submitReport();">
                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wide mb-2">Reason for reporting</label>
                <div class="relative mb-4">
                    <select class="w-full bg-slate-900 border border-slate-700 text-white rounded-lg p-3 appearance-none focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none cursor-pointer">
                        <option>Spam or misleading</option>
                        <option>Harassment or hate speech</option>
                        <option>Inappropriate content</option>
                        <option>Other</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-slate-500">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                </div>

                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wide mb-2">Additional Details (Optional)</label>
                <textarea class="w-full bg-slate-900 border border-slate-700 text-white rounded-lg p-3 h-24 mb-6 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none resize-none placeholder-slate-600" placeholder="Please provide more context..."></textarea>

                <div class="flex justify-end gap-3">
                    <button type="button" onclick="closeReportModal()" class="px-4 py-2 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors text-sm font-medium">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-500 transition-colors text-sm font-bold shadow-lg shadow-red-600/20">Submit Report</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // 1. LIKE FUNCTIONALITY
    function toggleLike(btn) {
        // Find the SVG icon inside the button
        const icon = btn.querySelector('svg');
        const path = icon.querySelector('path');

        // Check if active (red)
        if (btn.classList.contains('text-red-500')) {
            // Un-like
            btn.classList.remove('text-red-500');
            btn.classList.add('text-slate-500'); // Return to gray
            icon.setAttribute('fill', 'none'); // Outline only
        } else {
            // Like
            btn.classList.remove('text-slate-500'); // Remove gray
            btn.classList.remove('text-slate-400'); // Remove gray
            btn.classList.add('text-red-500'); // Make red
            icon.setAttribute('fill', 'currentColor'); // Fill shape
        }
    }

    // 2. REPORT MODAL LOGIC
    const modal = document.getElementById('reportModal');
    const reportTargetSpan = document.getElementById('reportTarget');

    function openReportModal(type, title) {
        reportTargetSpan.innerText = `"${title}" (${type})`;
        modal.classList.remove('hidden');
    }

    function closeReportModal() {
        modal.classList.add('hidden');
    }

    function submitReport() {
        // Here you would send an AJAX/Fetch request to your PHP backend
        alert('Report submitted successfully! Our team will review it.');
        closeReportModal();
    }
</script>