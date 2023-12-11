<?php

namespace App\Http\Controllers;

use App\Models\Preorders;
use App\Http\Requests\StorePreordersRequest;
use App\Http\Requests\UpdatePreordersRequest;
use App\Mail\MailPreorder;
use App\Mail\OrderPlaced;
use App\Mail\RejectOrder;
use App\Mail\SendMail;
use App\Models\Bill;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Payment;
use App\Models\PreorderDetails;
use App\Models\Shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class PreordersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (Auth::check()) {
            $categories = Category::all();
            return view('home.bulk', [
                'categories' => $categories
            ]);
        } else {
            return redirect('/login');
        }
    }

    public function dashboard(Request $request)
    {
        // $sort = $request->query('sort', 'default_sort'); // 'default_sort' can be any default value you want
        // $status = $request->query('status', 'all');

        // // Save the selections to the session
        // Session::put('sort', $sort);
        // Session::put('status', $status);

        // $query = Preorders::query();

        // if ($sort == 'earliest') {
        //     $query->orderBy('id', 'asc');
        // } else if ($sort == 'latest') {
        //     $query->orderBy('id', 'desc');
        // } else if ($sort == 'priceup') {
        //     $query->orderBy('total_price', 'asc');
        // } else if ($sort == 'pricedown') {
        //     $query->orderBy('total_price', 'desc');
        // }

        // if ($status != 'all') {
        //     $query->where('status', strtoupper($status));
        // }

        // $preorders = $query->get();
        // $menus = Menu::all();

        $preorders = Preorders::all();

        return view('dashboard.order-status', [
            'preorders' => $preorders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function email($receiver_mail, $data)
    {


        try {
            Mail::to($receiver_mail)->send(new OrderPlaced($data));
            // return response()->json([
            //     'status' => 'success',
            //     'message' => 'Email sent successfully'
            // ]);


        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => 'Email failed to send'
            ]);
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

            $carts = $user->carts;
            // dd($carts);

            if ($carts->count() < 1) {
                return redirect('/bulks');
            }

            // dd($request);

            $validData = $request->validate([
                'shipment_address' => 'required',
                'tanggal_pesanan' => 'required',
                'total_price' => 'required',
                'total_qty' => 'required'
            ]);

            $validData['user_id'] = $user->id;
            $validData['status'] = 'PENDING';
            // PENDING > ORDER CONFIRMED, AWAITING PAYMENT > PAYMENT CONFIRMED, PROCESSING > SHIPPING > FINISHED

            $preorder = Preorders::create($validData);

            $preorder_id = $preorder->id;

            $preorder_items = [];

            foreach ($carts as $cart) {
                if ($cart->qty > 0) {
                    PreorderDetails::create([
                        'preorders_id' => $preorder_id,
                        'menu_id' => $cart->menu_id,
                        'qty' => $cart->qty
                    ]);
                    array_push($preorder_items, $cart->menu->name . " " . $cart->qty);
                }

                $cart->delete();
            }

            // dd($preorder_items);

            $data = [
                'subject' => '[Mamappang - Order Placed]',
                'receiver' => $user->firstname . ' ' . $user->lastname,
                'preorder_id' => $preorder->id,
                'alamat' => $request->shipment_address,
                'tanggal' => $request->tanggal_pesanan,
                'quantity' => $request->total_qty,
                'preorder_detail' => join(',', $preorder_items),
                'total_price' => $request->total_price
            ];

            $this->email($user->email, $data);

            // try {
            //     Mail::to($user->email)->send(new OrderPlaced($data));
            //     // return response()->json([
            //     //     'status' => 'success',
            //     //     'message' => 'Email sent successfully'
            //     // ]);


            // } catch (\Throwable $th) {
            //     $errorMessage = $th->getMessage(); // Get the error message
            //     $errorCode = $th->getCode(); // Get the error code (if available)

            //     // Additional handling or logging of the error information can be done here

            //     return response()->json([
            //         'status' => 'error',
            //         'message' => 'Email failed to send',
            //         'error_message' => $errorMessage, // Return the error message in the JSON response
            //         'error_code' => $errorCode // Return the error code in the JSON response
            //     ]);
            // }

            return redirect('/my-dashboard')->with(array(
                'success' => "Order Placed"
            ));
        } else {
            return redirect('/login');
        }
    }

    public function confirmView(Preorders $preorder)
    {
        if (Auth::check()) {
            // $user = auth()->user();

            // if (
            //     $user->role !== 'admin' || $user->role !== 'superadmin'
            // ) {
            //     return redirect('/');
            // }

            return view('dashboard.billing', [
                'preorder' => $preorder
            ]);
        } else {
            return redirect('/login');
        }
    }

    public function confirmOrder(Request $request, Preorders $preorder)
    {
        if (Auth::check()) {
            // $user = auth()->user();

            // if (
            //     $user->role !== 'admin' || $user->role !== 'superadmin'
            // ) {
            //     return redirect('/');
            // }

            $validData = $request->validate([
                'shipping' => 'required',
                'price' => 'required'
            ]);

            $validData['total'] = $request->shipping + $request->price;
            $validData['user_id'] = $preorder->user->id;
            $validData['preorders_id'] = $preorder->id;

            Bill::create($validData);

            $preorder->update([
                'status' => 'AWAITING PAYMENT'
            ]);
            $user = $preorder->user;
            //send email
            $data = [
                'subject' => '[Mamappang - Order Confirmed]',
                'view' => 'mail.accept-order',
                'receiver' => $user->firstname . ' ' . $user->lastname,
                'preorder_id' => $preorder->id,
                'alamat' => $preorder->shipment_address,
                'tanggal' => $preorder->tanggal_pesanan,
                'quantity' => $preorder->total_qty,
                'shipping' => $request->shipping,
                'price' => $request->price,
                'total_price' => $request->shipping + $request->price,
            ];

            // $this->email($user->email, $data);

            try {
                Mail::to($user->email)->send(new SendMail($data));
                // return response()->json([
                //     'status' => 'success',
                //     'message' => 'Email sent successfully'
                // ]);


            } catch (\Throwable $th) {
                $errorMessage = $th->getMessage(); // Get the error message
                $errorCode = $th->getCode(); // Get the error code (if available)

                // Additional handling or logging of the error information can be done here

                return response()->json([
                    'status' => 'error',
                    'message' => 'Email failed to send',
                    'error_message' => $errorMessage, // Return the error message in the JSON response
                    'error_code' => $errorCode // Return the error code in the JSON response
                ]);
            }

            return redirect('/admin/dashboard/order-status')->with([
                'success' => "ORDER " . $preorder->id . " CONFIRMED, AWAITING PAYMENT"
            ]);
        } else {
            return redirect('/login');
        }
    }

    public function submitPayment(Request $request, Bill $bill)
    {
        //
        if (Auth::check()) {
            $user = auth()->user();

            $validData = $request->validate([
                'keterangan' => '',
                'image' => 'required|image|file|max:20480',
            ]);

            if ($request->file('image')) {
                $validData['image'] = $request->file('image')->storePublicly('preorder_payment_images', 'public');
            }

            $validData['user_id'] = $user->id;
            $validData['status'] = 'PENDING PAYMENT';
            $validData['preorders_id'] = $bill->preorders_id;

            Payment::create($validData);

            $bill->preorder->update(
                ['status' => "PAYMENT"]
            );

            return redirect('/my-dashboard')->with(array(
                'success' => "Payment Submitted"
            ));
        } else {
            return redirect('/login');
        }
    }

    public function confirmPayment(Preorders $preorder)
    {
        if (Auth::check()) {
            // $user = auth()->user();

            // if (
            //     $user->role !== 'admin' || $user->role !== 'superadmin'
            // ) {
            //     return redirect('/');
            // }

            $preorder->update([
                'status' => 'CONFIRMED'
            ]);

            $preorder_items = [];
            
            foreach ($preorder->details as $detail) {
                # code...
                array_push($preorder_items, $detail->menu->name . " " . $detail->qty);
            }

            //send email
            $user = $preorder->user;
            //send email
            $data = [
                'subject' => '[Mamappang - Payment Confirmed]',
                'view' => 'mail.payment-confirmed',
                'receiver' => $user->firstname . ' ' . $user->lastname,
                'preorder_id' => $preorder->id,
                'alamat' => $preorder->shipment_address,
                'tanggal' => $preorder->tanggal_pesanan,
                'quantity' => $preorder->total_qty,
                'preorder_details' => join(',', $preorder_items)
            ];

            // $this->email($user->email, $data);

            try {
                Mail::to($user->email)->send(new SendMail($data));
                // return response()->json([
                //     'status' => 'success',
                //     'message' => 'Email sent successfully'
                // ]);


            } catch (\Throwable $th) {
                $errorMessage = $th->getMessage(); // Get the error message
                $errorCode = $th->getCode(); // Get the error code (if available)

                // Additional handling or logging of the error information can be done here

                return response()->json([
                    'status' => 'error',
                    'message' => 'Email failed to send',
                    'error_message' => $errorMessage, // Return the error message in the JSON response
                    'error_code' => $errorCode // Return the error code in the JSON response
                ]);
            }

            return redirect('/admin/dashboard/order-status')->with([
                'success' => "PAYMENT FOR " . $preorder->id . " CONFIRMED"
            ]);
        } else {
            return redirect('/login');
        }
    }

    public function shipping(Preorders $preorder, Request $request)
    {
        if (Auth::check()) {
            // $user = auth()->user();

            // if (
            //     $user->role !== 'admin' || $user->role !== 'superadmin'
            // ) {
            //     return redirect('/');
            // }



            $shippingData = $request->validate([
                'service_provider' => 'required',
                'driver' => '',
                'plat' => '',
                'no_hp' => '',
                'link' => '',
                'keterangan' => ''
            ]);

            $shippingData['preorders_id'] = $preorder->id;
            $shippingData['status'] = 'OTW';

            Shipment::create($shippingData);

            $preorder->update([
                'status' => 'SHIPPING'
            ]);

            //send email
            $user = $preorder->user;
            //send email
            $data = [
                'subject' => '[Mamappang - Shipping]',
                'view' => 'mail.shipping',
                'receiver' => $user->firstname . ' ' . $user->lastname,
                'preorder_id' => $preorder->id,
                'alamat' => $preorder->shipment_address,
                'tanggal' => $preorder->tanggal_pesanan,
                'quantity' => $preorder->total_qty,
                'shippingData' => $shippingData
            ];

            // $this->email($user->email, $data);

            try {
                Mail::to($user->email)->send(new SendMail($data));
                // return response()->json([
                //     'status' => 'success',
                //     'message' => 'Email sent successfully'
                // ]);


            } catch (\Throwable $th) {
                $errorMessage = $th->getMessage(); // Get the error message
                $errorCode = $th->getCode(); // Get the error code (if available)

                // Additional handling or logging of the error information can be done here

                return response()->json([
                    'status' => 'error',
                    'message' => 'Email failed to send',
                    'error_message' => $errorMessage, // Return the error message in the JSON response
                    'error_code' => $errorCode // Return the error code in the JSON response
                ]);
            }

            return redirect('/admin/dashboard/order-status')->with([
                'success' => "ORDER " . $preorder->id . " SHIPPED"
            ]);
        } else {
            return redirect('/login');
        }
    }

    public function finishShipment(Preorders $preorder)
    {
        if (Auth::check()) {
            // $user = auth()->user();

            // if (
            //     $user->role !== 'admin' || $user->role !== 'superadmin'
            // ) {
            //     return redirect('/');
            // }

            $preorder->update([
                'status' => 'ARRIVED'
            ]);

            $preorder->shipment->update([
                'status' => 'ARRIVED'
            ]);

            //send email

            return redirect('/my-dashboard')->with([
                'success' => "ORDER " . $preorder->id . " ARRIVED"
            ]);
        } else {
            return redirect('/login');
        }
    }

    public function finishOrder(Preorders $preorder)
    {
        if (Auth::check()) {
            // $user = auth()->user();

            // if (
            //     $user->role !== 'admin' || $user->role !== 'superadmin'
            // ) {
            //     return redirect('/');
            // }

            $preorder->update([
                'status' => 'FINISHED'
            ]);

            $user = $preorder->user;
            //send email
            $data = [
                'subject' => '[Mamappang - Order Finished]',
                'view' => 'mail.finished',
                'receiver' => $user->firstname . ' ' . $user->lastname,
                'preorder_id' => $preorder->id,
                'alamat' => $preorder->shipment_address,
                'tanggal' => $preorder->tanggal_pesanan,
                'quantity' => $preorder->total_qty,
            ];

            // $this->email($user->email, $data);

            try {
                Mail::to($user->email)->send(new SendMail($data));
                // return response()->json([
                //     'status' => 'success',
                //     'message' => 'Email sent successfully'
                // ]);


            } catch (\Throwable $th) {
                $errorMessage = $th->getMessage(); // Get the error message
                $errorCode = $th->getCode(); // Get the error code (if available)

                // Additional handling or logging of the error information can be done here

                return response()->json([
                    'status' => 'error',
                    'message' => 'Email failed to send',
                    'error_message' => $errorMessage, // Return the error message in the JSON response
                    'error_code' => $errorCode // Return the error code in the JSON response
                ]);
            }

            return redirect('/admin/dashboard/order-status')->with([
                'success' => "ORDER " . $preorder->id . " FINISHED"
            ]);
        } else {
            return redirect('/login');
        }
    }

    public function cancel(Preorders $preorder)
    {
        if (Auth::check()) {
            $preorder->update([
                'status' => 'CANCELLED'
            ]);
            return redirect('/my-dashboard')->with(array(
                'success' => "Order Canceled"
            ));
        } else {
            return redirect('/login');
        }
    }

    public function rejectView(Preorders $preorder)
    {
        if (Auth::check()) {
            // $user = auth()->user();

            // if (
            //     $user->role !== 'admin' || $user->role !== 'superadmin'
            // ) {
            //     return redirect('/');
            // }

            return view('dashboard.order-reject', [
                'preorder' => $preorder
            ]);
        } else {
            return redirect('/login');
        }
    }

    public function reject(Preorders $preorder, Request $request)
    {
        if (Auth::check()) {
            $user = $preorder->user;
            $preorder->update([
                'status' => 'REJECTED',
                'message' => $request->message
            ]);

            $data = [
                'subject' => '[Mamappang - Order Rejected]',
                'receiver' => $user->firstname . ' ' . $user->lastname,
                'preorder_id' => $preorder->id,
                'alamat' => $preorder->shipment_address,
                'tanggal' => $preorder->tanggal_pesanan,
                'quantity' => $preorder->total_qty,
                'total_price' => $preorder->total_price,
                'message' => $request->message
            ];

            // $this->email($user->email, $data);

            try {
                Mail::to($user->email)->send(new RejectOrder($data));
                // return response()->json([
                //     'status' => 'success',
                //     'message' => 'Email sent successfully'
                // ]);


            } catch (\Throwable $th) {
                $errorMessage = $th->getMessage(); // Get the error message
                $errorCode = $th->getCode(); // Get the error code (if available)

                // Additional handling or logging of the error information can be done here

                return response()->json([
                    'status' => 'error',
                    'message' => 'Email failed to send',
                    'error_message' => $errorMessage, // Return the error message in the JSON response
                    'error_code' => $errorCode // Return the error code in the JSON response
                ]);
            }

            return redirect('/admin/dashboard/order-status')->with(array(
                'success' => "Order Rejected " . $preorder->id
            ));
        } else {
            return redirect('/login');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Preorders $preorders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Preorders $preorders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePreordersRequest $request, Preorders $preorders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Preorders $preorders)
    {
        //
    }
}
