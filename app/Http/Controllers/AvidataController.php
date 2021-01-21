<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvidataController extends Controller
{
    //
    public function createform(){
        return view('avicreate');

    }
    public function avilist(){
        return view('avilist');

    }
}
