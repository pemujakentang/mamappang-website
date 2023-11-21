<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
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
        $menu = Menu::all();
        return view("Menu.index", [
            'menu' => $menu
        ]);
    }

    public function home()
    {
        //
        $menu = Menu::all();
        return view("Home.index", [
            'menu' => $menu
        ]);
    }

    public function dashboard(Request $request)
    {
        $selectedSort = $request->query('sort', 'default_sort'); // 'default_sort' can be any default value you want
        $selectedCat = $request->query('category', 'all');

        // Save the selections to the session
        Session::put('sort', $selectedSort);
        Session::put('category', $selectedCat);

        $query = Menu::query();

        if ($selectedSort == 'a-z') {
            $query->orderBy('name', 'asc');
        } else if ($selectedSort == 'z-a') {
            $query->orderBy('name', 'desc');
        } else if ($selectedSort == 'priceup') {
            $query->orderBy('price', 'asc');
        } else if ($selectedSort == 'pricedown') {
            $query->orderBy('price', 'desc');
        }

        if ($selectedCat != 'all') {
            $query->where('category', $selectedCat);
        }

        $menus = $query->get();

        return view('admin.dashboard', [
            'menus' => $menus
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
        return view('admin.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if (Auth::check()) {
            $user = auth()->user();

            if (
                $user->role !== 'admin' || $user->role !== 'superadmin'
            ) {
                return redirect('/');
            }

            $validData = $request->validate([
                'name' => 'required|max:255',
                'category' => 'required|max:255',
                'description' => 'required',
                'image' => 'required|image|file|max:20480',
                'price' => 'required',
            ]);

            $validData['category'] = strtoupper($request->category);

            if ($request->file('image')) {
                $validData['image'] = $request->file('image')->storePublicly('menu_images', 'public');
            }

            Menu::create($validData);

            return redirect('/admin/dashboard')->with(array(
                'success' => "Succesfully added new menu entry",
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
        return view('admin.edit', ['menu' => $menu]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        //
        if (Auth::check()) {
            $user = auth()->user();

            if (
                $user->role !== 'admin' || $user->role !== 'superadmin'
            ) {
                return redirect('/');
            }

            $rules = [
                'name' => 'required|max:255',
                'category' => 'required|max:255',
                'description' => 'required',
                'price' => 'required',
            ];

            $validData = $request->validate($rules);

            $validData['category'] = strtoupper($request->category);

            if ($request->file('image')) {
                if ($request->old_image) {
                    Storage::delete($request->old_image);
                }
                $validData['image'] = $request->file('image')->storePublicly('menu_images', 'public');
            }

            Menu::where('id', $menu->id)->update($validData);

            return redirect('/admin/dashboard')->with('success', "Menu updated.");
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
            $user = auth()->user();

            if (
                $user->role !== 'admin' || $user->role !== 'superadmin'
            ) {
                return redirect('/');
            }

            $menu->delete();
            return redirect('/admin/dashboard')->with('success', "Menu Deleted");
        } else {
            return redirect('/login');
        }
    }
}
