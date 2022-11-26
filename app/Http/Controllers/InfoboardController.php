<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoboardController extends Controller
{
    public function Event(){
        
        return view('infoboard.infoboard');
    }
}
