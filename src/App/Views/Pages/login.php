<div class="relative flex flex-col justify-center py-24 sm:px-6 lg:px-8 bg-slate-900 isolate overflow-hidden">
    
    <div class="absolute inset-0 -z-10 opacity-20" style="background-image: radial-gradient(#3b82f6 1px, transparent 1px); background-size: 32px 32px;"></div>
    <div class="absolute top-0 right-0 -z-10 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
    <div class="absolute bottom-0 left-0 -z-10 w-96 h-96 bg-purple-600/10 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>

    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <div class="mx-auto h-12 w-12 bg-slate-800 rounded-xl flex items-center justify-center text-blue-500 border border-slate-700 shadow-lg mb-6">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path></svg>
        </div>
        
        <h2 class="text-center text-3xl font-extrabold text-white tracking-tight">
            Welcome back
        </h2>
        <p class="mt-2 text-center text-sm text-slate-400">
            Sign in to access your dashboard
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-slate-800 py-10 px-6 shadow-2xl rounded-2xl border border-slate-700 sm:px-10 relative">
            
            <form class="space-y-6" action="" method="POST">
                
                <div>
                    <label for="email" class="block text-sm font-medium text-slate-300">Email address</label>
                    <div class="mt-2 relative">
                        <input 
                            id="email" 
                            name="email" 
                            type="email" 
                            autocomplete="email" 
                            required 
                            value="<?= empty($temp_user) ? '' : htmlspecialchars($temp_user['email']) ?>"
                            placeholder="you@stackwrite.com"
                            class="appearance-none block w-full px-4 py-3 bg-slate-900 border border-slate-600 rounded-lg shadow-sm placeholder-slate-500 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition sm:text-sm"
                        >
                        <?php if (isset($errors['email'])): ?>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php if (isset($errors['email'])): ?>
                        <p class="mt-2 text-sm text-red-400"><?= $errors['email'] ?></p>
                    <?php endif; ?>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-slate-300">Password</label>
                    <div class="mt-2 relative">
                        <input 
                            id="password" 
                            name="password" 
                            type="password" 
                            autocomplete="current-password" 
                            required 
                            value="<?= empty($temp_user) ? '' : htmlspecialchars($temp_user['password']) ?>"
                            placeholder="••••••••"
                            class="appearance-none block w-full px-4 py-3 bg-slate-900 border border-slate-600 rounded-lg shadow-sm placeholder-slate-500 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition sm:text-sm"
                        >
                    </div>
                    <?php if (isset($errors['password'])): ?>
                        <p class="mt-2 text-sm text-red-400"><?= $errors['password'] ?></p>
                    <?php endif; ?>
                    
                    <div class="flex items-center justify-end mt-2">
                        <div class="text-sm">
                            <a href="#" class="font-medium text-blue-400 hover:text-blue-300 hover:underline">
                                Forgot your password?
                            </a>
                        </div>
                    </div>
                </div>

                <div>
                    <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-bold text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-slate-800 focus:ring-blue-500 transition shadow-blue-500/20 hover:shadow-blue-500/40 transform hover:-translate-y-0.5">
                        Sign in
                    </button>
                </div>
            </form>

            <div class="mt-8">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-slate-600"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-slate-800 text-slate-400">
                            New here?
                        </span>
                    </div>
                </div>

                <div class="mt-6">
                    <a href="register" class="w-full flex justify-center py-3 px-4 border border-slate-600 rounded-lg shadow-sm text-sm font-medium text-slate-300 bg-slate-800 hover:bg-slate-700 hover:text-white transition">
                        Create an account
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>