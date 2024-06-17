<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
    <link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        #message {
            margin-top: 20px;
            padding: 10px;
            border-radius: 4px;
            display: none;
        }
        .success {
            background-color: #dff0d8;
            color: #3c763d;
        }
        .error {
            background-color: #f2dede;
            color: #a94442;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 0 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Payment Form</h1>
        <div id="message"></div> <!-- Add this div to display the message -->

        <form id="paymentForm">
            @csrf
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="text" id="amount" name="amount" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Pay Now</button>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $('#paymentForm').on('submit', function(event) {
                event.preventDefault(); // Prevent form from submitting normally

                $.ajax({
                    url: '{{ route('pay.processPayment') }}',
                    method: 'POST',
                    data: $(this).serialize(), // Serialize form data
                    success: function(response) {
                        // Handle success response from server
                        console.log('Success:', response);
                        if (response.redirect_url) {
                            $('#message').removeClass('error').addClass('success').text('Payment successful. Redirecting to payment page...').show();
                            window.location.href = response.redirect_url; // Redirect to Xendit payment URL
                        } else {
                            $('#message').removeClass('success').addClass('error').text('Payment processed, but no redirect URL received.').show();
                        }
                    },
                    error: function(xhr) {
                        // Handle error response
                        console.error('Error:', xhr);
                        $('#message').removeClass('success').addClass('error').text('An error occurred while processing your payment.').show();
                    }
                });
            });
        });
    </script>
</body>
</html>
