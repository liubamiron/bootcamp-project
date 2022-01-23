<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imobil;
use App\Services\ModelLogger;



class ItemController extends Controller
{

   public function index($imobilId, Request $request, ModelLogger $logger) 
     { 

          $imobil= Imobil::findOrFail($imobilId);
          
         $logger->logModel2($user = $request->user(), $imobil);       
   
         return view('imobils.test', ['imobil' => $imobil]);
     }

     
}

