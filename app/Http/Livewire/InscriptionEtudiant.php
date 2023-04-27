<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Etudiant;
use Illuminate\Support\Arr;

class InscriptionEtudiant extends Component
{
    public $nom;
    public $prenoms;
    public $nce;
    public $lesEtudiants = [];
    public $inscription_ok = false;
    public $nceOK = true;
    public $lesNces = [];



    public function mount(){
        $this->makeData();
    }
    private function makeData()
    {
        $et = Etudiant::get()->toArray();
        $this->lesEtudiants = Arr::keyBy($et, 'nce');
        $this->lesNces = array_keys($this->lesEtudiants);
        //dd($et, $this->lesEtudiants);
    }
    private function verifNCE(){
        $this->nceOK = !in_array($this->nce, $this->lesNces);
    }
    public function storeData(){
        $this->verifNCE();
        if($this->nceOK):
            $et = new Etudiant();
            $et->nce = $this->nce;
            /*$et->user_id = $this->createUser();*/
            $et->nom = $this->nom;
            $et->prenoms = $this->prenoms;
            $et->save();
            $this->inscription_ok = true;
        else:
            $this->nceOK = false;
        endif;
    }
    public function render()
    {
        return view('livewire.inscription-etudiant');
    }
}
