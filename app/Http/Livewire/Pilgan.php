<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Pilgan extends Component
{
    public $opsi = [];
    protected $listeners = ['events' => 'addPilgan'];

    public function mount()
    {
        $this->opsi[] = [];
    }
    public function addopsi(){
        $this->opsi[] = [];
    }
    public function removeProduct($index)
    {
        unset($this->opsi[$index]);
        $this->opsi = array_values($this->opsi);
    }
    
    public function render()
    {
        info($this->opsi);
        return view('livewire.pilgan');
    }
    
}