<div class="bg-white border-b border-gray-200">
    <div class="container mx-auto px-6 py-12 flex flex-col md:flex-row justify-between items-center gap-6">
        <div>
            <h1 class="text-3xl font-bold text-slate-900 mb-2">Developer Discussions</h1>
            <p class="text-gray-500">Ask questions, share projects, and connect with other developers.</p>
        </div>
        <button class="bg-blue-600 hover:bg-blue-500 text-white px-6 py-3 rounded-lg font-bold transition shadow-md flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            Start New Discussion
        </button>
    </div>
</div>

<main class="container mx-auto px-6 py-8 flex flex-col lg:flex-row gap-8">

    <div class="lg:w-3/4">

        <div class="flex gap-4 overflow-x-auto pb-4 mb-2">
            <button class="whitespace-nowrap px-4 py-2 bg-slate-800 text-white rounded-full text-sm font-medium">Newest</button>
            <button class="whitespace-nowrap px-4 py-2 bg-white border border-gray-200 text-gray-600 rounded-full text-sm font-medium hover:bg-gray-50">Top this week</button>
            <button class="whitespace-nowrap px-4 py-2 bg-white border border-gray-200 text-gray-600 rounded-full text-sm font-medium hover:bg-gray-50">Unanswered</button>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-l-4 border-gray-100 border-l-blue-500 mb-4 hover:shadow-md transition cursor-pointer">
            <div class="flex items-start gap-4">
                <div class="shrink-0">
                    <img src="https://ui-avatars.com/api/?name=Admin&background=0f172a&color=fff" class="w-10 h-10 rounded-full" alt="User">
                </div>
                <div class="flex-1">
                    <div class="flex items-center gap-2 mb-1">
                        <span class="bg-blue-100 text-blue-700 text-[10px] font-bold px-2 py-0.5 rounded uppercase">Official</span>
                        <span class="text-gray-500 text-xs">Posted by Admin • 1 hour ago</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-1 hover:text-blue-600">Welcome to the StackWrite Community! Read the guidelines.</h3>
                    <p class="text-gray-600 text-sm line-clamp-2">Please treat everyone with respect. This is a place for learning and sharing, not for gatekeeping...</p>
                </div>
                <div class="hidden sm:flex flex-col items-end gap-1 text-gray-500 text-xs">
                    <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg> 42</span>
                    <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg> 1.2k</span>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 mb-4 hover:shadow-md transition cursor-pointer">
            <div class="flex items-start gap-4">
                <div class="shrink-0">
                    <img src="https://ui-avatars.com/api/?name=Sarah+Dev&background=random" class="w-10 h-10 rounded-full" alt="User">
                </div>
                <div class="flex-1">
                    <div class="flex items-center gap-2 mb-1">
                        <span class="bg-green-100 text-green-700 text-[10px] font-bold px-2 py-0.5 rounded uppercase">Help</span>
                        <span class="text-gray-500 text-xs">Posted by Sarah Dev • 3 hours ago</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-1 hover:text-blue-600">Best practices for handling JWT tokens in LocalStorage?</h3>
                    <p class="text-gray-600 text-sm line-clamp-2">I keep reading conflicting advice about whether to store JWTs in cookies or local storage. What do you guys use for production apps?</p>

                    <div class="flex gap-2 mt-3">
                        <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">#security</span>
                        <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">#javascript</span>
                    </div>
                </div>
                <div class="hidden sm:flex flex-col items-end gap-1 text-gray-500 text-xs">
                    <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg> 15</span>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 mb-4 hover:shadow-md transition cursor-pointer">
            <div class="flex items-start gap-4">
                <div class="shrink-0">
                    <img src="https://ui-avatars.com/api/?name=Houssam&background=0D8ABC&color=fff" class="w-10 h-10 rounded-full" alt="User">
                </div>
                <div class="flex-1">
                    <div class="flex items-center gap-2 mb-1">
                        <span class="bg-purple-100 text-purple-700 text-[10px] font-bold px-2 py-0.5 rounded uppercase">Showcase</span>
                        <span class="text-gray-500 text-xs">Posted by Houssam • 5 hours ago</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-1 hover:text-blue-600">I built a C library from scratch!</h3>
                    <p class="text-gray-600 text-sm line-clamp-2">It's called mylibc. I implemented stacks, queues, and hashmaps just to learn how they work under the hood. Check out the repo.</p>
                    <div class="flex gap-2 mt-3">
                        <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">#c-programming</span>
                        <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">#opensource</span>
                    </div>
                </div>
                <div class="hidden sm:flex flex-col items-end gap-1 text-gray-500 text-xs">
                    <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg> 8</span>
                </div>
            </div>
        </div>

        <div class="mt-8 flex justify-center">
            <button class="bg-white border border-gray-300 text-gray-600 px-4 py-2 rounded-lg text-sm hover:bg-gray-50 transition">Load More Discussions</button>
        </div>

    </div>

    <aside class="lg:w-1/4 space-y-6">

        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
            <h3 class="font-bold text-slate-900 mb-4 flex items-center">
                <svg class="w-5 h-5 text-yellow-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                Top Contributors
            </h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <span class="text-gray-400 font-mono text-sm">1</span>
                        <img src="https://ui-avatars.com/api/?name=Houssam&background=0D8ABC&color=fff" class="w-8 h-8 rounded-full">
                        <span class="text-sm font-bold text-slate-800">Houssam</span>
                    </div>
                    <span class="text-xs font-bold text-blue-600 bg-blue-50 px-2 py-1 rounded-full">950 pts</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <span class="text-gray-400 font-mono text-sm">2</span>
                        <img src="https://ui-avatars.com/api/?name=Sarah&background=random" class="w-8 h-8 rounded-full">
                        <span class="text-sm font-bold text-slate-800">Sarah Dev</span>
                    </div>
                    <span class="text-xs font-bold text-blue-600 bg-blue-50 px-2 py-1 rounded-full">820 pts</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <span class="text-gray-400 font-mono text-sm">3</span>
                        <img src="https://ui-avatars.com/api/?name=Alex&background=random" class="w-8 h-8 rounded-full">
                        <span class="text-sm font-bold text-slate-800">Alex Root</span>
                    </div>
                    <span class="text-xs font-bold text-blue-600 bg-blue-50 px-2 py-1 rounded-full">740 pts</span>
                </div>
            </div>
        </div>

        <div class="bg-slate-50 p-6 rounded-xl border border-slate-100">
            <h3 class="font-bold text-slate-900 mb-3 text-sm">Guidelines</h3>
            <ul class="space-y-2 text-xs text-gray-600 list-disc pl-4">
                <li>Be respectful to other developers.</li>
                <li>No spam or self-promotion.</li>
                <li>Use code blocks for code snippets.</li>
                <li>Search before posting.</li>
            </ul>
        </div>

    </aside>

</main>