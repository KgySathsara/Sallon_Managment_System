<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\PaymentBill;
use App\Models\Payment;
class PaymentController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $paymentBill = PaymentBill::all();
        $total = $paymentBill->sum('price');
        
        return view('payment.index', compact('services', 'paymentBill', 'total'));
    }

    public function addToBill(Request $request, Service $service)
    {
        PaymentBill::create([
            'service_id' => $service->id,
            'title' => $service->topic,
            'price' => $service->price,
        ]);

        return redirect()->route('payment.index');
    }

    public function removeFromBill(PaymentBill $paymentBill)
    {
        $paymentBill->delete();
        return redirect()->route('payment.index');
    }
    public function submitPayment(Request $request)
    {

    
        // Process payment data and store in database
        $payment = new Payment();
        $payment->user_id = $request->userId;
        $payment->total_amount = $request->totalAmount;
        $payment->advanced_amount = $request->advancedValue; // Assuming 'advanced_value' is the column name in the database
        // Save other payment details if needed
        $payment->save();
    
        return response()->json(['message' => 'Payment submitted successfully']);
    }
    
}
