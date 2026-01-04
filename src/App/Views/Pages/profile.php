<main class="bg-slate-900 min-h-screen pb-20 relative">

    <?php
    if (!isset($profile_user)) {
        $profile_user = $_SESSION['current_user'] ?? null;
        if (!$profile_user) {
            $profile_user = [
                'first_name' => 'Houssam',
                'last_name' => 'Dev',
                'role' => 'author', // Try changing to 'reader' to see the difference
                'bio' => 'Full-stack developer obsessed with clean code and dark modes. Writing about PHP, Linux, and modern web architecture.',
                'email' => 'houssam@stackwrite.com',
                'joined_at' => 'Jan 2024'
            ];
            $profile_user = (object) $profile_user;
        }
    }
    $is_own_profile = isset($_SESSION['current_user']) && $_SESSION['current_user']->get_email() === $profile_user->get_email();

    $fullName = htmlspecialchars($profile_user->get_first_name() . ' ' . $profile_user->get_last_name());
    $avatar = "https://ui-avatars.com/api/?name=" . urlencode($fullName) . "&background=0f172a&color=3b82f6&size=256";
    $role = $profile_user->get_role();
    ?>

    <div class="h-64 w-full relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900 to-slate-900"></div>
        <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(#60a5fa 1px, transparent 1px); background-size: 24px 24px;"></div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10 -mt-24">

        <div class="bg-slate-800 rounded-2xl shadow-2xl border border-slate-700 p-6 md:p-8 flex flex-col md:flex-row items-start md:items-end gap-6">

            <div class="relative shrink-0">
                <img src="<?= $avatar ?>" alt="Profile" class="w-32 h-32 md:w-40 md:h-40 rounded-full border-4 border-slate-900 shadow-xl bg-slate-900">
                <div class="absolute bottom-2 right-2 bg-slate-900 rounded-full p-1.5 border border-slate-700" title="Role: <?= ucfirst($role) ?>">
                    <?php if ($role === 'admin'): ?>
                        <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    <?php elseif ($role === 'author'): ?>
                        <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    <?php else: ?>
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"></path>
                        </svg>
                    <?php endif; ?>
                </div>
            </div>

            <div class="flex-grow">
                <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-4">
                    <div>
                        <h1 class="text-3xl font-bold text-white mb-1"><?= $fullName ?></h1>
                        <p class="text-blue-400 font-medium text-sm mb-3">@<?= strtolower($profile_user->get_first_name()) ?></p>

                        <div class="flex items-center gap-6 text-sm text-slate-400">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                Joined <?= $profile_user->get_created_date() ?? 'Recently' ?>
                            </span>
                            <?php if ($role === 'author'): ?>
                                <span class="flex items-center gap-1.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                    12 Articles
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="flex gap-3 mt-2 md:mt-0">
                        <?php if ($is_own_profile): ?>
                            <a href="settings" class="px-5 py-2.5 bg-slate-700 hover:bg-slate-600 text-white rounded-lg font-medium transition border border-slate-600 shadow-sm flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                </svg>
                                Edit Profile
                            </a>
                        <?php else: ?>
                            <button class="px-5 py-2.5 bg-blue-600 hover:bg-blue-500 text-white rounded-lg font-bold transition shadow-lg shadow-blue-500/20">
                                Follow
                            </button>
                            <button class="px-3 py-2.5 bg-slate-700 hover:bg-slate-600 text-white rounded-lg border border-slate-600 transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>


        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-8">


            <div class="space-y-6">

                <div class="bg-slate-800 rounded-xl border border-slate-700 p-6">
                    <h3 class="text-white font-bold mb-4">About</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6">
                        <?= $profile_user->bio ?? 'This user has not written a bio yet.' ?>
                    </p>

                    <div class="space-y-3">
                        <div class="flex items-center text-slate-400 text-sm">
                            <svg class="w-5 h-5 mr-3 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            San Francisco, CA
                        </div>
                        <div class="flex items-center text-slate-400 text-sm">
                            <svg class="w-5 h-5 mr-3 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                            </svg>
                            <a href="#" class="text-blue-400 hover:underline">houssam.dev</a>
                        </div>
                        <div class="flex items-center text-slate-400 text-sm">
                            <svg class="w-5 h-5 mr-3 text-slate-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg>
                            @houssam_dev
                        </div>
                    </div>
                </div>

                <div class="bg-slate-800 rounded-xl border border-slate-700 p-6">
                    <h3 class="text-white font-bold mb-4">Interests</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-slate-700 text-slate-300 rounded-full text-xs font-medium border border-slate-600">PHP</span>
                        <span class="px-3 py-1 bg-slate-700 text-slate-300 rounded-full text-xs font-medium border border-slate-600">Laravel</span>
                        <span class="px-3 py-1 bg-slate-700 text-slate-300 rounded-full text-xs font-medium border border-slate-600">Docker</span>
                        <span class="px-3 py-1 bg-slate-700 text-slate-300 rounded-full text-xs font-medium border border-slate-600">Linux</span>
                        <span class="px-3 py-1 bg-slate-700 text-slate-300 rounded-full text-xs font-medium border border-slate-600">System Design</span>
                    </div>
                </div>

                <?php if ($is_own_profile && $role === 'reader'): ?>
                    <div class="bg-gradient-to-br from-blue-600 to-indigo-700 rounded-xl p-6 shadow-xl relative overflow-hidden group border border-blue-500/50">

                        <div class="absolute top-0 right-0 -mt-8 -mr-8 w-32 h-32 bg-white/10 rounded-full blur-2xl transition group-hover:bg-white/20"></div>

                        <div class="relative z-10">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-10 h-10 bg-white/20 backdrop-blur-sm rounded-lg flex items-center justify-center border border-white/10">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-bold text-white text-lg">Start Writing?</h3>
                            </div>

                            <p class="text-blue-100 text-sm mb-5 leading-relaxed">
                                Upgrade to an <strong>Author</strong> account to publish articles and build your portfolio.
                            </p>

                            <a href="/upgrade-role" class="block w-full bg-white text-blue-700 font-bold py-3 rounded-lg text-center hover:bg-blue-50 transition shadow-lg shadow-black/20 transform hover:-translate-y-0.5">
                                Become an Author
                            </a>
                        </div>
                    </div>
                <?php endif; ?>

            </div>


            <div class="lg:col-span-2 space-y-6">

                <div class="flex border-b border-slate-700 mb-6">
                    <button class="px-6 py-3 text-blue-400 border-b-2 border-blue-500 font-bold text-sm">
                        <?= ($role === 'author') ? 'Articles' : 'Activity' ?>
                    </button>
                    <button class="px-6 py-3 text-slate-400 hover:text-white transition font-medium text-sm">
                        About
                    </button>
                    <?php if ($role === 'author'): ?>
                        <button class="px-6 py-3 text-slate-400 hover:text-white transition font-medium text-sm">
                            Series
                        </button>
                    <?php endif; ?>
                </div>

                <?php if ($role === 'author'): ?>
                    <div class="space-y-6">

                        <article class="bg-slate-800 rounded-xl border border-slate-700 p-6 hover:border-slate-600 transition group cursor-pointer">
                            <div class="flex items-center gap-2 text-xs text-slate-500 mb-3">
                                <span>Dec 28, 2025</span> • <span>5 min read</span>
                            </div>
                            <h2 class="text-xl font-bold text-white mb-2 group-hover:text-blue-400 transition">
                                The Evolution of Modern Web Architecture
                            </h2>
                            <p class="text-slate-400 text-sm line-clamp-2 mb-4">
                                When we talk about web architecture, we often get lost in the sea of new frameworks. But understanding the underlying patterns is what matters.
                            </p>
                            <div class="flex items-center justify-between">
                                <div class="flex gap-2">
                                    <span class="px-2 py-1 bg-blue-500/10 text-blue-400 text-xs rounded border border-blue-500/20">Architecture</span>
                                </div>
                                <div class="flex items-center gap-4 text-slate-500 text-xs">
                                    <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                        </svg> 124</span>
                                    <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                        </svg> 12</span>
                                </div>
                            </div>
                        </article>

                        <article class="bg-slate-800 rounded-xl border border-slate-700 p-6 hover:border-slate-600 transition group cursor-pointer">
                            <div class="flex items-center gap-2 text-xs text-slate-500 mb-3">
                                <span>Dec 20, 2025</span> • <span>8 min read</span>
                            </div>
                            <h2 class="text-xl font-bold text-white mb-2 group-hover:text-blue-400 transition">
                                Understanding PHP 8.2 Readonly Classes
                            </h2>
                            <p class="text-slate-400 text-sm line-clamp-2 mb-4">
                                Learn how readonly classes can make your data transfer objects (DTOs) immutable and cleaner.
                            </p>
                            <div class="flex items-center justify-between">
                                <div class="flex gap-2">
                                    <span class="px-2 py-1 bg-purple-500/10 text-purple-400 text-xs rounded border border-purple-500/20">PHP</span>
                                </div>
                                <div class="flex items-center gap-4 text-slate-500 text-xs">
                                    <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                        </svg> 89</span>
                                    <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                        </svg> 5</span>
                                </div>
                            </div>
                        </article>

                    </div>
                <?php else: ?>
                    <div class="bg-slate-800 rounded-xl border border-slate-700 p-8 text-center py-12">
                        <div class="w-16 h-16 bg-slate-700 rounded-full flex items-center justify-center mx-auto mb-4 text-slate-400">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <h3 class="text-white font-bold text-lg mb-2">Reading Activity</h3>
                        <p class="text-slate-400 text-sm max-w-sm mx-auto">
                            <?= $profile_user->get_first_name() ?> is an avid reader. Their recent comments and saved articles will appear here.
                        </p>
                    </div>
                <?php endif; ?>

            </div>

        </div>

    </div>
</main>