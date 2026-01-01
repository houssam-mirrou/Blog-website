<nav class="bg-slate-900 text-white shadow-md">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">

        <a href="/" class="flex items-center space-x-2">
            <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
            </svg>
            <span class="text-2xl font-bold font-mono tracking-tight">StackWrite<span class="text-blue-400">.</span></span>
        </a>

        <div class="hidden md:flex space-x-8 text-sm font-medium">
            <a href="/" class="hover:text-blue-400 transition">Home</a>
            <a href="explore" class="hover:text-blue-400 transition">Explore</a>
            <a href="community" class="hover:text-blue-400 transition">Community</a>
            <a href="about" class="hover:text-blue-400 transition">About</a>
            <a href="contact" class="hover:text-blue-400 transition">Contact Us</a>
        </div>

        <div class="hidden md:flex items-center space-x-4">
            <a href="login" class="text-sm font-medium hover:text-blue-400 transition">Log In</a>
            <a href="register" class="bg-blue-600 hover:bg-blue-500 text-white px-5 py-2 rounded-full font-medium transition shadow-lg shadow-blue-500/30">
                Get Started
            </a>
        </div>

        <div class="md:hidden flex items-center">
            <button id="mobile-menu-btn" class="text-gray-300 hover:text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-slate-800 border-t border-slate-700">
        <a href="/" class="block py-3 px-6 hover:bg-slate-700">Home</a>
        <a href="search.php" class="block py-3 px-6 hover:bg-slate-700">Explore</a>
        <a href="login.php" class="block py-3 px-6 hover:bg-slate-700">Log In</a>
        <a href="register.php" class="block py-3 px-6 hover:bg-slate-700 text-blue-400 font-bold">Get Started</a>
    </div>
</nav>
<script>
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>