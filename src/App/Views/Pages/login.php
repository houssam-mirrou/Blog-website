<div class="flex items-center justify-center min-h-[80vh] bg-gray-50">
    <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg border border-gray-100">

        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-slate-900">Welcome Back</h1>
            <p class="text-gray-500 text-sm">Sign in to manage your blog posts</p>
        </div>

        <form action="" method="POST" class="space-y-5">
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Email Address</label>
                <input value="<?= empty($temp_user) ? '' : $temp_user['email'] ?>" name="email" type="email" placeholder="you@example.com" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition">
                <?php
                if (isset($errors['email'])) {
                    echo '<p class="mt-2 text-sm text-red-600 dark:text-red-400">
                            ' . $errors['email'] . '
                        </p>';
                }
                ?>
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Password</label>
                <input value="<?= empty($temp_user) ? '' : $temp_user['password'] ?>" name="password" type="password" placeholder="••••••••" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition">
                <?php
                if (isset($errors['password'])) {
                    echo '<p class="mt-2 text-sm text-red-600 dark:text-red-400">
                            ' . $errors['password'] . '
                        </p>';
                }
                ?>
                <div class="flex justify-end mt-1">
                    <a href="#" class="text-xs text-blue-600 hover:underline">Forgot password?</a>
                </div>
            </div>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 text-white font-bold py-2.5 rounded-lg transition shadow-lg shadow-blue-500/30">
                Sign In
            </button>
        </form>

        <p class="text-center text-sm text-gray-500 mt-6">
            Don't have an account?
            <a href="register" class="text-blue-600 font-semibold hover:underline">Create one</a>
        </p>
    </div>
</div>