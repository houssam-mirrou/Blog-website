<div class="bg-slate-900 pt-10 pb-24 px-6 text-center">
    <h1 class="text-3xl md:text-4xl font-bold text-white mb-6">Discover Articles</h1>

    <div class="max-w-2xl mx-auto relative">
        <input type="text" placeholder="Search articles, topics, or authors..."
            class="w-full py-4 pl-12 pr-4 rounded-full shadow-xl border-none focus:ring-4 focus:ring-blue-500/50 text-gray-700 text-lg outline-none">
        <svg class="w-6 h-6 text-gray-400 absolute left-4 top-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
    </div>

    <div class="mt-6 flex flex-wrap justify-center gap-3 text-sm">
        <span class="text-gray-400 mr-2">Trending:</span>
        <a href="#" class="px-3 py-1 bg-slate-800 text-blue-400 rounded-full hover:bg-slate-700 transition border border-slate-700">PHP 8.2</a>
        <a href="#" class="px-3 py-1 bg-slate-800 text-blue-400 rounded-full hover:bg-slate-700 transition border border-slate-700">Tailwind</a>
        <a href="#" class="px-3 py-1 bg-slate-800 text-blue-400 rounded-full hover:bg-slate-700 transition border border-slate-700">DevOps</a>
    </div>
</div>

