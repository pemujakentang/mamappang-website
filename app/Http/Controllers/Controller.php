<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Franchise;
use App\Models\Menu;
use App\Models\Package;
use App\Models\Preorders;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function adminDashboard()
    {
        if (Auth::check()) {
            $categories = Category::all();
            $menus = Menu::all();
            $packages = Package::all();

            return view('dashboard.dashboard', [
                'menus' => $menus,
                'categories' => $categories,
                'packages' => $packages
            ]);
        } else {
            return redirect('/login');
        }
    }

    public function userDashboard(Request $request)
    {
        if (Auth::check()) {
            $user = auth()->user();

            // $sortOrder = $request->query('sortOrder', 'default_sort'); // 'default_sort' can be any default value you want
            // $filterOrder = $request->query('filterOrder', 'ALL');

            // Check if sortOrder is present in the request, otherwise set a default value
            if (isset($request->sortOrder)) {
                $sortOrder = $request->sortOrder;
            } else {
                $sortOrder = 'NEWEST';
            }

            // Check if filterOrder is present in the request, otherwise set a default value
            if (isset($request->filterOrder)) {
                $filterOrder = $request->filterOrder;
            } else {
                $filterOrder = 'ALL';
            }

            if (isset($request->sortFranchise)) {
                $sortFranchise = $request->sortFranchise;
            } else {
                $sortFranchise = 'NEWEST';
            }

            // Check if filterOrder is present in the request, otherwise set a default value
            if (isset($request->filterFranchise)) {
                $filterFranchise = $request->filterFranchise;
            } else {
                $filterFranchise = 'ALL';
            }

            // echo $sortOrder, $filterOrder;

            $queryOrder = Preorders::query();
            $queryOrder->where('user_id', $user->id);
            $queryFranchise = Franchise::query();
            $queryFranchise->where('user_id', $user->id);
            // dd($queryOrder->get());

            if ($filterOrder != 'ALL') {
                $queryOrder->where('status', $filterOrder);
                // dd($queryOrder);
            } else {
                $preorders = $user->preorders;
            }

            if ($sortOrder == 'OLDEST') {
                $queryOrder->orderBy('id', 'asc');
            } elseif ($sortOrder == 'NEWEST') {
                $queryOrder->orderBy('id', 'desc');
            }

            if ($filterFranchise != 'ALL') {
                $queryFranchise->where('status', $filterFranchise);
                // dd($queryOrder);
            } else {
                $franchises = $user->franchises;
            }

            if ($sortFranchise == 'OLDEST') {
                $queryFranchise->orderBy('id', 'asc');
            } elseif ($sortFranchise == 'NEWEST') {
                $queryFranchise->orderBy('id', 'desc');
            }

            $preorders = $queryOrder->get();
            $franchises = $queryFranchise->get();

            $categories = Category::all();
            $menus = Menu::all();
            $packages = Package::all();

            // $preorders = $user->preorders;
            // $franchises = $user->franchises;

            return view('home.myorder', [
                'menus' => $menus,
                'categories' => $categories,
                'packages' => $packages,
                'franchises' => $franchises,
                'preorders' => $preorders
            ]);
        } else {
            return redirect('/login');
        }
    }
}
