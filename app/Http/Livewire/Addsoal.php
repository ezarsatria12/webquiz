<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Addsoal extends Component
{
    public $Pilgan = [];
    public function addsoalpilgan()
    {
        $this->emit('events');
        $this->Pilgan[] = [];
    }

    
    public function render()
    {
        return view('livewire.addsoal');
    }
}