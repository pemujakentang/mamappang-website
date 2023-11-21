<?php

namespace App\Http\Controllers;

use App\Models\Preorders;
use App\Http\Requests\StorePreordersRequest;
use App\Http\Requests\UpdatePreordersRequest;
use App\Models\Menu;
use App\Models\Shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PreordersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function dashboard(Request $request)
    {
        $sort = $request->query('sort', 'default_sort'); // 'default_sort' can be any default value you want
        $status = $request->query('status', 'all');

        // Save the selections to the session
        Session::put('sort', $sort);
        Session::put('status', $status);

        $query = Preorders::query();

        if ($sort == 'earliest') {
            $query->orderBy('id', 'asc');
        } else if ($sort == 'latest') {
            $query->orderBy('id', 'desc');
        } else if ($sort == 'priceup') {
            $query->orderBy('total_price', 'asc');
        } else if ($sort == 'pricedown') {
            $query->orderBy('total_price', 'desc');
        }

        if ($status != 'all') {
            $query->where('status', strtoupper($status));
        }

        $preorders = $query->get();
        $menus = Menu::all();

        return view('preorders.dashboard', [
            'preorders' => $preorders,
            'menus' => $menus
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

            $validData = $request->validate([
                'shipment_address' => 'required',
                'tanggal_pesanan' => 'required',
                'total_price' => 'required',
                'total_qty' => 'required'
            ]);

            $validData['user_id'] = $user->id;
            $validData['status'] = 'PENDING';
            // PENDING > ORDER CONFIRMED, AWAITING PAYMENT > PAYMENT CONFIRMED, PROCESSING > SHIPPING > FINISHED

            Preorders::create($validData);

            return redirect('/preorders')->with(array(
                    'success' => "Order Placed"
                ));
        } else {
            return redirect('/login');
        }
    }

    public function confirmOrder(Preorders $preorder){
        if (Auth::check()) {
            $user = auth()->user();

            if (
                $user->role !== 'admin' || $user->role !== 'superadmin'
            ) {
                return redirect('/');
            }

            $preorder->update([
                'status' => 'ORD_CONF'
            ]);

            //send email

            return redirect('/admin/dashboard/preorders')->with([
                'success' => "ORDER ".$preorder->id." CONFIRMED"
            ]);
        } else {
            return redirect('/login');
        }
    }

    public function confirmPayment(Preorders $preorder){
        if (Auth::check()) {
            $user = auth()->user();

            if (
                $user->role !== 'admin' || $user->role !== 'superadmin'
            ) {
                return redirect('/');
            }

            $preorder->update([
                'status' => 'PAY_CONF'
            ]);

            //send email

            return redirect('/admin/dashboard/preorders')->with([
                'success' => "PAYMENT FOR " . $preorder->id . " CONFIRMED"
            ]);
        } else {
            return redirect('/login');
        }
    }

    public function shipping(Preorders $preorder, Request $request){
        if (Auth::check()) {
            $user = auth()->user();

            if (
                $user->role !== 'admin' || $user->role !== 'superadmin'
            ) {
                return redirect('/');
            }

            $preorder->update([
                'status' => 'SHIPPING'
            ]);

            $shippingData = $request->validate([
                'service_provider' => 'required',
                'driver' => '',
                'plat' => '',
                'no_hp' => '',
                'link' => '',
                'keterangan' => ''
            ]);

            $shippingData['preorder_id'] = $preorder->id;
            $shippingData['status'] = 'OTW';

            Shipment::create($shippingData);

            //send email

            return redirect('/admin/dashboard/preorders')->with([
                'success' => "ORDER " . $preorder->id . " SHIPPED"
            ]);
        } else {
            return redirect('/login');
        }
    }

    public function finishOrder(Preorders $preorder, Shipment $shipment){
        if (Auth::check()) {
            $user = auth()->user();

            if (
                $user->role !== 'admin' || $user->role !== 'superadmin'
            ) {
                return redirect('/');
            }

            $preorder->update([
                'status' => 'FINISHED'
            ]);

            $shipment->update([
                'status' => 'ARRIVED'
            ]);

            //send email

            return redirect('/admin/dashboard/preorders')->with([
                'success' => "ORDER " . $preorder->id . " FINISHED"
            ]);
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
