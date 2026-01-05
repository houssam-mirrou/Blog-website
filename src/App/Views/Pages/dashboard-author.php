<?php
// MOCK DATA: In your real app, fetch this from the database using $user->get_id()
$stats = [
    'total_articles' => $number_of_articles,
    'total_views' => '45.2k',
    'total_likes' => 1240,
    'followers' => 850
];

?>

<main class="bg-slate-900 min-h-screen pb-20">

    <div class="border-b border-slate-800 bg-slate-900/50 backdrop-blur-sm sticky top-0 z-30">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-white">Author Dashboard</h1>
            <a href="create-article" class="bg-blue-600 hover:bg-blue-500 text-white px-5 py-2.5 rounded-lg font-bold transition shadow-lg shadow-blue-500/20 flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Write New Article
            </a>
        </div>
    </div>

    <div class="container mx-auto px-6 py-8">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
            <div class="bg-slate-800 p-6 rounded-2xl border border-slate-700 shadow-lg">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-slate-400 text-sm font-medium">Total Articles</h3>
                    <div class="p-2 bg-blue-500/10 rounded-lg text-blue-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                        </svg>
                    </div>
                </div>
                <p class="text-3xl font-bold text-white"><?= $stats['total_articles'] ?></p>
            </div>

            <div class="bg-slate-800 p-6 rounded-2xl border border-slate-700 shadow-lg">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-slate-400 text-sm font-medium">Total Views</h3>
                    <div class="p-2 bg-purple-500/10 rounded-lg text-purple-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </div>
                </div>
                <p class="text-3xl font-bold text-white"><?= $stats['total_views'] ?></p>
            </div>

            <div class="bg-slate-800 p-6 rounded-2xl border border-slate-700 shadow-lg">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-slate-400 text-sm font-medium">Total Likes</h3>
                    <div class="p-2 bg-red-500/10 rounded-lg text-red-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                </div>
                <p class="text-3xl font-bold text-white"><?= $stats['total_likes'] ?></p>
            </div>

            <div class="bg-slate-800 p-6 rounded-2xl border border-slate-700 shadow-lg">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-slate-400 text-sm font-medium">Followers</h3>
                    <div class="p-2 bg-emerald-500/10 rounded-lg text-emerald-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                </div>
                <p class="text-3xl font-bold text-white"><?= $stats['followers'] ?></p>
            </div>
        </div>

        <div class="bg-slate-800 rounded-2xl border border-slate-700 shadow-xl overflow-hidden">

            <div class="p-5 border-b border-slate-700 flex flex-col sm:flex-row justify-between items-center gap-4">
                <h2 class="text-lg font-bold text-white">Your Articles</h2>
                <div class="flex gap-2">
                    <input type="text" placeholder="Search articles..." class="bg-slate-900 border border-slate-600 text-sm text-white px-4 py-2 rounded-lg focus:outline-none focus:border-blue-500">
                    <select class="bg-slate-900 border border-slate-600 text-sm text-slate-300 px-4 py-2 rounded-lg focus:outline-none focus:border-blue-500">
                        <option>All Status</option>
                        <option>Published</option>
                        <option>Draft</option>
                    </select>
                </div>
            </div>

            <div class="divide-y divide-slate-700">
                <?php foreach ($articles as $article): ?>
                    <div class="p-5 flex flex-col md:flex-row items-center gap-5 hover:bg-slate-750 transition duration-150 group">

                        <div class="w-full md:w-24 h-16 bg-slate-700 rounded-lg overflow-hidden shrink-0">
                            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=150&q=80" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition">
                        </div>

                        <div class="flex-grow text-center md:text-left">
                            <h3 class="text-white font-bold text-lg mb-1 group-hover:text-blue-400 transition">
                                <a href="#"><?= $article->get_title() ?></a>
                            </h3>
                            <div class="flex flex-wrap justify-center md:justify-start items-center gap-3 text-xs text-slate-400">
                                <span><?= $article->get_created_date() ?></span>
                                <!-- <?php //if ($article['status'] === 'Published'): 
                                        ?>
                                    <span class="px-2 py-0.5 rounded-full bg-green-500/10 text-green-400 border border-green-500/20">Published</span>
                                <?php //else: 
                                ?>
                                    <span class="px-2 py-0.5 rounded-full bg-yellow-500/10 text-yellow-400 border border-yellow-500/20">Draft</span>
                                <?php //endif; 
                                ?> -->
                                <span class="px-2 py-0.5 rounded-full bg-green-500/10 text-green-400 border border-green-500/20">Published</span>

                                <span class="flex items-center gap-1">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    <?= 0 ?>
                                </span>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 opacity-100 md:opacity-0 group-hover:opacity-100 transition duration-200">
                            <a href="edit-article?id=<?= $article->get_id() ?>" class="p-2 text-slate-400 hover:text-white hover:bg-slate-700 rounded-lg transition" title="Edit">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                            </a>
                            <button onclick="openDeleteModal(<?= $article->get_id() ?>, '<?= htmlspecialchars($article->get_title()) ?>')" class="p-2 text-slate-400 hover:text-red-400 hover:bg-red-500/10 rounded-lg transition" title="Delete">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                            </button>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>

            <div class="p-4 border-t border-slate-700 flex justify-between items-center bg-slate-800/50">
                <span class="text-sm text-slate-500">Showing 1-3 of 12</span>
                <div class="flex gap-2">
                    <button class="px-3 py-1 text-sm border border-slate-600 rounded text-slate-400 hover:bg-slate-700 disabled:opacity-50">Previous</button>
                    <button class="px-3 py-1 text-sm border border-slate-600 rounded text-slate-400 hover:bg-slate-700">Next</button>
                </div>
            </div>

        </div>

    </div>
</main>

<div id="deleteModal" class="fixed inset-0 z-50 hidden flex items-center justify-center">
    <div class="absolute inset-0 bg-slate-950/80 backdrop-blur-sm transition-opacity" onclick="closeDeleteModal()"></div>

    <div class="relative bg-slate-800 rounded-xl shadow-2xl border border-slate-700 w-full max-w-sm mx-4 transform transition-all scale-100">
        <div class="p-6 text-center">
            <div class="w-16 h-16 bg-red-500/10 rounded-full flex items-center justify-center mx-auto mb-4 text-red-500">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                </svg>
            </div>
            <h3 class="text-xl font-bold text-white mb-2">Delete Article?</h3>
            <p class="text-slate-400 text-sm mb-6">
                Are you sure you want to delete <br>
                <span id="deleteTitle" class="text-white font-medium italic">"Title"</span>?
                <br>This action cannot be undone.
            </p>

            <div class="flex gap-3 justify-center">
                <button onclick="closeDeleteModal()" class="px-5 py-2.5 bg-slate-700 hover:bg-slate-600 text-slate-200 rounded-lg font-medium transition">
                    Cancel
                </button>

                <form action="delete-article" method="POST">
                    <input type="hidden" name="article_id" id="deleteId">
                    <button type="submit" class="px-5 py-2.5 bg-red-600 hover:bg-red-500 text-white rounded-lg font-bold transition shadow-lg shadow-red-600/20">
                        Yes, Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const modal = document.getElementById('deleteModal');
    const deleteIdInput = document.getElementById('deleteId');
    const deleteTitleSpan = document.getElementById('deleteTitle');

    function openDeleteModal(id, title) {
        deleteIdInput.value = id;
        deleteTitleSpan.textContent = `"${title}"`;
        modal.classList.remove('hidden');
    }

    function closeDeleteModal() {
        modal.classList.add('hidden');
    }
</script>