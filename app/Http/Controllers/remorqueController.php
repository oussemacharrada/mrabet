<?php

namespace App\Http\Controllers;

use App\Remorque;
use App\voyage;
use Illuminate\Http\Request;

class remorqueController extends Controller
{    public function cRemorqueview($idVoyage)
    {
        return view('users.cRemorque', compact('idVoyage'));
    }


    public function viewlist($idVoyage){
        $find =\App\voyage::find($idVoyage);
        $etat = $find->etat;
    $Remorques = Remorque::where('voyage_id',$idVoyage)->get();
    return view('users.listeRemorques',compact('Remorques','etat','idVoyage'));
    //return view('users.listDommages',compact('Remorques','state','idVoyage'));
    }
    public function add (Request $request ,$idVoyage){
        $this->validate( $request  ,[
        'identification' => 'required',
        'plomb' =>'required',
        'chargeur' =>'required',
        'type' =>'required',
        'SCELLE' =>'required',
        ]);
        //create Post
        $post = new Remorque();

      /* for ($i=1;$i<5;$i++) {
             if ($request->has('vue'.$i)) {
                 // Get image file
                 $image = $request->file('vue'.$i);
                 // Make a image name based on user name and current timestamp
                 $name =time().'_'. $image->getClientOriginalName();
                 // Define folder path
                 // $folder = '/uploads/images/';
                 // Make a file path where image will be stored [ folder path + file name + file extension]
                 //$filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
                 $filePath = public_path('images');
                 // Upload image
                 //$this->uploadone($image, $folder, 'public', $name);
                 // Set user profile image path in database to filePath
                 $request->file('vue'.$i)->move($filePath, $name);
                 $post->vue.$i = $filePath . $name ;
             }
         }*/
    if ($request->has('vue1')) {
    // Get image file
    $image = $request->file('vue1');
    // Make a image name based on user name and current timestamp
    $name =time().'_'. $image->getClientOriginalName();
    // Define folder path
    // $folder = '/uploads/images/';
    // Make a file path where image will be stored [ folder path + file name + file extension]
    //$filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
    $filePath = public_path('images');
    // Upload image
    //$this->uploadone($image, $folder, 'public', $name);
    // Set user profile image path in database to filePath
    $request->file('vue1')->move($filePath, $name);
    $post->vue1 = $filePath .'\\' . $name ;
}  if ($request->has('vue2')) {
    // Get image file
    $image = $request->file('vue2');
    // Make a image name based on user name and current timestamp
    $name =time().'_'. $image->getClientOriginalName();
    // Define folder path
    // $folder = '/uploads/images/';
    // Make a file path where image will be stored [ folder path + file name + file extension]
    //$filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
    $filePath = public_path('images');
    // Upload image
    //$this->uploadone($image, $folder, 'public', $name);
    // Set user profile image path in database to filePath
    $request->file('vue2')->move($filePath, $name);
    $post->vue2 = $filePath .'\\' . $name ;
}  if ($request->has('vue3')) {
    // Get image file
    $image = $request->file('vue3');
    // Make a image name based on user name and current timestamp
    $name =time().'_'. $image->getClientOriginalName();
    // Define folder path
    // $folder = '/uploads/images/';
    // Make a file path where image will be stored [ folder path + file name + file extension]
    //$filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
    $filePath = public_path('images');
    // Upload image
    //$this->uploadone($image, $folder, 'public', $name);
    // Set user profile image path in database to filePath
    $request->file('vue3')->move($filePath, $name);
    $post->vue3 = $filePath .'\\' . $name ;

}  if ($request->has('vue4')) {
    // Get image file
    $image = $request->file('vue4');
    // Make a image name based on user name and current timestamp
    $name =time().'_'. $image->getClientOriginalName();
    // Define folder path
    // $folder = '/uploads/images/';
    // Make a file path where image will be stored [ folder path + file name + file extension]
    //$filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
    $filePath = public_path('images');
    // Upload image
    //$this->uploadone($image, $folder, 'public', $name);
    // Set user profile image path in database to filePath
    $request->file('vue4')->move($filePath, $name);
    $post->vue4 = $filePath .'\\' . $name ;
}
        $voyage= voyage::find($idVoyage);
        $state= $voyage->etat;
        $post->voyage_id =$idVoyage;
        $post->phase = $state;
        $post->identification = $request->get('identification');
        $post->plomb = $request->input('plomb');
        $post->chargeur = $request->input('chargeur');
        $post->type = $request->input('type');
        $post->SCELLE= $request->input('SCELLE');
        switch ($request->input('action')) {
            case 'createDommage':
                $id_remorque = $post->id_remorque;
                $post->save();
                return redirect()->route('cDommagephase1', [ $post->id_remorque])->with("success","Remorque ajouté");
                break;

            case 'constat':
                $post->save();
                return redirect()->route('addRemorque', [$idVoyage])->with("success","Remorque ajouté");
                break;
        }
    }
    public function deleteRemorque ( $id_remorque)

    {
        $post = Remorque::find($id_remorque);
        $idVoyage = $post->voyage_id;
        $find =\App\voyage::find($idVoyage);
        $etat = $find->etat;
        $Remorques = Remorque::where('voyage_id',$idVoyage)->get();
        $post->delete();
        return   redirect()->route('Rlist', [$idVoyage])->with("success","dommage suprimé");
   // return view('users.listeRemorques',compact('Remorques','etat','idVoyage'))->with("success","remorque suprimé");
    }
    public function cDommagephase1 ($id_remorque){
        $remorque =Remorque::find($id_remorque);
       return view('users.chargement',compact('remorque','id_remorque'));
    }
    public function cDommagephase2 ($id_remorque){
        $remorque =Remorque::find($id_remorque);
       return view('users.dechargement',compact('remorque','id_remorque'));
    }


}
