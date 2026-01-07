<div class="relative bg-slate-900 border-b border-slate-800 py-16 md:py-24 overflow-hidden">
    <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(#3b82f6 1px, transparent 1px); background-size: 32px 32px;"></div>

    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-blue-600/20 blur-[100px] rounded-full pointer-events-none"></div>

    <div class="container mx-auto px-6 relative z-10 text-center">
        <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-4 tracking-tight">
            Explore the <span class="text-blue-500">Knowledge Base</span>
        </h1>
        <p class="text-slate-400 mb-8 text-lg max-w-2xl mx-auto">
            Discover articles, tutorials, and insights from the community.
        </p>

        <div class="max-w-2xl mx-auto relative group">
            <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-teal-600 rounded-full opacity-20 group-hover:opacity-40 transition duration-1000 blur"></div>
            <div class="relative">
                <input type="text" placeholder="Search for keywords, authors, or tags..."
                    class="w-full py-4 pl-14 pr-4 rounded-full bg-slate-950/80 backdrop-blur-xl border border-slate-700 text-slate-200 placeholder-slate-500 text-lg outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 shadow-2xl transition-all">
                <svg class="w-6 h-6 text-slate-400 absolute left-5 top-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
        </div>

        <div class="mt-6 flex flex-wrap justify-center gap-2 text-sm font-medium">
            <span class="text-slate-500 py-1">Trending:</span>
            <a href="#" class="px-3 py-1 bg-slate-800/50 hover:bg-blue-600/20 text-blue-400 border border-slate-700 hover:border-blue-500/50 rounded-full transition">#php8</a>
            <a href="#" class="px-3 py-1 bg-slate-800/50 hover:bg-blue-600/20 text-blue-400 border border-slate-700 hover:border-blue-500/50 rounded-full transition">#docker</a>
            <a href="#" class="px-3 py-1 bg-slate-800/50 hover:bg-blue-600/20 text-blue-400 border border-slate-700 hover:border-blue-500/50 rounded-full transition">#react</a>
        </div>
    </div>
</div>

<main class="bg-slate-900 min-h-screen pb-20">
    <div class="container mx-auto px-6 py-10">

        <div class="flex flex-col md:flex-row justify-between items-center mb-10 gap-6">

            <div class="bg-slate-800/50 p-1 rounded-xl border border-slate-700 flex overflow-x-auto max-w-full no-scrollbar">
                <button class="px-6 py-2 rounded-lg bg-slate-700 text-white shadow-sm font-medium text-sm whitespace-nowrap">All Posts</button>
                <button class="px-6 py-2 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 font-medium text-sm transition whitespace-nowrap">Backend</button>
                <button class="px-6 py-2 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 font-medium text-sm transition whitespace-nowrap">Frontend</button>
                <button class="px-6 py-2 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 font-medium text-sm transition whitespace-nowrap">DevOps</button>
            </div>

            <div class="flex items-center gap-3">
                <span class="text-slate-500 text-sm font-medium">Sort by:</span>
                <div class="relative">
                    <select class="appearance-none bg-slate-800 border border-slate-700 hover:border-slate-600 text-slate-300 text-sm rounded-lg pl-4 pr-10 py-2.5 focus:outline-none focus:ring-2 focus:ring-blue-500/50 cursor-pointer transition shadow-sm">
                        <option>Newest First</option>
                        <option>Most Popular</option>
                        <option>Oldest First</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-slate-500">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <?php
            foreach ($article_view as $article) {
            ?>
                <article class="bg-slate-800 rounded-2xl border border-slate-700/50 overflow-hidden hover:border-blue-500/50 hover:shadow-2xl hover:shadow-blue-500/10 transition duration-300 group flex flex-col h-full">
                    <div class="relative h-52 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1544383835-bda2bc66a55d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 ">
                            <div class="flex flex-row gap-2">
                                <?php
                                foreach ($article['art_cat'] as $cat) {
                                ?>
                                    <span class="bg-blue-500/20 text-blue-300 border border-blue-500/30 text-xs font-bold px-3 py-1 rounded-full backdrop-blur-sm">
                                        <?= $cat['name'] ?>
                                    </span>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex justify-between items-center text-xs text-slate-500 mb-4">
                            <span class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <?= $article['article']->get_created_date() ?>
                            </span>
                            <span class="flex items-center gap-1 text-slate-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                5 min read
                            </span>
                        </div>
                        <h3 class="font-bold text-xl text-white mb-3 leading-tight group-hover:text-blue-400 transition">
                            <a href="article?id=<?= $article['article']->get_id() ?>"><?= $article['article']->get_title() ?></a>
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3">
                            Slow queries can kill your application. Here are 5 tips to speed up your MySQL database performance significantly.
                        </p>
                        <div class="mt-auto pt-6 border-t border-slate-700/50 flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded-full bg-indigo-500 flex items-center justify-center text-white text-xs font-bold">H</div>
                                <span class="text-sm font-medium text-slate-300"><?= $article['art_user'] ?></span>
                            </div>
                            <a href="article?id=<?= $article['article']->get_id() ?>" class="text-blue-400 hover:text-white transition">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            <?php
            }
            ?>

            <article class="bg-slate-800 rounded-2xl border border-slate-700/50 overflow-hidden hover:border-orange-500/50 hover:shadow-2xl hover:shadow-orange-500/10 transition duration-300 group flex flex-col h-full">
                <div class="relative h-52 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <span class="bg-orange-500/20 text-orange-300 border border-orange-500/30 text-xs font-bold px-3 py-1 rounded-full backdrop-blur-sm">
                            Rust
                        </span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex justify-between items-center text-xs text-slate-500 mb-4">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Dec 15, 2025
                        </span>
                        <span class="flex items-center gap-1 text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            10 min read
                        </span>
                    </div>
                    <h3 class="font-bold text-xl text-white mb-3 leading-tight group-hover:text-orange-400 transition">
                        <a href="article">Getting Started with Rust</a>
                    </h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3">
                        Why Rust is becoming the favorite language for systems programming and how to write your first hello world application safely.
                    </p>
                    <div class="mt-auto pt-6 border-t border-slate-700/50 flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-full bg-slate-600 flex items-center justify-center text-white text-xs font-bold">A</div>
                            <span class="text-sm font-medium text-slate-300">Alex Root</span>
                        </div>
                        <a href="article" class="text-orange-400 hover:text-white transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>

            <article class="bg-slate-800 rounded-2xl border border-slate-700/50 overflow-hidden hover:border-teal-500/50 hover:shadow-2xl hover:shadow-teal-500/10 transition duration-300 group flex flex-col h-full">
                <div class="relative h-52 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1507721999472-8ed4421c4af3?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <span class="bg-teal-500/20 text-teal-300 border border-teal-500/30 text-xs font-bold px-3 py-1 rounded-full backdrop-blur-sm">
                            CSS
                        </span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex justify-between items-center text-xs text-slate-500 mb-4">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Dec 18, 2025
                        </span>
                        <span class="flex items-center gap-1 text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            7 min read
                        </span>
                    </div>
                    <h3 class="font-bold text-xl text-white mb-3 leading-tight group-hover:text-teal-400 transition">
                        <a href="article">Tailwind vs Bootstrap: 2026 Edition</a>
                    </h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3">
                        A non-biased comparison of the two biggest CSS frameworks in the modern web ecosystem.
                    </p>
                    <div class="mt-auto pt-6 border-t border-slate-700/50 flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-full bg-pink-600 flex items-center justify-center text-white text-xs font-bold">S</div>
                            <span class="text-sm font-medium text-slate-300">Sarah Dev</span>
                        </div>
                        <a href="article" class="text-teal-400 hover:text-white transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>

        </div>

        <div class="mt-16 text-center">
            <button class="bg-slate-800 border border-slate-600 text-slate-300 px-10 py-3.5 rounded-full font-bold hover:bg-slate-700 hover:text-white hover:border-slate-500 transition shadow-lg hover:shadow-xl hover:-translate-y-1">
                Load More Articles
            </button>
        </div>

    </div>
</main>