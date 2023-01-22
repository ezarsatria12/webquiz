<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Pilgan extends Component
{
    public $Pilgan = [];
    public $opsi = [];
    protected $listeners = ['events' => 'addPilgan'];

    public function mount()
    {
        $this->Pilgan[] = [
        ];
        $this->opsi[] = [];
    }
    public function addPilgan(){
        $this->Pilgan[] = [];
    }
 
    public function addopsi()
    {
        $this->opsi[] = [];
    }
    
    public function render()
    {
        info($this->Pilgan);
        return view('livewire.pilgan');
    }
    
}