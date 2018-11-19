<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cursoscontroller extends Controller
{
    public function cursoWebOnline(){
        return view('cursoWebOnline');
    }
}
