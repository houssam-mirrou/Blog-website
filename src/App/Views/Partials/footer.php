<footer class="bg-slate-950 text-slate-400 border-t border-slate-800 mt-auto">
    <div class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

            <div class="space-y-4">
                <a href="/" class="flex items-center space-x-2 group">
                    <svg class="w-6 h-6 text-blue-500 group-hover:text-blue-400 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                    </svg>
                    <span class="text-xl font-bold font-mono text-white tracking-tight">StackWrite<span class="text-blue-500">.</span></span>
                </a>
                <p class="text-sm text-slate-500">
                    The open platform for developers and writers to share knowledge, code, and ideas.
                </p>
            </div>

            <div>
                <h3 class="text-white font-semibold mb-4">Discover</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="search" class="hover:text-blue-400 transition">Latest Articles</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition">Popular Authors</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition">Topics & Tags</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition">Dev Challenges</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-white font-semibold mb-4">Support</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="about" class="hover:text-blue-400 transition">About Us</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition">Contact Support</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition">Terms of Service</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-white font-semibold mb-4">Stay Updated</h3>
                <p class="text-sm text-slate-500 mb-4">Get the latest tech articles sent to your inbox.</p>
                <form class="flex flex-col space-y-2">
                    <input type="email" placeholder="Enter your email" class="bg-slate-900 text-white px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 border border-slate-800 text-sm placeholder-slate-600 transition">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-500 text-white px-4 py-2 rounded font-medium transition text-sm shadow-lg shadow-blue-500/20">
                        Subscribe
                    </button>
                </form>
            </div>

        </div>

        <div class="border-t border-slate-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center text-sm text-slate-500">
            <p>&copy; <?php echo date("Y"); ?> StackWrite. All rights reserved.</p>
            <div class="flex space-x-4 mt-4 md:mt-0">
                <a href="#" class="hover:text-white transition">Twitter</a>
                <a href="#" class="hover:text-white transition">GitHub</a>
                <a href="#" class="hover:text-white transition">LinkedIn</a>
            </div>
        </div>
    </div>
</footer>