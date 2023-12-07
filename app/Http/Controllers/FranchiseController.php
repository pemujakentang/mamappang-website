<?php

namespace App\Http\Controllers;

use App\Models\Franchise;
use App\Http\Requests\StoreFranchiseRequest;
use App\Http\Requests\UpdateFranchiseRequest;
use App\Models\Package;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class FranchiseController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $packages = Package::all();
        return view('franchise.franchise', ['packages' => $packages]);
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
                'package_id' =>'required',
                'domisili' => 'required',
                'nama_bisnis' => 'required',
                'address' => 'required',
                'keterangan' => ''
            ]);

            $validData['user_id'] = $user->id;
            $validData['status'] = 'PENDING';

            Franchise::create($validData);

            return redirect('/my-dashboard')->with('success', 'Berhasil Menambahkan Request Franchise');
        } else {
            return redirect('/login');
        }
    }

    public function userFranchises(Request $request)
    {
        if (Auth::check()) {
            $user = auth()->user();
            $franchises = $user->franchises;

            return view('Home.index', [
                'franchises' => $franchises
            ]);
        } else {
            return redirect('/login');
        }
    }

    public function dashboard(Request $request)
    {
        if (Auth::check()) {
            // $logged_id = auth()->user()->id;

            // dd($request);

            // $sort = $request->query('sort', 'default_sort'); // 'default_sort' can be any default value you want
            // $status = $request->query('status', 'all');

            // // Save the selections to the session
            // Session::put('sort', $sort);
            // Session::put('status', $status);

            // $query = Franchise::query();

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

            // $franchises = $query->get();
            $franchises = Franchise::all();

            // dd([$sort, $status]);
            return view('dashboard.franchise-status', [
                'franchises' => $franchises
            ]);
        } else {
            return redirect('/login');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Franchise $franchise)
    {
        //
        if (Auth::check()) {
            return view('franchise.show', [
                'franchise' => $franchise
            ]);
        } else {
            return redirect('/login');
        }
    }

    public function cancel(Franchise $franchise, Request $request)
    {
        //
        if (Auth::check()) {
            $franchise->update([
                'message' => $request->message,
                'status' => 'CANCELLED'
            ]);
            return redirect('/my-dashboard')->with(array(
                'success' => "Franchise Application Canceled"
            ));
        } else {
            return redirect('/login');
        }
    }

    public function reject(Franchise $franchise, Request $request)
    {
        //
        if (Auth::check()) {
            $franchise->update([
                'status' => 'REJECTED',
                'message' => $request->message
            ]);
            return redirect('/admin/dashboard/franchise-status')->with(array(
                'success' => "Franchise Application Rejected ".$franchise->id
            ));
        } else {
            return redirect('/login');
        }
    }

    public function confirm(Franchise $franchise)
    {
        //
        if (Auth::check()) {
            $user = auth()->user();

            // if (
            //     $user->role !== 'admin' || $user->role !== 'superadmin'
            // ) {
            //     return redirect('/');
            // }
            
            $franchise->update([
                'status' => 'CONFIRMED'
            ]);

            //send email

            return redirect('/admin/dashboard/franchise-status')->with(array(
                'success' => "Franchise Application Confirmed"
            ));
        } else {
            return redirect('/login');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Franchise $franchise)
    {
        //
        if (Auth::check()) {
            // $user = auth()->user();

            // if (
            //     $user->role !== 'admin' || $user->role !== 'superadmin'
            // ) {
            //     return redirect('/');
            // }



            $franchise->update([
                'status' => 'CONFIRMED'
            ]);

            return redirect('/franchises')->with(array(
                    'success' => "Franchise Application Updated"
                ));
        } else {
            return redirect('/login');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Franchise $franchise)
    {
        //
    }
}