<main class="container mx-auto px-6 -mt-10 mb-12 flex-grow">

    <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-100 flex flex-col md:flex-row justify-between items-center mb-8 gap-4">

        <div class="flex items-center gap-2 overflow-x-auto w-full md:w-auto pb-2 md:pb-0">
            <span class="font-bold text-slate-700 mr-2">Filter:</span>
            <button class="bg-blue-600 text-white px-4 py-1.5 rounded-md text-sm font-medium shadow-sm">All</button>
            <button class="bg-gray-100 text-gray-600 hover:bg-gray-200 px-4 py-1.5 rounded-md text-sm font-medium transition">Backend</button>
            <button class="bg-gray-100 text-gray-600 hover:bg-gray-200 px-4 py-1.5 rounded-md text-sm font-medium transition">Frontend</button>
            <button class="bg-gray-100 text-gray-600 hover:bg-gray-200 px-4 py-1.5 rounded-md text-sm font-medium transition">Tutorials</button>
        </div>

        <div class="flex items-center gap-2">
            <span class="text-sm text-gray-500">Sort by:</span>
            <select class="bg-gray-50 border border-gray-200 text-sm rounded-md px-3 py-1.5 focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700">
                <option>Latest</option>
                <option>Popular</option>
                <option>Oldest</option>
            </select>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition group">
            <div class="h-48 overflow-hidden relative">
                <img src="https://images.unsplash.com/photo-1544383835-bda2bc66a55d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Cover" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm text-slate-800 text-xs font-bold px-2 py-1 rounded">
                    Database
                </div>
            </div>
            <div class="p-5">
                <div class="flex items-center text-xs text-gray-500 mb-2">
                    <span>2 days ago</span>
                    <span class="mx-2">•</span>
                    <span>Houssam</span>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2 leading-snug group-hover:text-blue-600 transition">
                    <a href="article.html">Optimizing SQL Queries for High Traffic</a>
                </h3>
                <p class="text-gray-600 text-sm line-clamp-3 mb-4">
                    Slow queries can kill your application. Here are 5 tips to speed up your MySQL database performance significantly.
                </p>
                <a href="article.html" class="inline-block text-blue-600 text-sm font-semibold hover:underline">
                    Read Article &rarr;
                </a>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition group">
            <div class="h-48 overflow-hidden relative">
                <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Cover" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm text-slate-800 text-xs font-bold px-2 py-1 rounded">
                    Rust
                </div>
            </div>
            <div class="p-5">
                <div class="flex items-center text-xs text-gray-500 mb-2">
                    <span>1 week ago</span>
                    <span class="mx-2">•</span>
                    <span>Alex Root</span>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2 leading-snug group-hover:text-blue-600 transition">
                    <a href="article.html">Getting Started with Rust</a>
                </h3>
                <p class="text-gray-600 text-sm line-clamp-3 mb-4">
                    Why Rust is becoming the favorite language for systems programming and how to write your first hello world application safely.
                </p>
                <a href="article.html" class="inline-block text-blue-600 text-sm font-semibold hover:underline">
                    Read Article &rarr;
                </a>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition group">
            <div class="h-48 overflow-hidden relative">
                <img src="https://images.unsplash.com/photo-1507721999472-8ed4421c4af3?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Cover" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm text-slate-800 text-xs font-bold px-2 py-1 rounded">
                    CSS
                </div>
            </div>
            <div class="p-5">
                <div class="flex items-center text-xs text-gray-500 mb-2">
                    <span>2 weeks ago</span>
                    <span class="mx-2">•</span>
                    <span>Sarah Dev</span>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2 leading-snug group-hover:text-blue-600 transition">
                    <a href="article.html">Tailwind vs Bootstrap: 2026 Edition</a>
                </h3>
                <p class="text-gray-600 text-sm line-clamp-3 mb-4">
                    A non-biased comparison of the two biggest CSS frameworks in the modern web ecosystem to help you decide which to use.
                </p>
                <a href="article.html" class="inline-block text-blue-600 text-sm font-semibold hover:underline">
                    Read Article &rarr;
                </a>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition group">
            <div class="h-48 overflow-hidden relative">
                <img src="https://images.unsplash.com/photo-1605745341112-85968b19335b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Cover" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm text-slate-800 text-xs font-bold px-2 py-1 rounded">
                    DevOps
                </div>
            </div>
            <div class="p-5">
                <div class="flex items-center text-xs text-gray-500 mb-2">
                    <span>3 weeks ago</span>
                    <span class="mx-2">•</span>
                    <span>Houssam</span>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2 leading-snug group-hover:text-blue-600 transition">
                    <a href="article.html">Deploying PHP with Docker Compose</a>
                </h3>
                <p class="text-gray-600 text-sm line-clamp-3 mb-4">
                    Stop using XAMPP. Here is how to create a reproducible development environment using containers.
                </p>
                <a href="article.html" class="inline-block text-blue-600 text-sm font-semibold hover:underline">
                    Read Article &rarr;
                </a>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition group">
            <div class="h-48 overflow-hidden relative">
                <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Cover" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm text-slate-800 text-xs font-bold px-2 py-1 rounded">
                    Tools
                </div>
            </div>
            <div class="p-5">
                <div class="flex items-center text-xs text-gray-500 mb-2">
                    <span>1 month ago</span>
                    <span class="mx-2">•</span>
                    <span>Mike Code</span>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2 leading-snug group-hover:text-blue-600 transition">
                    <a href="article.html">10 VS Code Extensions You Need</a>
                </h3>
                <p class="text-gray-600 text-sm line-clamp-3 mb-4">
                    Boost your productivity instantly with these essential Visual Studio Code extensions for web developers.
                </p>
                <a href="article.html" class="inline-block text-blue-600 text-sm font-semibold hover:underline">
                    Read Article &rarr;
                </a>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition group">
            <div class="h-48 overflow-hidden relative">
                <img src="https://images.unsplash.com/photo-1627398242454-45a1465c2479?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Cover" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm text-slate-800 text-xs font-bold px-2 py-1 rounded">
                    JavaScript
                </div>
            </div>
            <div class="p-5">
                <div class="flex items-center text-xs text-gray-500 mb-2">
                    <span>1 month ago</span>
                    <span class="mx-2">•</span>
                    <span>Sarah Dev</span>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2 leading-snug group-hover:text-blue-600 transition">
                    <a href="article.html">Understanding Asynchronous JS</a>
                </h3>
                <p class="text-gray-600 text-sm line-clamp-3 mb-4">
                    Promises, Async/Await, and the Event Loop explained simply for beginners and intermediate developers.
                </p>
                <a href="article.html" class="inline-block text-blue-600 text-sm font-semibold hover:underline">
                    Read Article &rarr;
                </a>
            </div>
        </div>

    </div>

    <div class="mt-12 text-center">
        <button class="bg-white border border-gray-300 text-slate-700 px-8 py-3 rounded-full font-medium hover:bg-gray-50 hover:border-gray-400 transition shadow-sm">
            Load More Articles
        </button>
    </div>

</main>