<?php
// Security: Ensure user is Admin
if (!isset($_SESSION['current_user']) || $_SESSION['current_user']->get_role() !== 'admin') {
    header("Location: /login");
    exit();
}

// MOCK DATA (Replace with DB calls)
$stats = [
    'users' => 1250,
    'articles' => 340
];

$articles = [
    ['id' => 101, 'title' => 'Spam Article Title', 'author' => 'BadUser123', 'date' => 'Dec 30', 'reports' => 5],
    ['id' => 102, 'title' => 'Understanding PHP 8.2', 'author' => 'Houssam', 'date' => 'Dec 28', 'reports' => 0],
    ['id' => 103, 'title' => 'How to center a div', 'author' => 'Sarah', 'date' => 'Dec 25', 'reports' => 0],
];
?>

<main class="bg-slate-900 min-h-screen pb-20">

    <div class="border-b border-slate-800 bg-slate-900/50 backdrop-blur-sm sticky top-0 z-30">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-4">
                <div class="p-2 bg-red-500/10 rounded-lg border border-red-500/20">
                    <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h1 class="text-2xl font-bold text-white">Admin Console</h1>
            </div>

            <a href="/" class="text-slate-400 hover:text-white transition text-sm font-medium">
                Back to Site &rarr;
            </a>
        </div>
    </div>

    <div class="container mx-auto px-6 py-8">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <div class="bg-slate-800 p-6 rounded-2xl border border-slate-700">
                <p class="text-slate-400 text-sm font-medium uppercase tracking-wide">Total Users</p>
                <p class="text-3xl font-bold text-white mt-2"><?= $number_of_users ?></p>
            </div>
            <div class="bg-slate-800 p-6 rounded-2xl border border-slate-700">
                <p class="text-slate-400 text-sm font-medium uppercase tracking-wide">Total Articles</p>
                <p class="text-3xl font-bold text-white mt-2"><?= $stats['articles'] ?></p>
            </div>
            <div class="bg-slate-800 p-6 rounded-2xl border border-slate-700">
                <p class="text-slate-400 text-sm font-medium uppercase tracking-wide">Categories</p>
                <p class="text-3xl font-bold text-white mt-2"><?= $number_of_categories ?></p>
            </div>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-2 gap-10">

            <div class="space-y-4">
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-bold text-white">Manage Categories</h2>
                    <button onclick="openCategoryModal('add')" class="bg-blue-600 hover:bg-blue-500 text-white px-4 py-2 rounded-lg text-sm font-bold transition shadow-lg shadow-blue-600/20 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        Add Category
                    </button>
                </div>

                <div class="bg-slate-800 rounded-xl border border-slate-700 overflow-hidden">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-slate-700 bg-slate-900/50 text-xs uppercase text-slate-400">
                                <th class="px-6 py-4 font-bold">ID</th>
                                <th class="px-6 py-4 font-bold">Name</th>
                                <th class="px-6 py-4 font-bold">Articles</th>
                                <th class="px-6 py-4 font-bold text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-700">
                            <?php foreach ($categories as $cat): ?>
                                <tr class="group hover:bg-slate-750 transition">
                                    <td class="px-6 py-4 text-slate-500 font-mono text-sm">#<?= $cat->get_id() ?></td>
                                    <td class="px-6 py-4 text-white font-medium"><?= $cat->get_name() ?></td>
                                    <td class="px-6 py-4 text-slate-400 text-sm"><?= 0 ?></td>
                                    <td class="px-6 py-4 text-right space-x-2">
                                        <button onclick="openCategoryModal('edit', <?= $cat->get_id() ?>, '<?= $cat->get_name() ?>')" class="text-blue-400 hover:text-white transition text-sm">Edit</button>
                                        <span class="text-slate-600">|</span>
                                        <button onclick="openDeleteModal('category', <?= $cat->get_id() ?>)" class="text-red-400 hover:text-red-300 transition text-sm">Delete</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="space-y-4">
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-bold text-white">Recent Articles</h2>
                    <span class="text-sm text-slate-500">Latest submissions</span>
                </div>

                <div class="bg-slate-800 rounded-xl border border-slate-700 overflow-hidden">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-slate-700 bg-slate-900/50 text-xs uppercase text-slate-400">
                                <th class="px-6 py-4 font-bold">Title</th>
                                <th class="px-6 py-4 font-bold">Author</th>
                                <th class="px-6 py-4 font-bold text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-700">
                            <?php foreach ($articles as $art): ?>
                                <tr class="group hover:bg-slate-750 transition">
                                    <td class="px-6 py-4">
                                        <p class="text-white font-medium truncate max-w-[200px]"><?= $art['title'] ?></p>
                                        <p class="text-xs text-slate-500"><?= $art['date'] ?></p>
                                    </td>
                                    <td class="px-6 py-4 text-slate-300 text-sm">
                                        <?= $art['author'] ?>
                                        <?php if ($art['reports'] > 0): ?>
                                            <span class="ml-2 inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-red-500/10 text-red-400 border border-red-500/20">
                                                <?= $art['reports'] ?> Reports
                                            </span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button onclick="openDeleteModal('article', <?= $art['id'] ?>)" class="p-2 text-slate-400 hover:text-red-400 hover:bg-red-500/10 rounded-lg transition" title="Remove Article">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</main>


