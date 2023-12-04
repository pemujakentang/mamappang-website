<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use App\Models\Package;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

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

    public function userDashboard()
    {
        if (Auth::check()) {
            $user = auth()->user();
            $categories = Category::all();
            $menus = Menu::all();
            $packages = Package::all();

            $franchises = $user->franchises;
            $preorders = $user->preorders;

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
