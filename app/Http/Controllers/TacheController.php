<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\voyage;
use \App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class TacheController extends Controller
{
    public function index(){
        $us =Auth::user()->name_id;
        $phase1 = voyage::where('responsablePhase1', $us) ->where('etat', 'phase1',)->get();
        $phase2 = voyage::where('responsablePhase2', $us)->where('etat', 'phase2',)->get();
        return view('users.tache',compact('phase1','phase2'));
    }
    public function fairePhase1($idVoyage){
        return  view('users.cRemorque',compact('idVoyage'));
    }
    public function fairePhase2($idVoyage){
        $find =\App\voyage::find($idVoyage);
        $etat = $find->etat;
        $Remorques = \App\Remorque::where('voyage_id',$idVoyage)->get();
        return  view('users.listeRemorques',compact('idVoyage','Remorques','etat'));
    }

}
