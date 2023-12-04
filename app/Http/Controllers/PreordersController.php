<?php

namespace App\Http\Controllers;

use App\Models\Preorders;
use App\Http\Requests\StorePreordersRequest;
use App\Http\Requests\UpdatePreordersRequest;
use App\Models\Bill;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Payment;
use App\Models\PreorderDetails;
use App\Models\Shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

            foreach ($carts as $cart) {
                if ($cart->qty>0) {
                    PreorderDetails::create([
                        'preorders_id' => $preorder_id,
                        'menu_id' => $cart->menu_id,
                        'qty' => $cart->qty
                    ]);
                }
                
                $cart->delete();
            }

            return redirect('/my-dashboard')->with(array(
                'success' => "Order Placed"
            ));
        } else {
            return redirect('/login');
        }
    }

    public function confirmView(Preorders $preorder){
        if (Auth::check()) {
            // $user = auth()->user();

            // if (
            //     $user->role !== 'admin' || $user->role !== 'superadmin'
            // ) {
            //     return redirect('/');
            // }

            return view('dashboard.billing', [
                'preorder'=>$preorder
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

            //send email

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
            $validData['status'] = 'PENDING';
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

            //send email

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

            //send email

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
            $preorder->update([
                'status' => 'REJECTED',
                'message' => $request->message
            ]);
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
