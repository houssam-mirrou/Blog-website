<main class="max-w-4xl mx-auto px-4 py-8">

    <article class="bg-white rounded-xl shadow-sm overflow-hidden mb-8">

        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1200&q=80" alt="Coding Setup" class="w-full h-96 object-cover">

        <div class="p-8">
            <div class="flex justify-between items-start mb-6">
                <div class="flex space-x-2">
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-800 text-xs font-semibold rounded-full">Technology</span>
                    <span class="px-3 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full">Coding</span>
                </div>

                <button onclick="openReportModal('Article', 'The Future of Web Dev')" class="text-gray-400 hover:text-red-500 transition-colors flex items-center gap-2 text-sm">
                    <i class="fa-regular fa-flag"></i> Report Article
                </button>
            </div>

            <h1 class="text-4xl font-bold text-gray-900 mb-4 leading-tight">The Evolution of Modern Web Architecture</h1>

            <div class="flex items-center mb-8 pb-8 border-b border-gray-100">
                <img src="https://ui-avatars.com/api/?name=Houssam+Dev&background=random" alt="Author" class="h-10 w-10 rounded-full mr-3">
                <div>
                    <p class="text-sm font-semibold text-gray-900">Houssam Dev</p>
                    <p class="text-xs text-gray-500">Published on Dec 28, 2025 · 5 min read</p>
                </div>
            </div>

            <div class="prose max-w-none text-gray-700 leading-relaxed mb-8">
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <h2 class="text-2xl font-bold text-gray-900 mt-6 mb-3">Understanding the MVC Pattern</h2>
                <p class="mb-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <blockquote class="border-l-4 border-indigo-500 pl-4 italic my-6 text-gray-600 bg-gray-50 py-2 pr-2">
                    "The only way to do great work is to love what you do. Code is poetry written by machines."
                </blockquote>
                <p>Mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
            </div>

            <div class="flex items-center justify-between pt-6 border-t border-gray-100">
                <div class="flex items-center gap-6">
                    <button onclick="toggleLike(this)" class="group flex items-center gap-2 text-gray-500 hover:text-red-500 transition-colors">
                        <i class="fa-regular fa-heart text-2xl group-hover:scale-110 transition-transform"></i>
                        <span class="font-medium">1,240 Likes</span>
                    </button>

                    <button class="flex items-center gap-2 text-gray-500 hover:text-indigo-600 transition-colors">
                        <i class="fa-regular fa-comment text-2xl"></i>
                        <span class="font-medium">48 Comments</span>
                    </button>
                </div>

                <button class="text-gray-400 hover:text-gray-800">
                    <i class="fa-solid fa-share-nodes text-xl"></i>
                </button>
            </div>
        </div>
    </article>

    <section class="bg-white rounded-xl shadow-sm p-8">
        <h3 class="text-2xl font-bold text-gray-900 mb-6">Discussion (48)</h3>

        <div class="flex gap-4 mb-8">
            <img src="https://ui-avatars.com/api/?name=Guest+User&background=eee&color=333" class="w-10 h-10 rounded-full">
            <div class="flex-1">
                <textarea placeholder="Add to the discussion..." class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition-all h-24 resize-none"></textarea>
                <div class="flex justify-end mt-2">
                    <button class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700 transition-colors font-medium">Post Comment</button>
                </div>
            </div>
        </div>

        <div class="space-y-6">

            <div class="flex gap-4 p-4 hover:bg-gray-50 rounded-lg transition-colors group">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-10 h-10 rounded-full flex-shrink-0">
                <div class="flex-1">
                    <div class="flex justify-between items-start">
                        <div>
                            <h4 class="font-bold text-gray-900 text-sm">Alex Johnson</h4>
                            <span class="text-xs text-gray-500">2 hours ago</span>
                        </div>

                        <button onclick="openReportModal('Comment', 'Comment by Alex Johnson')" class="text-gray-300 hover:text-red-500 opacity-0 group-hover:opacity-100 transition-all text-xs flex items-center gap-1" title="Report this comment">
                            <i class="fa-solid fa-flag"></i> Report
                        </button>
                    </div>

                    <p class="text-gray-700 mt-2 text-sm leading-relaxed">Great article! I really liked the explanation about MVC architecture. It cleared up a lot of confusion I had regarding Controllers.</p>

                    <div class="flex items-center gap-4 mt-3">
                        <button onclick="toggleLike(this)" class="text-gray-400 hover:text-red-500 text-xs flex items-center gap-1 transition-colors">
                            <i class="fa-regular fa-heart"></i> 12
                        </button>
                        <button class="text-gray-400 hover:text-indigo-600 text-xs font-medium">Reply</button>
                    </div>
                </div>
            </div>

            <div class="flex gap-4 p-4 hover:bg-gray-50 rounded-lg transition-colors group">
                <img src="https://randomuser.me/api/portraits/women/44.jpg" class="w-10 h-10 rounded-full flex-shrink-0">
                <div class="flex-1">
                    <div class="flex justify-between items-start">
                        <div>
                            <h4 class="font-bold text-gray-900 text-sm">Sarah Williams</h4>
                            <span class="text-xs text-gray-500">5 hours ago</span>
                        </div>
                        <button onclick="openReportModal('Comment', 'Comment by Sarah Williams')" class="text-gray-300 hover:text-red-500 opacity-0 group-hover:opacity-100 transition-all text-xs flex items-center gap-1" title="Report this comment">
                            <i class="fa-solid fa-flag"></i> Report
                        </button>
                    </div>

                    <p class="text-gray-700 mt-2 text-sm leading-relaxed">I disagree with the point about raw SQL. ORMs are much safer for beginners to prevent injection attacks.</p>

                    <div class="flex items-center gap-4 mt-3">
                        <button onclick="toggleLike(this)" class="text-gray-400 hover:text-red-500 text-xs flex items-center gap-1 transition-colors">
                            <i class="fa-regular fa-heart"></i> 5
                        </button>
                        <button class="text-gray-400 hover:text-indigo-600 text-xs font-medium">Reply</button>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>

