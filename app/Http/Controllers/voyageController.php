<?php

namespace App\Http\Controllers;

use App\User;
use App\voyage;
use Illuminate\Http\Request;

class voyageController extends Controller
{
    public function index(){
        $voyages = \App\voyage::all();
        return view('admin.Voyage.listVoyage',compact('voyages'));
    }



    public function add (Request $request){

    $this->validate( $request  ,[
    'nomVoyage' => 'required',
    'nomBateau' =>'required',
    'portDeChargement' =>'required',
    'portDeDechargement' =>'required',
    'responsablePhase1' =>'required',
    'responsablePhase2' =>'required',
    ]);
    //create Post
    $post = new voyage();
    $post->nomVoyage = $request->get('nomVoyage');
    $post->nomBateau = $request->input('nomBateau');
    $post->portDeChargement = $request->input('portDeChargement');
    $post->portDeDechargement = $request->input('portDeDechargement');
    $post->responsablePhase1 = $request->input('responsablePhase1');
    $post->responsablePhase2 = $request->input('responsablePhase2');
    $post->etat = 'phase1';
    $post->save();
       return redirect('cVoyage')->with("success","voyage ajouté");
}
    public function showVoyageForm()
    {
        return view('admin.Voyage.ajoutvoyage');
    }
    public function edit ($idVoyage)
    {
        $voyage = voyage::find($idVoyage);
        return  view('admin.Voyage.editvoyage',compact('voyage','idVoyage'));
    }

    public function update ( Request $request, $idVoyage)
    {
        $this->validate( $request  ,[
            'nomVoyage' => 'required',
            'nomBateau' =>'required',
            'portDeChargement' =>'required',
            'portDeDechargement' =>'required',
            'responsablePhase1' =>'required',
            'responsablePhase2' =>'required',
            ]);
            //create Post
            $post = voyage::find($idVoyage);
            $post->nomVoyage = $request->get('nomVoyage');
            $post->nomBateau = $request->input('nomBateau');
            $post->portDeChargement = $request->input('portDeChargement');
            $post->portDeDechargement = $request->input('portDeDechargement');
            $post->responsablePhase1 = $request->input('responsablePhase1');
            $post->responsablePhase2 = $request->input('responsablePhase2');

            $post->save();
            return redirect('cVoyageList')->with("success","voyage modifié");

    }
    public function Delete(Request $request, $idVoyage)

    {
        $post = voyage::find($idVoyage);
        $post->delete();
        return redirect('cVoyageList')->with("success","voyage suprimé");
    }


    public function search(Request $request)
    {
          $search = $request->get('term');
          $result = User::select('name_id', 'name')->where('lastname', 'LIKE', '%'. $search. '%')->get();
          return response()->json($result);

    }


}
