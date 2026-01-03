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
                    <input name="first_name" type="text" placeholder="John" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition" required>
                </div>
                
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-slate-700 mb-1">Last name</label>
                    <input name="last_name" type="text" placeholder="Doe" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition" required>
                </div>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Email Address</label>
                <input name="email" type="email" placeholder="you@example.com" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition" required>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Phone Number</label>
                <input name="phone_number" type="text" placeholder="+212 611223344" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Password</label>
                <input name="password" type="password" placeholder="Create a password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Reconfirm Password</label>
                <input name="reconfirm_password" type="password" placeholder="Create a password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition" required>
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