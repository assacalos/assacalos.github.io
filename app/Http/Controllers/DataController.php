<?php

namespace App\Http\Controllers;

use App\Models\Ue;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class DataController extends Controller
{
    //
    //
    //*
    public static function storeUe(){
        $data = Ue::where('nom', 'IA')->get();
        dd($data);
        return view('index');
    }
    //*/

    public static function listeUe()
    {
        $data = Ue::with('ecues')->get()->toArray();
        $pageTitle= 'UES & ECUES';
        
        return view('UE', ['data' => $data,'pageTitle' => $pageTitle]);
    }    

    public function etudiant(){
        $data = Etudiant::get()->toArray();
        $pageTitle = 'Etudiants';
        return view('Etudiant', compact('data', 'pageTitle'));
    }


    public function letudiant($nce = '')
    {
        if(!$nce):
            return $this->etudiant();
        endif;
        $data = Etudiant::where('nce', $nce)->get()->toArray();
        $pageTitle = 'Etudiants';
        return view('Etudiant', compact('data', 'pageTitle'));
    }

    public function makeAppel(){
        return view('Appel');
    }
}
