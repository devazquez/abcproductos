<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class Productos extends Component
{
    use WithPagination;

    public function render()
    {
        $productos = Product::where('user_id', auth()->user()->id)->paginate(10);
        return view('livewire.productos', ['productos'=> $productos]);
    }

    public function confirmProductDeletion(Product $producto){
        $producto->delete();
    }

}
