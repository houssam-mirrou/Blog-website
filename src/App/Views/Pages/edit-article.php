<div class="max-w-4xl mx-auto mt-10 p-6 bg-slate-800 rounded-xl shadow-lg border border-slate-700">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-white">Edit Article</h1>
        <a href="/dashboard-author" class="text-slate-400 hover:text-white transition">Cancel</a>
    </div>

    <form action="/update-article" method="POST" class="space-y-6">

        <input type="hidden" name="article_id" value="<?= $article->get_id() ?>">

        <div>
            <label class="block text-sm font-medium text-slate-300 mb-2">Article Title</label>
            <input type="text"
                name="title"
                value="<?= htmlspecialchars($article->get_title()) ?>"
                required
                class="w-full bg-slate-900 border border-slate-600 text-white rounded-lg p-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-300 mb-2">
                Categories (Hold Ctrl/Cmd to select multiple)
            </label>
            <select name="category_ids[]" multiple
                class="w-full h-32 bg-slate-900 border border-slate-600 text-slate-300 rounded-lg p-2.5 focus:ring-2 focus:ring-blue-500 outline-none">

                <?php foreach ($categories as $cat): ?>
                    <?php
                    // Check if this category is in the article's current categories
                    $is_selected = in_array($cat->get_id(), $selected_ids) ? 'selected' : '';                    ?>
                    <option value="<?= $cat->get_id() ?>" <?= $is_selected ?>>
                        <?= htmlspecialchars($cat->get_name()) ?>
                    </option>
                <?php endforeach; ?>

            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-300 mb-2">Content (Markdown supported)</label>
            <textarea name="body"
                rows="12"
                required
                class="w-full bg-slate-900 border border-slate-600 text-slate-300 font-mono text-sm rounded-lg p-4 focus:ring-2 focus:ring-blue-500 outline-none transition"
                placeholder="# Write your article content here..."><?= htmlspecialchars($article->get_body()) ?></textarea>
        </div>

        <div class="flex justify-end gap-4 pt-4 border-t border-slate-700">
            <a href="/dashboard-author" class="px-6 py-2.5 rounded-lg text-slate-300 hover:bg-slate-700 transition">
                Discard Changes
            </a>
            <button type="submit" class="px-6 py-2.5 bg-blue-600 hover:bg-blue-500 text-white font-bold rounded-lg shadow-lg shadow-blue-600/20 transition transform hover:-translate-y-0.5">
                Update Article
            </button>
        </div>

    </form>
</div>