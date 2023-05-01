<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Seance extends Component
{
    public $lesecues;


    public function mount(){
        $ecueseance = '';

    }

    public function render()
    {
        return view('livewire.seance');
    }
}
