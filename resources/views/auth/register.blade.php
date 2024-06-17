<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Destinova Explore</title>
    <link rel="icon" href="assets/logo.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <div class="min-h-screen flex items-center justify-center bg-gray-50 dark:bg-gray-900 h-full bg-cover bg-center"
        style="background-image: url('assets/image (1).jpg');">
        <div class="max-w-md w-full p-6 space-y-8 bg-white dark:bg-gray-800 shadow-md rounded-lg">
            <div class="flex justify-center mt-4">
                <a href="{{ route('landing_page') }}">
                    <img src="assets/logo.png" alt="Logo" class="h-12 w-auto">
                </a>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}"
                        class="block mt-1 w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 dark:bg-gray-700 dark:text-gray-300 sm:text-sm"
                        required autofocus autocomplete="name" />
                    @error('name')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                        class="block mt-1 w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 dark:bg-gray-700 dark:text-gray-300 sm:text-sm"
                        required autocomplete="username" />
                    @error('email')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                    <input id="password" type="password" name="password"
                        class="block mt-1 w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 dark:bg-gray-700 dark:text-gray-300 sm:text-sm"
                        required autocomplete="new-password" />
                    @error('password')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <label for="password_confirmation"
                        class="block text-sm font-medium text-gray-700 dark:text-gray-300">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation"
                        class="block mt-1 w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 dark:bg-gray-700 dark:text-gray-300 sm:text-sm"
                        required autocomplete="new-password" />
                    @error('password_confirmation')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between mt-4">
                    <a href="{{ route('login') }}"
                        class="underline text-sm text-teal-600 dark:text-teal-400 hover:text-teal-900 dark:hover:text-teal-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 dark:focus:ring-offset-gray-800">
                        Already registered?
                    </a>
                    <button type="submit"
                        class="inline-block px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-teal-600 dark:bg-teal-500 border border-transparent rounded-md shadow-sm hover:bg-teal-700 dark:hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 dark:focus:ring-teal-600">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
