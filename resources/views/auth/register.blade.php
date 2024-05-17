<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        .password-toggle-btn {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
</head>

<body class="bg-no-repeat bg-center h-screen" style="background-image: url('{{ asset('assets/image_login.jpg') }}'); background-size: cover; background-repeat: no-repeat; background-position: center;">
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-md w-full bg-white p-8 shadow-md rounded-md">
            <h2 class="text-2xl font-semibold mb-6 text-center">Create Your Account!</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input id="name" placeholder="your name" type="text" class="mt-1 p-2 border border-gray-300 rounded-md w-full" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" placeholder="your@gmail.com" type="email" class="mt-1 p-2 border border-gray-300 rounded-md w-full" name="email" value="{{ old('email') }}" required autocomplete="email">
                </div>

                <div class="mb-4 relative">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="relative">
                        <input id="password" placeholder="your password" type="password" class="mt-1 p-2 border border-gray-300 rounded-md w-full" name="password" required autocomplete="current-password">
                        <button type="button" id="togglePassword" class="password-toggle-btn text-gray-400 hover:text-gray-500 focus:outline-none">
                            <i id="passwordIcon" class="fas fa-eye-slash"></i>
                        </button>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <div class="relative">
                        <input id="password_confirmation" placeholder="confirm password" type="password" class="mt-1 p-2 border border-gray-300 rounded-md w-full" name="password_confirmation" required autocomplete="new-password">
                        <button type="button" id="togglePassword" class="password-toggle-btn text-gray-400 hover:text-gray-500 focus:outline-none">
                            <i id="passwordIcon" class="fas fa-eye-slash"></i>
                        </button>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                        Register
                    </button>
                    <span class="text-sm text-gray-600">Already have an account? <a class="text-blue-500 hover:text-blue-700" href="{{ route('login') }}">Login</a></span>
                </div>
            </form>
        </div>
    </div>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');
        const passwordIcon = document.getElementById('passwordIcon');
    
        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            passwordIcon.classList.toggle('fa-eye-slash');
            passwordIcon.classList.toggle('fa-eye');
        });
    </script>
</body>

</html>
