<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddImages extends Component
{
    public $documents = [];

    protected $listeners = ['docAdd' => 'add'];

    public function render()
    {
        return view('livewire.add-images');
    }

    public function add($doc){
        $this->documents[] = $doc;
    }

    public function removeDocument($key){
        unset($this->documents[$key]);
        $this->documents = array_values($this->documents);
    }
}
