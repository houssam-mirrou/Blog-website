<section class="relative bg-slate-900 border-b border-slate-800 overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#3b82f6 1px, transparent 1px); background-size: 32px 32px;"></div>
    
    <div class="relative container mx-auto px-6 py-20 text-center md:text-left">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 z-10">
                <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-6">
                    Share your code, <br> tell your <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-teal-400">story.</span>
                </h1>
                <p class="text-lg text-slate-400 mb-8 leading-relaxed max-w-lg mx-auto md:mx-0">
                    StackWrite is the open community for developers to share knowledge, code snippets, and career experiences.
                </p>
                <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4 justify-center md:justify-start">
                    <a href="register" class="bg-blue-600 hover:bg-blue-500 text-white px-8 py-3.5 rounded-lg font-bold transition text-center shadow-lg shadow-blue-500/30 hover:shadow-blue-500/50">
                        Start Writing
                    </a>
                    <a href="explore" class="bg-slate-800 hover:bg-slate-700 text-slate-200 px-8 py-3.5 rounded-lg font-medium transition text-center border border-slate-700 hover:border-slate-600">
                        Read Articles
                    </a>
                </div>
            </div>
            <div class="md:w-1/2 mt-12 md:mt-0 flex justify-center z-10">
                <div class="relative w-64 md:w-80 h-64 md:h-80 bg-gradient-to-tr from-blue-500/20 to-teal-500/20 rounded-full blur-3xl absolute"></div>
                <img src="https://cdn-icons-png.flaticon.com/512/3098/3098090.png" alt="Blogging" class="relative w-64 md:w-80 drop-shadow-2xl">
            </div>
        </div>
    </div>
</section>

