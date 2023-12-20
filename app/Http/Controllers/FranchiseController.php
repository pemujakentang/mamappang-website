<?php

namespace App\Http\Controllers;

use App\Models\Franchise;
use App\Http\Requests\StoreFranchiseRequest;
use App\Http\Requests\UpdateFranchiseRequest;
use App\Mail\SendMail;
use App\Models\Package;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

            $franchise = Franchise::create($validData);

            //send email
            $data = [
                'subject' => '[Mamappang - Franchise Application Sent]',
                'view' => 'mail.franchise-sent',
                'receiver' => $user->firstname . ' ' . $user->lastname,
                'franchise_id' => $franchise->id,
                'domisili' => $franchise->domisili,
                'nama_bisnis' => $franchise->nama_bisnis,
                'address' => $franchise->address,
                'keterangan' => $franchise->keterangan,
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

            $data_admin = [
                'subject' => '[Mamappang - Franchise Application Received]',
                'view' => 'mail.admin-franchise',
                'receiver' => $user->firstname . ' ' . $user->lastname,
                'franchise_id' => $franchise->id,
                'domisili' => $franchise->domisili,
                'nama_bisnis' => $franchise->nama_bisnis,
                'address' => $franchise->address,
                'keterangan' => $franchise->keterangan,
            ];

            try {
                Mail::to('mamappang.bungeoppang@gmail.com')->send(new SendMail($data_admin));
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
                'status' => 'CANCELED'
            ]);
            $user = $franchise->user;
            $data_admin = [
                'subject' => '[Mamappang - Franchise Application Canceled]',
                'view' => 'mail.admin-franchise-cancel',
                'receiver' => $user->firstname . ' ' . $user->lastname,
                'franchise_id' => $franchise->id,
                'domisili' => $franchise->domisili,
                'nama_bisnis' => $franchise->nama_bisnis,
                'address' => $franchise->address,
                'keterangan' => $franchise->keterangan,
            ];

            try {
                Mail::to('mamappang.bungeoppang@gmail.com')->send(new SendMail($data_admin));
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
            
            $user = $franchise->user;
            $data = [
                'subject' => '[Mamappang - Franchise Application Rejected]',
                'view' => 'mail.franchise-reject',
                'receiver' => $user->firstname . ' ' . $user->lastname,
                'franchise_id' => $franchise->id,
                'domisili' => $franchise->domisili,
                'nama_bisnis' => $franchise->nama_bisnis,
                'address' => $franchise->address,
                'keterangan' => $franchise->keterangan,
                'alasan' => $request->message,
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
            $user = $franchise->user;
            $data = [
                'subject' => '[Mamappang - Franchise Application Confirmed]',
                'view' => 'mail.franchise-confirm',
                'receiver' => $user->firstname . ' ' . $user->lastname,
                'franchise_id' => $franchise->id,
                'domisili' => $franchise->domisili,
                'nama_bisnis' => $franchise->nama_bisnis,
                'address' => $franchise->address,
                'keterangan' => $franchise->keterangan,
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
