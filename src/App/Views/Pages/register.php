<div class="relative flex flex-col justify-center py-24 sm:px-6 lg:px-8 bg-slate-900 isolate overflow-hidden">

    <div class="absolute inset-0 -z-10 opacity-20" style="background-image: radial-gradient(#3b82f6 1px, transparent 1px); background-size: 32px 32px;"></div>
    <div class="absolute top-0 right-0 -z-10 w-96 h-96 bg-teal-600/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
    <div class="absolute bottom-0 left-0 -z-10 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>

    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <div class="mx-auto h-12 w-12 bg-slate-800 rounded-xl flex items-center justify-center text-blue-500 border border-slate-700 shadow-lg mb-6">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
        </div>
        <h2 class="text-center text-3xl font-extrabold text-white tracking-tight">
            Join StackWrite
        </h2>
        <p class="mt-2 text-center text-sm text-slate-400">
            Start writing your developer journey today.
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-[520px]">
        <div class="bg-slate-800 py-10 px-6 shadow-2xl rounded-2xl border border-slate-700 sm:px-10">

            <form action="" method="POST" class="space-y-6">
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <div class="w-full sm:w-1/2">
                        <label class="block text-sm font-medium text-slate-300 mb-1">First name</label>
                        <input 
                            value="<?= !isset($reader) ? '' : htmlspecialchars($reader->get_first_name()) ?>" 
                            name="first_name" 
                            type="text" 
                            placeholder="John" 
                            class="appearance-none block w-full px-4 py-3 bg-slate-900 border border-slate-600 rounded-lg shadow-sm placeholder-slate-500 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition sm:text-sm" 
                            required
                        >
                        <?php if (isset($errors['first_name'])): ?>
                            <p class="mt-2 text-xs text-red-400"><?= $errors['first_name'] ?></p>
                        <?php endif; ?>
                    </div>
                    
                    <div class="w-full sm:w-1/2">
                        <label class="block text-sm font-medium text-slate-300 mb-1">Last name</label>
                        <input 
                            value="<?= !isset($reader) ? '' : htmlspecialchars($reader->get_last_name()) ?>" 
                            name="last_name" 
                            type="text" 
                            placeholder="Doe" 
                            class="appearance-none block w-full px-4 py-3 bg-slate-900 border border-slate-600 rounded-lg shadow-sm placeholder-slate-500 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition sm:text-sm" 
                            required
                        >
                        <?php if (isset($errors['last_name'])): ?>
                            <p class="mt-2 text-xs text-red-400"><?= $errors['last_name'] ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1">Email Address</label>
                    <input 
                        value="<?= !isset($reader) ? '' : htmlspecialchars($reader->get_email()) ?>" 
                        name="email" 
                        type="email" 
                        placeholder="you@example.com" 
                        class="appearance-none block w-full px-4 py-3 bg-slate-900 border border-slate-600 rounded-lg shadow-sm placeholder-slate-500 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition sm:text-sm" 
                        required
                    >
                    <?php if (isset($errors['email'])): ?>
                        <p class="mt-2 text-xs text-red-400"><?= $errors['email'] ?></p>
                    <?php endif; ?>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1">Phone Number</label>
                    <input 
                        value="<?= !isset($reader) ? '' : htmlspecialchars($reader->get_phone_number()) ?>" 
                        name="phone_number" 
                        type="text" 
                        placeholder="+212 611223344" 
                        class="appearance-none block w-full px-4 py-3 bg-slate-900 border border-slate-600 rounded-lg shadow-sm placeholder-slate-500 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition sm:text-sm" 
                        required
                    >
                    <?php if (isset($errors['phone_number'])): ?>
                        <p class="mt-2 text-xs text-red-400"><?= $errors['phone_number'] ?></p>
                    <?php endif; ?>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1">Password</label>
                    <input 
                        name="password" 
                        type="password" 
                        placeholder="Create a password" 
                        class="appearance-none block w-full px-4 py-3 bg-slate-900 border border-slate-600 rounded-lg shadow-sm placeholder-slate-500 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition sm:text-sm" 
                        required
                    >
                    <?php if (isset($errors['password'])): ?>
                        <p class="mt-2 text-xs text-red-400"><?= $errors['password'] ?></p>
                    <?php endif; ?>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1">Reconfirm Password</label>
                    <input 
                        name="reconfirm_password" 
                        type="password" 
                        placeholder="Confirm your password" 
                        class="appearance-none block w-full px-4 py-3 bg-slate-900 border border-slate-600 rounded-lg shadow-sm placeholder-slate-500 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition sm:text-sm" 
                        required
                    >
                    <?php if (isset($errors['password'])): ?>
                        <p class="mt-2 text-xs text-red-400"><?= $errors['password'] ?></p>
                    <?php endif; ?>
                </div>

                <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-bold text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-slate-800 focus:ring-blue-500 transition shadow-blue-500/20 hover:shadow-blue-500/40 transform hover:-translate-y-0.5 mt-2">
                    Create Account
                </button>
            </form>

            <div class="mt-8 border-t border-slate-700 pt-6">
                <p class="text-center text-sm text-slate-400">
                    Already have an account?
                    <a href="login" class="font-bold text-blue-400 hover:text-blue-300 hover:underline transition">Log in</a>
                </p>
            </div>
        </div>
    </div>
</div>