<div id="latest" class="bg-slate-900 min-h-screen">
    <div class="container mx-auto px-6 py-12 flex flex-col md:flex-row gap-12">

        <div class="md:w-2/3">
            <div class="flex justify-between items-end mb-8">
                <h2 class="text-2xl font-bold text-white border-l-4 border-blue-500 pl-4">Latest Articles</h2>
                <a href="explore" class="text-blue-400 text-sm font-medium hover:text-blue-300 transition">View All &rarr;</a>
            </div>

            <div class="grid grid-cols-1 gap-8">

                <article class="bg-slate-800 rounded-xl shadow-lg border border-slate-700 overflow-hidden hover:border-blue-500/50 transition duration-300 flex flex-col sm:flex-row group">
                    <div class="sm:w-1/3 h-48 sm:h-auto bg-slate-700 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1599507593499-a3f7d7d97663?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Article Image" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-6 sm:w-2/3 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center space-x-2 text-xs text-slate-400 mb-3">
                                <span class="bg-blue-500/10 text-blue-400 px-2.5 py-1 rounded border border-blue-500/20 font-semibold uppercase tracking-wide text-[10px]">
                                    PHP
                                </span>
                                <span>•</span>
                                <span>Dec 10, 2025</span>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-2 group-hover:text-blue-400 transition">
                                <a href="article">Understanding PHP 8.2 Readonly Classes</a>
                            </h3>
                            <p class="text-slate-400 text-sm line-clamp-2">
                                Learn how readonly classes can make your data transfer objects (DTOs) immutable and cleaner.
                            </p>
                        </div>
                        <div class="mt-4 flex items-center">
                            <div class="w-8 h-8 rounded-full bg-slate-700 flex items-center justify-center text-xs font-bold text-white border border-slate-600">H</div>
                            <span class="ml-2 text-sm font-medium text-slate-300">Houssam</span>
                        </div>
                    </div>
                </article>

                <article class="bg-slate-800 rounded-xl shadow-lg border border-slate-700 overflow-hidden hover:border-blue-500/50 transition duration-300 flex flex-col sm:flex-row group">
                    <div class="sm:w-1/3 h-48 sm:h-auto bg-slate-700 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1555099962-4199c345e5dd?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Article Image" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-6 sm:w-2/3 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center space-x-2 text-xs text-slate-400 mb-3">
                                <span class="bg-teal-500/10 text-teal-400 px-2.5 py-1 rounded border border-teal-500/20 font-semibold uppercase tracking-wide text-[10px]">
                                    Frontend
                                </span>
                                <span>•</span>
                                <span>Dec 12, 2025</span>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-2 group-hover:text-blue-400 transition">
                                <a href="article">Mastering Tailwind CSS Grid Layouts</a>
                            </h3>
                            <p class="text-slate-400 text-sm line-clamp-2">
                                Stop struggling with floats. Here is a comprehensive guide to building responsive grids in minutes.
                            </p>
                        </div>
                        <div class="mt-4 flex items-center">
                            <div class="w-8 h-8 rounded-full bg-slate-700 flex items-center justify-center text-xs font-bold text-white border border-slate-600">S</div>
                            <span class="ml-2 text-sm font-medium text-slate-300">Sarah Dev</span>
                        </div>
                    </div>
                </article>

                <article class="bg-slate-800 rounded-xl shadow-lg border border-slate-700 overflow-hidden hover:border-blue-500/50 transition duration-300 flex flex-col sm:flex-row group">
                    <div class="sm:w-1/3 h-48 sm:h-auto bg-slate-700 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1605745341112-85968b19335b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Article Image" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-6 sm:w-2/3 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center space-x-2 text-xs text-slate-400 mb-3">
                                <span class="bg-purple-500/10 text-purple-400 px-2.5 py-1 rounded border border-purple-500/20 font-semibold uppercase tracking-wide text-[10px]">
                                    DevOps
                                </span>
                                <span>•</span>
                                <span>Dec 14, 2025</span>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-2 group-hover:text-blue-400 transition">
                                <a href="article">Docker vs. Podman: What should you choose?</a>
                            </h3>
                            <p class="text-slate-400 text-sm line-clamp-2">
                                A deep dive into containerization technologies and which one fits your workflow better.
                            </p>
                        </div>
                        <div class="mt-4 flex items-center">
                            <div class="w-8 h-8 rounded-full bg-slate-700 flex items-center justify-center text-xs font-bold text-white border border-slate-600">A</div>
                            <span class="ml-2 text-sm font-medium text-slate-300">Alex Root</span>
                        </div>
                    </div>
                </article>

            </div>

            <div class="mt-12 flex justify-center space-x-2">
                <button class="px-4 py-2 border border-slate-700 rounded-md text-slate-400 hover:bg-slate-800 hover:text-white transition disabled:opacity-50">Previous</button>
                <button class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-500 shadow-lg shadow-blue-500/30">1</button>
                <button class="px-4 py-2 border border-slate-700 rounded-md text-slate-400 hover:bg-slate-800 hover:text-white transition">2</button>
                <button class="px-4 py-2 border border-slate-700 rounded-md text-slate-400 hover:bg-slate-800 hover:text-white transition">3</button>
                <button class="px-4 py-2 border border-slate-700 rounded-md text-slate-400 hover:bg-slate-800 hover:text-white transition">Next</button>
            </div>
        </div>

        <aside class="md:w-1/3 space-y-8">

            <div class="bg-slate-800 p-6 rounded-xl shadow-lg border border-slate-700">
                <h3 class="font-bold text-white mb-4">Search</h3>
                <form action="explore" class="flex">
                    <input type="text" placeholder="Search articles..." class="w-full bg-slate-900 border border-slate-700 text-slate-300 rounded-l-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent placeholder-slate-500">
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-r-lg hover:bg-blue-500 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </form>
            </div>

            <div class="bg-slate-800 p-6 rounded-xl shadow-lg border border-slate-700">
                <h3 class="font-bold text-white mb-4">Popular Topics</h3>
                <div class="flex flex-wrap gap-2">
                    <a href="#" class="px-3 py-1 bg-slate-700 text-slate-300 text-sm rounded-full hover:bg-blue-600 hover:text-white transition border border-slate-600">#javascript</a>
                    <a href="#" class="px-3 py-1 bg-slate-700 text-slate-300 text-sm rounded-full hover:bg-blue-600 hover:text-white transition border border-slate-600">#php</a>
                    <a href="#" class="px-3 py-1 bg-slate-700 text-slate-300 text-sm rounded-full hover:bg-blue-600 hover:text-white transition border border-slate-600">#css</a>
                    <a href="#" class="px-3 py-1 bg-slate-700 text-slate-300 text-sm rounded-full hover:bg-blue-600 hover:text-white transition border border-slate-600">#career</a>
                    <a href="#" class="px-3 py-1 bg-slate-700 text-slate-300 text-sm rounded-full hover:bg-blue-600 hover:text-white transition border border-slate-600">#database</a>
                </div>
            </div>

            <div class="bg-gradient-to-br from-blue-900 to-slate-900 p-6 rounded-xl shadow-lg border border-blue-800/50 text-white relative overflow-hidden">
                <div class="relative z-10">
                    <h3 class="font-bold text-lg mb-2">Join StackWrite</h3>
                    <p class="text-blue-200 text-sm mb-4">Create an account to write articles, comment, and bookmark your favorite posts.</p>
                    <a href="register" class="block w-full bg-white text-blue-900 hover:bg-blue-50 text-center py-2.5 rounded-lg font-bold transition shadow-lg">
                        Sign Up Free
                    </a>
                </div>
            </div>

        </aside>
    </div>
</div>