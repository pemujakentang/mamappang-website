<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\Preorders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Payment $payment)
    {
        //
        if (Auth::check()) {
            $user = auth()->user();
            if($payment->user_id == $user->id){
                return view('payment.form', ['payment' => $payment]);
            }else{
                return view('error.unauthorized');
            }
        } else {
            return redirect('/login');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if (Auth::check()) {
            $user = auth()->user();

            $validData = $request->validate([
                'keterangan' => 'required|max:255',
                'image' => 'required|image|file|max:20480',
            ]);

            if ($request->file('image')) {
                $validData['image'] = $request->file('image')->storePublicly('preorder_payment_images', 'public');
            }

            $validData['user_id'] = $user->id;
            $validData['status'] = 'PENDING';
            $validData['preorder_id'] = $request->preorder_id;

            Payment::create($validData);

            return redirect('/my-preorders')->with(array(
                    'success' => "Payment Submitted"
                ));
        } else {
            return redirect('/login');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }

    public function confirmPayment(Payment $payment){
        $payment->update([
            'status' => 'CONFIRMED'
        ]);
    }
}