<div id="categoryModal" class="fixed inset-0 z-50 hidden flex items-center justify-center">
    <div class="absolute inset-0 bg-slate-950/80 backdrop-blur-sm transition-opacity" onclick="closeCategoryModal()"></div>

    <div class="relative bg-slate-800 rounded-xl shadow-2xl border border-slate-700 w-full max-w-md mx-4 p-6">
        <h3 id="modalTitle" class="text-xl font-bold text-white mb-4">Add Category</h3>

        <form id="cat_model" action="" method="POST">
            <input type="hidden" name="action" id="catAction" value="add">
            <input type="hidden" name="catId" id="catId" value="">

            <div class="mb-6">
                <label class="block text-xs font-bold text-slate-400 uppercase tracking-wide mb-2">Category Name</label>
                <input type="text" name="category_name" id="catName" class="w-full bg-slate-900 border border-slate-600 text-white rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none" placeholder="e.g. JavaScript" required>
            </div>

            <div class="flex justify-end gap-3">
                <button type="button" onclick="closeCategoryModal()" class="px-4 py-2 text-slate-300 hover:bg-slate-700 rounded-lg transition">Cancel</button>
                <button id="submit_category" type="submit" class="px-4 py-2 bg-blue-600 hover:bg-blue-500 text-white rounded-lg font-bold transition">Save Category</button>
            </div>
        </form>
    </div>
</div>

<div id="deleteModal" class="fixed inset-0 z-50 hidden flex items-center justify-center">
    <div class="absolute inset-0 bg-slate-950/80 backdrop-blur-sm transition-opacity" onclick="closeDeleteModal()"></div>

    <div class="relative bg-slate-800 rounded-xl shadow-2xl border border-slate-700 w-full max-w-sm mx-4 p-6 text-center">
        <div class="w-16 h-16 bg-red-500/10 rounded-full flex items-center justify-center mx-auto mb-4 text-red-500">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
            </svg>
        </div>
        <h3 class="text-xl font-bold text-white mb-2">Confirm Deletion</h3>
        <p class="text-slate-400 text-sm mb-6">Are you sure you want to remove this item? This action cannot be undone.</p>

        <form action="/delete-category" method="POST" class="flex gap-3 justify-center">
            <input type="hidden" name="type" id="deleteType">
            <input type="hidden" name="id_delete_category" id="deleteId">

            <button type="button" onclick="closeDeleteModal()" class="px-5 py-2.5 bg-slate-700 hover:bg-slate-600 text-slate-200 rounded-lg font-medium transition">Cancel</button>
            <button type="submit" class="px-5 py-2.5 bg-red-600 hover:bg-red-500 text-white rounded-lg font-bold transition shadow-lg shadow-red-600/20">Yes, Delete</button>
        </form>
    </div>
</div>

<script>
    // --- CATEGORY MODAL LOGIC ---
    const catModal = document.getElementById('categoryModal');
    const modalTitle = document.getElementById('modalTitle');
    const catAction = document.getElementById('catAction');
    const catId = document.getElementById('catId');
    const cat_model = document.getElementById('cat_model');
    const catName = document.getElementById('catName');
    const submit_category = document.getElementById('submit_category');

    function openCategoryModal(mode, id = null, name = '') {
        if (mode === 'edit') {
            modalTitle.innerText = "Edit Category";
            catAction.value = "update";
            catId.value = id;
            catName.value = name;
            cat_model.action = '/dashboard-admin/edit-category';
        } else {
            modalTitle.innerText = "Add New Category";
            catAction.value = "add";
            catId.value = "";
            catName.value = "";
            cat_model.action = '/dashboard-admin';
        }
        catModal.classList.remove('hidden');
    }

    function closeCategoryModal() {
        catModal.classList.add('hidden');
    }

    // --- DELETE MODAL LOGIC ---
    const delModal = document.getElementById('deleteModal');
    const deleteType = document.getElementById('deleteType'); // 'category' or 'article'
    const deleteId = document.getElementById('deleteId');

    function openDeleteModal(type, id) {
        deleteType.value = type;
        deleteId.value = id;
        delModal.classList.remove('hidden');
    }

    function closeDeleteModal() {
        delModal.classList.add('hidden');
    }
</script>