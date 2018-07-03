<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	
   public function hello()
   {
	   $mas=array(
	   'vardas' => 'marakesas',
	   'mas2' => ['Tomukas','Tomosiukas','Tomas']
	   );
	   return view('pages/hello')->with($mas);
   }
   public function about()
   {	
		$pav='Apie';
		return view('pages/about')->with('pavadinimas',$pav); // or return view('pages/about', compact('pav'));
		
	   
   }
   public function index()
   {	
		$pav='Labas vakaras';
		return view('pages/index')->with('pavadinimas',$pav); // or return view('pages/about', compact('pav'));
		
	   
   }
}
