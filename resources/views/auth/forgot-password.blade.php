<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Destinova Explore</title>
    <link rel="icon" href="assets/logo.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="h-full bg-gray-100">
    <div class="min-h-screen flex items-center justify-center bg-gray-50 dark:bg-gray-900 h-full bg-cover bg-center"
        style="background-image: url('assets/image (1).jpg');">
        <div class="max-w-md w-full p-6 space-y-8 bg-white dark:bg-gray-800 shadow-md rounded-lg">
            <div class="flex justify-center mt-4">
                <a href="{{ route('landing_page') }}">
                    <img src="assets/logo.png" alt="Logo" class="h-12 w-auto">
                </a>
            </div>
            
            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
            </div>

            <!-- Session Status -->
            @if (session('status'))
                <div class="mb-4 text-sm text-green-600 dark:text-green-400">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 dark:bg-gray-700 dark:text-gray-300 sm:text-sm" />
                    @error('email')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-end">
                    <button type="submit"
                        class="inline-block px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-teal-600 dark:bg-teal-500 border border-transparent rounded-md shadow-sm hover:bg-teal-700 dark:hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 dark:focus:ring-teal-600">
                        Email Password Reset Link
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
