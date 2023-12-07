<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
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
            // dd($request);
            $user= auth()->user();
            $carts = $user->carts;
            $flag = 'false';

            if (isset($carts[0])) {
                foreach ($carts as $cart) {
                    if ($cart->menu_id == $request->menu_id) {
                        $new_quantity = $cart->qty + $request->qty;
                        $cart->update(['qty' => $new_quantity]);
                        $flag = 'true';
                    }
                }
                if ($flag == 'false') {
                    Cart::create([
                        'user_id' => $user->id,
                        'menu_id' => $request->menu_id,
                        'qty' => $request->qty,

                    ]);
                }
            } else {
                Cart::create([
                    'user_id' => $user->id,
                    'menu_id' => $request->menu_id,
                    'qty' => $request->qty,
                ]);
            }

            return Redirect::back();
        } else {
            return redirect('/login');
        }
    }

    public function newCart(Request $request){
        if (Auth::check()) {
            // dd($request);
            $user = auth()->user();
            $carts = $user->carts;
            
            Cart::create([
                'user_id' => $user->id,
                'menu_id' => $request->menu_id,
                'qty' => 1
            ]);

            return Redirect::back();
        } else {
            return redirect('/login');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
