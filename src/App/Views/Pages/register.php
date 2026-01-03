<div class="flex items-center justify-center min-h-[80vh] bg-gray-50">
    <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg border border-gray-100">

        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-slate-900">Join StackWrite</h1>
            <p class="text-gray-500 text-sm">Start writing your developer journey today.</p>
        </div>

        <form action="" method="POST" class="space-y-5">
            <div class="flex flex-row gap-3">
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-slate-700 mb-1">First name</label>
                    <input value="<?= !isset($reader) ? '' : $reader->get_first_name() ?>" name="first_name" type="text" placeholder="John" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition" required>
                    <?php
                    if (isset($errors['first_name'])) {
                        echo '<p class="mt-2 text-sm text-red-600 dark:text-red-400">
                            ' . $errors['first_name'] . '
                        </p>';
                    }
                    ?>
                </div>
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-slate-700 mb-1">Last name</label>
                    <input value="<?= !isset($reader) ? '' : $reader->get_last_name() ?>" name="last_name" type="text" placeholder="Doe" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition" required>
                    <?php
                    if (isset($errors['last_name'])) {
                        echo '<p class="mt-2 text-sm text-red-600 dark:text-red-400">
                            ' . $errors['last_name'] . '
                        </p>';
                    }
                    ?>
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Email Address</label>
                <input value="<?= !isset($reader) ? '' : $reader->get_email() ?>" name="email" type="email" placeholder="you@example.com" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition" required>
                <?php
                if (isset($errors['email'])) {
                    echo '<p class="mt-2 text-sm text-red-600 dark:text-red-400">
                            ' . $errors['email'] . '
                        </p>';
                }
                ?>
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Phone Number</label>
                <input value="<?= !isset($reader) ? '' : $reader->get_phone_number() ?>" name="phone_number" type="text" placeholder="+212 611223344" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition" required>
                <?php
                if (isset($errors['phone_number'])) {
                    echo '<p class="mt-2 text-sm text-red-600 dark:text-red-400">
                            ' . $errors['phone_number'] . '
                        </p>';
                }
                ?>
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Password</label>
                <input name="password" type="password" placeholder="Create a password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition" required>
                <?php
                if (isset($errors['password'])) {
                    echo '<p class="mt-2 text-sm text-red-600 dark:text-red-400">
                            ' . $errors['password'] . '
                        </p>';
                }
                ?>
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Reconfirm Password</label>
                <input name="reconfirm_password" type="password" placeholder="Create a password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition" required>
                <?php
                if (isset($errors['password'])) {
                    echo '<p class="mt-2 text-sm text-red-600 dark:text-red-400">
                            ' . $errors['password'] . '
                        </p>';
                }
                ?>
            </div>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 text-white font-bold py-2.5 rounded-lg transition shadow-lg shadow-blue-500/30">
                Create Account
            </button>
        </form>

        <p class="text-center text-sm text-gray-500 mt-6">
            Already have an account?
            <a href="login" class="text-blue-600 font-semibold hover:underline">Log in</a>
        </p>
    </div>
</div>