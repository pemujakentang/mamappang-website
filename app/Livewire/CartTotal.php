<?php

namespace App\Livewire;


use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;

class CartTotal extends Component
{
    public $totalQty;

    protected $listeners = ['quantityUpdated'];

    public function mount()
    {
        $this->calculateTotalQty();
    }

    #[On('quantityUpdated')]
    public function quantityUpdated()
    {
        $this->calculateTotalQty();
    }

    #[On('newCartCreated')]
    public function newCartCreated()
    {
        $this->calculateTotalQty();
    }

    public function calculateTotalQty()
    {
        $user = Auth::user();
        $this->totalQty = $user ? $user->carts->sum('qty') : 0;
    }

    public function render()
    {
        return view('livewire.cart-total');
    }
}