<div id="reportModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center backdrop-blur-sm">
    <div class="bg-white rounded-xl shadow-2xl w-full max-w-md mx-4 transform transition-all scale-100">
        <div class="p-6 border-b border-gray-100 flex justify-between items-center">
            <h3 class="text-lg font-bold text-gray-900 flex items-center gap-2">
                <i class="fa-solid fa-triangle-exclamation text-red-500"></i> Report Content
            </h3>
            <button onclick="closeReportModal()" class="text-gray-400 hover:text-gray-600">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>

        <div class="p-6">
            <p class="text-sm text-gray-600 mb-4">You are reporting: <span id="reportTarget" class="font-bold text-gray-800">Target</span></p>

            <form onsubmit="event.preventDefault(); submitReport();">
                <label class="block text-sm font-medium text-gray-700 mb-2">Reason for reporting</label>
                <select class="w-full border border-gray-300 rounded-md p-2 mb-4 focus:ring-indigo-500 focus:border-indigo-500">
                    <option>Spam or misleading</option>
                    <option>Harassment or hate speech</option>
                    <option>Inappropriate content</option>
                    <option>Other</option>
                </select>

                <label class="block text-sm font-medium text-gray-700 mb-2">Additional Details (Optional)</label>
                <textarea class="w-full border border-gray-300 rounded-md p-2 h-24 mb-6 focus:ring-indigo-500 focus:border-indigo-500" placeholder="Please provide more context..."></textarea>

                <div class="flex justify-end gap-3">
                    <button type="button" onclick="closeReportModal()" class="px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-md transition-colors">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition-colors">Submit Report</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // 1. LIKE FUNCTIONALITY
    function toggleLike(btn) {
        const icon = btn.querySelector('i');

        // Toggle Heart Icon Style
        if (icon.classList.contains('fa-regular')) {
            icon.classList.remove('fa-regular');
            icon.classList.add('fa-solid');
            btn.classList.add('text-red-500');
            btn.classList.remove('text-gray-500', 'text-gray-400');

            // Optional: Increment number logic here
        } else {
            icon.classList.remove('fa-solid');
            icon.classList.add('fa-regular');
            btn.classList.remove('text-red-500');
            btn.classList.add('text-gray-500');
        }
    }

    // 2. REPORT MODAL LOGIC
    const modal = document.getElementById('reportModal');
    const reportTargetSpan = document.getElementById('reportTarget');

    function openReportModal(type, title) {
        reportTargetSpan.innerText = `"${title}" (${type})`;
        modal.classList.remove('hidden');
    }

    function closeReportModal() {
        modal.classList.add('hidden');
    }

    function submitReport() {
        // Here you would send an AJAX/Fetch request to your PHP backend
        alert('Report submitted successfully! Our team will review it.');
        closeReportModal();
    }

    // Close modal if clicking outside
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            closeReportModal();
        }
    });
</script>