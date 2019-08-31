<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
      public function display(){
          $contacts ="Marc Louie Licos \n DepEd Technical Assistant II \r\n 0908-4777-222";
         $title ="Contacts";
             return view('contact', compact('title','contacts'));
     }
}
