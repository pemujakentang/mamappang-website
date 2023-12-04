<?php

namespace App\Livewire;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class QtyForm extends Component
{
    public $cart;
    public $quantity;
    // public $menu;

    protected $listeners = ['refreshComponent' => '$refresh'];

    public function mount($cart = null){
        $this->cart = $cart;
        // $this->menu = $menu;
        $this->quantity = $cart ? $cart->qty : 1;
    }

    public function submit()
    {
        // Perform any logic you need here, for example, update the cart quantity
        $this->validate([
            'quantity' => ['required', 'numeric'],
        ]);

        $user = Auth::user();

        if ($this->cart) {
            $this->cart->update(['qty' => $this->quantity]);
            $this->cart = $this->cart->fresh();
            $this->dispatch('quantityUpdated');
        }
        // else{
        //     $this->dispatch('refreshComponent');
        //     $this->dispatch('newCartCreated');
        //     // Create a new cart entry
        //     Cart::create([
        //         'user_id' => $user->id,
        //         'menu_id' => $this->menu->id,
        //         'qty' => $this->quantity
        //     ]);

        //     // return redirect()->to(route('livewire.qty-form'));
        //     return redirect('/livewire/qty-form')->with([
        //         'cart' => $this->cart
        //     ]);
        // }

        $this->quantity = 1;
    }

    public function render()
    {
        return view('livewire.qty-form', [
            // 'cartExists' => $this->cart !== null,
            // 'menu' => $this->menu
        ]);
    }
}
