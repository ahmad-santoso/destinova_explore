<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Confirmation</title>
    <link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="max-w-xl mx-auto mt-12 bg-white p-6 shadow-lg rounded-lg text-center">
        <h1 class="text-2xl font-bold mb-6">Payment Confirmation</h1>
        <div class="bg-green-100 text-green-700 p-4 rounded-lg inline-block mb-6">
            <p class="font-semibold">Thank you for your payment!</p>
            <p>Amount: ${{ $payment->amount }}</p>
            <p>Description: {{ $payment->description }}</p>
        </div>
        <div>
            <a href="{{ route('travel') }}" class="inline-block bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 mt-6">
                Close
            </a>
        </div>
    </div>
</body>
</html>
