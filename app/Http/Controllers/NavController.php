<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class NavController extends Controller
{

    public function index()
    {
        return view('index');
    }

    function show()
    {
        $characters=  Character::all();
        return view('liste',['characters'=>$characters]);
    }

    

    public function liste()
    {
        return view('liste');
    }

    

    

    
}
