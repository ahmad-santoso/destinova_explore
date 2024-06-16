<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    // Method to handle GET requests
    public function pay()
    {
        // Logic for displaying the payment form or page
        return view('pay'); // Ensure you have a 'pay.blade.php' file in your 'resources/views' directory
    }

    // Method to handle POST requests
    public function processPayment(Request $request)
    {
        

    }

    public function success()
{
    // Example payment amount and description
    $payment = (object) [
        'amount' => 100,
        'description' => 'Example payment description'
    ];

    $xendit_url = 'https://api.xendit.co/v2/invoices';
    $timestamp = now()->timestamp; // For generating a unique external_id

    // Example data, replace with actual data from $request if needed
    $paymentData = [
        'external_id' => 'test-invoice-success-' . $timestamp,
        'amount' => 100,
        'description' => 'Invoice Demo #123',
        'invoice_duration' => 100,
        'success_redirect_url' => 'http://destinova_explore.test/payment/success',
        'failure_redirect_url' => 'http://destinova_explore.test/payment/',
        'currency' => 'IDR',
        'fees' => [
            [
                'type' => 'client',
                'value' => 500,
            ],
        ],
    ];

    // Make the request to Xendit API
    $response = Http::withBasicAuth('xnd_development_lBofOPTleZp94MmopdQoAAX5NijzqzzRBz6h2Aqqnwc7fbooEa0cYskkOUI', '')
                    ->post($xendit_url, $paymentData);

    // Check if the request was successful
    if ($response->successful()) {
        // Decode the response to an array
        $responseData = $response->json();

        // Get the invoice_url from the response data
        $invoiceUrl = $responseData['invoice_url'] ?? null;

        // Redirect to the invoice URL if available
        if ($invoiceUrl) {
                return redirect()->away($invoiceUrl);
            } else {
                return response()->json([
                    'message' => 'Payment processed successfully, but invoice URL is missing',
                    'data' => $responseData
                ]);
            }
    } else {
        return response()->json([
            'message' => 'Payment processing failed',
            'error' => $response->json()
        ], 500);
    }

    // Render the confirmation view
    return view('confirmationpay', compact('payment'));
}

}