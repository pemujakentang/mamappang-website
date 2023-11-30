<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Models\Category;
use App\Models\Preorders;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::all();
        $menus = Menu::all();
        return view("bulk.bulk", [
            'menus' => $menus,
            'categories' => $categories
        ]);
    }

    public function home()
    {
        //
        $categories = Category::all();
        $menus = Menu::all();
        return view("home.index", [
            'menus' => $menus,
            'categories' => $categories
        ]);
    }

    public function dashboard(Request $request)
    {
        $categories = Category::all();
        $menus = Menu::all();

        return view('dashboard.menu-edit', [
            'menus' => $menus,
            'categories' => $categories
        ]);
    }

    public function mainMenuPage(Request $request)
    {
        if (Auth::check()) {
            $menus = Menu::all();

            return view('Home.index', [
                'menus' => $menus
            ]);
        } else {
            $menus = Menu::all();

            return view('Home.index', [
                'menus' => $menus
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('dashboard.tambah-rasa', ['categories' => $categories]);
    }

    public function createseries()
    {
        return view('dashboard.tambah-series');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if (Auth::check()) {
            $user = auth()->user();

            // if (
            //     $user->role !== 'admin' || $user->role !== 'superadmin'
            // ) {
            //     return redirect('/');
            // }

            $validData = $request->validate([
                'name' => 'required|max:255',
                'category_id' => 'required|max:255',
                'description' => '',
                'price' => '',
            ]);

            $validData['price'] = 13000;

            Menu::create($validData);

            return redirect('/admin/dashboard/menus')->with(array(
                'success' => "Succesfully added new menu entry",
                'name' => $request->name,
                'kategori' => $request->category_id
            ));
        } else {
            return redirect('/login');
        }
    }

    public function storeseries(Request $request){
        if (Auth::check()) {
            $user = auth()->user();

            // if (
            //     $user->role !== 'admin' || $user->role !== 'superadmin'
            // ) {
            //     return redirect('/');
            // }

            $validData = $request->validate([
                'name' => 'required|max:255',
            ]);

            Category::create($validData);

            return redirect('/admin/dashboard/menus')->with(array(
                'success' => "Succesfully added new series entry",
                'name' => $request->name,
                'kategori' => $request->category
            ));
        } else {
            return redirect('/login');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
        if (Auth::check()) {
            return view('user.showmenu', ['menu' => $menu]);
        } else {
            return redirect('/login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
        $categories = Category::all();
        return view('dashboard.edit-rasa', ['menu' => $menu, 'categories' => $categories]);
    }
    public function editseries(Category $category)
    {
        //
        return view('dashboard.edit-series', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        //
        if (Auth::check()) {
            // $user = auth()->user();

            // if (
            //     $user->role !== 'admin' || $user->role !== 'superadmin'
            // ) {
            //     return redirect('/');
            // }

            $rules = [
                'name' => 'required|max:255',
                'category_id' => 'required|max:255'
            ];

            $validData = $request->validate($rules);

            $menu->update($validData);

            return redirect('/admin/dashboard/menus')->with('success', "Menu updated.");
        } else {
            return redirect('/login');
        }
    }

    public function updateseries(Request $request, Category $category)
    {
        //
        if (Auth::check()) {
            // $user = auth()->user();

            // if (
            //     $user->role !== 'admin' || $user->role !== 'superadmin'
            // ) {
            //     return redirect('/');
            // }

            $rules = [
                'name' => 'required|max:255'
            ];

            $validData = $request->validate($rules);

            $category->update($validData);

            return redirect('/admin/dashboard/menus')->with('success', "Series updated.");
        } else {
            return redirect('/login');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
        if (Auth::check()) {
            // $user = auth()->user();

            // if (
            //     $user->role !== 'admin' || $user->role !== 'superadmin'
            // ) {
            //     return redirect('/');
            // }

            $menu->delete();
            return redirect('/admin/dashboard/menus')->with('success', "Menu Deleted");
        } else {
            return redirect('/login');
        }
    }
    public function destroyseries(Category $category)
    {
        //
        if (Auth::check()) {
            // $user = auth()->user();

            // if (
            //     $user->role !== 'admin' || $user->role !== 'superadmin'
            // ) {
            //     return redirect('/');
            // }
            if ($category->menus()->exists()) {
                // If there are related menus, redirect back with an error message
                return redirect('/admin/dashboard/menus')->with('error', "Cannot delete the series as it still has menus.");
            }

            $category->delete();
            return redirect('/admin/dashboard/menus')->with('success', "Series Deleted");
        } else {
            return redirect('/login');
        }
    }
}
