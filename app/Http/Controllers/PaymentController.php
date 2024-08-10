<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    public function pay()
    {
        // Display the payment form or page
        return view('pay');
    }

    public function processPayment(Request $request)
{
    $amount = $request->input('amount');
    $description = $request->input('description');
    $timestamp = now()->timestamp; // For generating a unique external_id

    // Data for Xendit payment
    $paymentData = [
        'external_id' => 'test-invoice-' . $timestamp,
        'amount' => $amount,
        'description' => $description,
        'invoice_duration' => 86400, // 1 day in seconds
        'success_redirect_url' => route('payment.success'),
        'failure_redirect_url' => route('payment.failure'),
        'currency' => 'IDR',
        'fees' => [
            [
                'type' => 'client',
                'value' => 500,
            ],
        ],
    ];

    // Make the request to Xendit API
    $response = Http::withBasicAuth(env('XENDIT_API_KEY', ''), '') // Ensure to provide a default value if env() fails
                    ->post('https://api.xendit.co/v2/invoices', $paymentData);

    // Check if the request was successful
    if ($response->successful()) {
        $responseData = $response->json();
        $invoiceUrl = $responseData['invoice_url'] ?? null;

        if ($invoiceUrl) {
            return response()->json(['redirect_url' => $invoiceUrl]);
        } else {
            return response()->json([
                'message' => 'Payment processed successfully, but invoice URL is missing',
                'data' => $responseData
            ]);
        }
    } else {
        // Log error details for debugging
        $errorResponse = $response->json();
        Log::error('Xendit Payment Error: ', $errorResponse);

        return response()->json([
            'message' => 'Payment processing failed',
            'error' => $errorResponse
        ], 500);
    }
}


    public function success()
    {
        // Redirect to travel page after successful payment
        return redirect()->route('travel');
    }

    public function failure()
    {
        // Handle failure scenario
        return view('failure'); // Create a failure.blade.php view to show failure message
    }
}
