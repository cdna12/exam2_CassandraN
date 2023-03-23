<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\examen2;

class examen2Controller extends Controller
{
   public function index(){
    $page_title = "Characters";
    $char = characters::where('HP','>','80')->get();
    return view('characters',compact('page_title','char'));
   }
}
