<nav class="sticky top-0 z-50 bg-slate-900/90 backdrop-blur-md border-b border-slate-800 text-white shadow-lg transition-all">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">

        <a href="/" class="flex items-center space-x-2 group">
            <svg class="w-8 h-8 text-blue-500 group-hover:text-blue-400 transition transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
            </svg>
            <span class="text-2xl font-bold font-mono tracking-tight text-white">StackWrite<span class="text-blue-500">.</span></span>
        </a>

        <div class="hidden md:flex space-x-8 text-sm font-medium text-slate-300">
            <a href="/" class="hover:text-white transition">Home</a>
            <a href="explore" class="hover:text-white transition">Explore</a>
            <a href="community" class="hover:text-white transition">Community</a>
            <a href="about" class="hover:text-white transition">About</a>
            <a href="contact" class="hover:text-white transition">Contact Us</a>
        </div>

        <div class="hidden md:flex items-center space-x-6">
            <?php
            if (isset($_SESSION['current_user'])) {
                $user = $_SESSION['current_user'];
                $role = $user->get_role();
                $fullName = htmlspecialchars(($user->get_first_name() ?? 'User') . ' ' . ($user->get_last_name() ?? ''));
                $avatar = "https://ui-avatars.com/api/?name=" . urlencode($fullName) . "&background=0f172a&color=3b82f6&size=128";
            ?>
                <button class="relative text-slate-400 hover:text-white transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                    </svg>
                    <span class="absolute top-0 right-0 block h-2 w-2 rounded-full bg-red-500 ring-2 ring-slate-900"></span>
                </button>

                <div class="relative group h-full flex items-center">

                    <button class="flex items-center space-x-3 focus:outline-none py-2">
                        <div class="text-right hidden lg:block">
                            <p class="text-sm font-semibold text-white"><?= $fullName ?></p>
                            <p class="text-xs text-slate-500 uppercase tracking-wide"><?= htmlspecialchars($role) ?></p>
                        </div>
                        <img src="<?= $avatar ?>" alt="Avatar" class="w-10 h-10 rounded-full border-2 border-slate-700 group-hover:border-blue-500 transition shadow-lg">
                        <svg class="w-4 h-4 text-slate-500 group-hover:text-white transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <div class="absolute right-0 top-full pt-4 w-56 hidden group-hover:block z-50">

                        <div class="bg-slate-800 rounded-xl shadow-xl border border-slate-700 py-2">

                            <div class="px-4 py-3 border-b border-slate-700 lg:hidden">
                                <p class="text-sm text-white font-bold"><?= $fullName ?></p>
                                <p class="text-xs text-slate-500 truncate"><?= htmlspecialchars($user->get_email()) ?></p>
                            </div>

                            <a href="profile" class="block px-4 py-2 text-sm text-slate-300 hover:bg-slate-700 hover:text-white transition">
                                Your Profile
                            </a>

                            <?php if ($role == 'admin'): ?>
                                <a href="dashboard-admin" class="block px-4 py-2 text-sm text-slate-300 hover:bg-slate-700 hover:text-white transition">
                                    Admin Dashboard
                                </a>
                            <?php elseif ($role == 'author'): ?>
                                <a href="dashboard-author" class="block px-4 py-2 text-sm text-slate-300 hover:bg-slate-700 hover:text-white transition">
                                    Author Dashboard
                                </a>
                            <?php endif; ?>

                            <a href="settings" class="block px-4 py-2 text-sm text-slate-300 hover:bg-slate-700 hover:text-white transition">
                                Settings
                            </a>

                            <div class="border-t border-slate-700 my-2"></div>

                            <a href="logout" class="block px-4 py-2 text-sm text-red-400 hover:bg-slate-700 hover:text-red-300 transition">
                                Sign Out
                            </a>
                        </div>
                    </div>
                </div>

            <?php
            } else {
            ?>
                <a href="login" class="text-sm font-medium text-slate-300 hover:text-white transition">Log In</a>
                <a href="register" class="bg-blue-600 hover:bg-blue-500 text-white px-5 py-2 rounded-full font-medium transition shadow-lg shadow-blue-500/20 hover:shadow-blue-500/40">
                    Get Started
                </a>
            <?php
            }
            ?>
        </div>

        <div class="md:hidden flex items-center">
            <button id="mobile-menu-btn" class="text-slate-300 hover:text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-slate-800 border-t border-slate-700">
        <?php
        if (isset($_SESSION['current_user'])) {
            // 1. SETUP VARIABLES ONCE
            $user = $_SESSION['current_user'];
            $role = $user->get_role();
            $fullName = htmlspecialchars(($user->get_first_name() ?? 'User') . ' ' . ($user->get_last_name() ?? ''));
            $email = htmlspecialchars($user->get_email() ?? '');
            $avatar = "https://ui-avatars.com/api/?name=" . urlencode($fullName) . "&background=0f172a&color=3b82f6&size=128";
        ?>
            <div class="px-6 py-4 border-b border-slate-700 flex items-center space-x-3 bg-slate-900/50">
                <img src="<?= $avatar ?>" alt="Avatar" class="h-10 w-10 rounded-full border border-slate-600">
                <div class="overflow-hidden">
                    <div class="text-base font-bold text-white truncate"><?= $fullName ?></div>
                    <div class="text-xs font-medium text-slate-400 truncate uppercase"><?= $role ?> Account</div>
                </div>
            </div>

            <a href="profile" class="block py-3 px-6 text-slate-300 hover:bg-slate-700 hover:text-white transition border-l-2 border-transparent hover:border-blue-500">
                My Profile
            </a>

            <?php if ($role == 'admin'): ?>
                <a href="dashboard-admin" class="block py-3 px-6 text-slate-300 hover:bg-slate-700 hover:text-white transition border-l-2 border-transparent hover:border-blue-500">
                    Admin Dashboard
                </a>
            <?php elseif ($role == 'author'): ?>
                <a href="dashboard-author" class="block py-3 px-6 text-slate-300 hover:bg-slate-700 hover:text-white transition border-l-2 border-transparent hover:border-blue-500">
                    Author Dashboard
                </a>
            <?php endif; ?>

            <a href="settings" class="block py-3 px-6 text-slate-300 hover:bg-slate-700 hover:text-white transition border-l-2 border-transparent hover:border-blue-500">
                Settings
            </a>

            <a href="logout" class="block py-3 px-6 text-red-400 hover:bg-slate-700 hover:text-red-300 transition font-medium border-t border-slate-700 mt-2">
                Sign Out
            </a>

        <?php
        } else {
        ?>
            <a href="login" class="block py-3 px-6 text-slate-300 hover:bg-slate-700 hover:text-white transition">Log In</a>
            <a href="register" class="block py-3 px-6 text-blue-400 font-bold hover:bg-slate-700 transition">Get Started</a>
        <?php
        }
        ?>
    </div>
</nav>

<script>
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>