<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Document;

class Picker extends Component
{
    public $documents;#  = Document::all();

    public function render()
    {
        $this->documents = Document::all();
        return view('livewire.picker');
    }

    public function emitSomething($id){
        $this->emit('docAdd', $id);
    }
}
