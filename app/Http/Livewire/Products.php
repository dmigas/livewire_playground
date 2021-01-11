<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Product;

class Products extends Component
{
    public $products;
    public $name;
    public $description;

    public function render()
    {
        $this->products = Product::all();

        return view('livewire.products');
    }

    public function store(){
        Product::create([
            'name'          => $this->name,
            'description'   => $this->description
        ]);
    }
}
