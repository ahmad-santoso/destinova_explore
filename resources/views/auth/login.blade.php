<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Destinova Explore</title>
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
            <!-- Session Status -->
            @if (session('status'))
            <div class="text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif

            <div class="flex justify-center mt-4">
                <a href="{{ route('landing_page') }}">
                    <img src="assets/logo.png" alt="Logo" class="h-12 w-auto">
                </a>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 dark:bg-gray-700 dark:text-gray-300 sm:text-sm"
                        required autofocus autocomplete="username" />
                    @error('email')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label for="password"
                        class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Password') }}</label>
                    <input id="password" type="password" name="password"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 dark:bg-gray-700 dark:text-gray-300 sm:text-sm"
                        required autocomplete="current-password" />
                    @error('password')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <input id="remember_me" type="checkbox" name="remember"
                            class="rounded border-gray-300 dark:border-gray-600 text-teal-600 shadow-sm focus:ring-teal-500 dark:focus:ring-teal-600 dark:focus:ring-offset-gray-800"
                            {{ old('remember') ? 'checked' : '' }}>
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-between mt-4">
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}"
                        class="text-sm text-teal-600 dark:text-teal-400 hover:text-teal-700 dark:hover:text-teal-300 focus:outline-none">
                        {{ __('Forgot your password?') }}
                    </a>
                    @endif

                    <button type="submit"
                        class="inline-block px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-teal-600 dark:bg-teal-500 border border-transparent rounded-md shadow-sm hover:bg-teal-700 dark:hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 dark:focus:ring-teal-600">
                        {{ __('Log in') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
