<?php
// Security: Ensure user is Author or Admin
if (!isset($_SESSION['current_user']) || 
    ($_SESSION['current_user']->get_role() !== 'author' && $_SESSION['current_user']->get_role() !== 'admin')) {
    header("Location: /login");
    exit();
}
?>

<div class="bg-slate-900 min-h-screen flex flex-col">

    <form action="store-article" method="POST" enctype="multipart/form-data" class="flex flex-col flex-grow">
        
        <header class="bg-slate-900 border-b border-slate-800 sticky top-0 z-50">
            <div class="container mx-auto px-6 h-16 flex items-center justify-between">
                
                <div class="flex items-center gap-4">
                    <a href="dashboard-author" class="text-slate-400 hover:text-white transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    </a>
                    <span class="text-slate-600 text-2xl font-thin">|</span>
                    <span class="text-white font-bold tracking-tight">Write Post</span>
                    <span class="px-2 py-0.5 rounded text-xs bg-yellow-500/10 text-yellow-500 border border-yellow-500/20">Draft</span>
                </div>

                <div class="flex items-center gap-3">
                    <button type="button" class="text-slate-400 hover:text-white px-4 py-2 text-sm font-medium transition">
                        Preview
                    </button>
                    <button type="submit" name="status" value="draft" class="text-slate-300 hover:text-white hover:bg-slate-800 px-4 py-2 rounded-lg text-sm font-medium transition border border-transparent hover:border-slate-700">
                        Save Draft
                    </button>
                    <button type="submit" name="status" value="published" class="bg-blue-600 hover:bg-blue-500 text-white px-6 py-2 rounded-lg text-sm font-bold transition shadow-lg shadow-blue-600/20">
                        Publish
                    </button>
                </div>
            </div>
        </header>

        <div class="flex-grow container mx-auto px-6 py-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 h-full">

                <div class="lg:col-span-2 flex flex-col gap-6">
                    
                    <div id="imagePreviewContainer" class="hidden rounded-xl overflow-hidden border border-slate-700 shadow-xl relative group">
                        <img id="imagePreview" src="" class="w-full h-64 object-cover">
                        <button type="button" onclick="removeImage()" class="absolute top-4 right-4 bg-red-600 text-white p-2 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        </button>
                    </div>

                    <input 
                        type="text" 
                        name="title" 
                        placeholder="New post title here..." 
                        class="bg-transparent text-4xl md:text-5xl font-extrabold text-white placeholder-slate-600 border-none focus:ring-0 outline-none w-full leading-tight"
                        required
                    >

                    <div class="flex items-center gap-2">
                        <span class="text-slate-500">#</span>
                        <input type="text" name="tags_input" placeholder="Add tags (e.g. php, tutorial)..." class="bg-transparent text-slate-300 placeholder-slate-600 border-none focus:ring-0 outline-none w-full text-sm font-mono">
                    </div>

                    <div class="bg-slate-800 rounded-t-lg border border-slate-700 p-2 flex items-center gap-1 sticky top-16 z-40">
                        <button type="button" class="p-2 text-slate-400 hover:text-white hover:bg-slate-700 rounded transition" title="Bold">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 12h8a4 4 0 100-8H6v8zm0 0l-2 2m2-2L6 4"></path></svg>
                        </button>
                        <button type="button" class="p-2 text-slate-400 hover:text-white hover:bg-slate-700 rounded transition" title="Italic">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                        </button>
                        <div class="w-px h-6 bg-slate-700 mx-2"></div>
                        <button type="button" class="p-2 text-slate-400 hover:text-blue-400 hover:bg-slate-700 rounded transition" title="Code Block">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                        </button>
                        <button type="button" class="p-2 text-slate-400 hover:text-white hover:bg-slate-700 rounded transition" title="Link">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                        </button>
                        <button type="button" class="p-2 text-slate-400 hover:text-white hover:bg-slate-700 rounded transition" title="Image">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </button>
                    </div>

                    <textarea 
                        name="content" 
                        id="markdown-editor" 
                        class="w-full bg-slate-800 border-x border-b border-slate-700 rounded-b-lg p-6 text-slate-300 placeholder-slate-500 font-mono focus:ring-0 focus:outline-none resize-none leading-relaxed min-h-[500px]"
                        placeholder="Write your story here using Markdown..."
                    ></textarea>

                </div>

                <div class="lg:col-span-1 space-y-8">
                    
                    <div class="bg-slate-800 rounded-xl border border-slate-700 p-6">
                        <h3 class="text-white font-bold mb-4">Post Settings</h3>
                        
                        <div class="mb-6">
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-wide mb-2">Cover Image</label>
                            <label class="flex flex-col items-center justify-center w-full h-32 border-2 border-slate-600 border-dashed rounded-lg cursor-pointer hover:bg-slate-700/50 hover:border-blue-500 transition group">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-3 text-slate-500 group-hover:text-blue-500 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                    <p class="text-xs text-slate-400">Click to upload or drag and drop</p>
                                </div>
                                <input type="file" name="cover_image" class="hidden" accept="image/*" onchange="previewImage(event)">
                            </label>
                        </div>

                        <div class="mb-6">
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-wide mb-2">Category</label>
                            <select name="category_id" class="w-full bg-slate-900 border border-slate-600 text-slate-300 rounded-lg p-2.5 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                                <option value="" disabled selected>Select a topic...</option>
                                <option value="1">Technology</option>
                                <option value="2">Programming</option>
                                <option value="3">DevOps</option>
                                <option value="4">Design</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-wide mb-2">Excerpt (SEO)</label>
                            <textarea name="excerpt" rows="3" class="w-full bg-slate-900 border border-slate-600 text-slate-300 rounded-lg p-3 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none resize-none" placeholder="Short summary for search engines..."></textarea>
                        </div>

                    </div>

                    <div class="bg-blue-900/20 rounded-xl border border-blue-500/30 p-5">
                        <h4 class="text-blue-400 font-bold mb-2 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Writing Tips
                        </h4>
                        <ul class="text-sm text-blue-200/70 space-y-2 list-disc pl-4">
                            <li>Use <code># Heading</code> for titles.</li>
                            <li>Use <code>```code```</code> for blocks.</li>
                            <li>Keep paragraphs short.</li>
                            <li>Add a cover image for 2x more views.</li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>

    </form>
</div>

<script>
    // 1. Auto-Resize Textarea
    const tx = document.getElementById("markdown-editor");
    tx.setAttribute("style", "height:" + (tx.scrollHeight) + "px;overflow-y:hidden;");
    tx.addEventListener("input", OnInput, false);

    function OnInput() {
        this.style.height = "auto";
        this.style.height = (this.scrollHeight) + "px";
    }

    // 2. Image Preview Logic
    function previewImage(event) {
        const reader = new FileReader();
        const file = event.target.files[0];
        const previewContainer = document.getElementById('imagePreviewContainer');
        const previewImage = document.getElementById('imagePreview');

        if (file) {
            reader.onload = function(){
                previewImage.src = reader.result;
                previewContainer.classList.remove('hidden');
            }
            reader.readAsDataURL(file);
        }
    }

    function removeImage() {
        const previewContainer = document.getElementById('imagePreviewContainer');
        const previewImage = document.getElementById('imagePreview');
        const fileInput = document.querySelector('input[type="file"]');
        
        previewContainer.classList.add('hidden');
        previewImage.src = "";
        fileInput.value = ""; // Clear input
    }
</script>