<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class homeController extends Controller
{
   public function afficher(){
      return view('home');
   }
   public function ajouterNom(Request $request){
      
    $request->validate([
      'nom'=>'required|min:3|max:10'
    ]);

      


      
      $nom = $request->input('nom');
      return view('home',[
         'message'=>$nom 
      ]) ;
   }
    
}
