<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class ActionController extends Controller
{
    //
    function show()
    {
        $characters=  Character::all();
        return view('liste',['characters'=>$characters]);
    }

    public function addCharacter()
    {
        return view('add');
    }

    public function storeCharacter(Request $request)
    {
        $character = new Character;
        $character->name = $request->name;
        $character->creation_date = $request->date;
        $character->manga_name = $request->mangaN;
        $character->drawer = $request->Cname;
        $character->save();
        return redirect ('/liste');
    }

    public function edit($id) {
        $character = Character::findOrFail($id);
        return view('edit', ['character' => $character]);
    }

    public function editCharacter(Request $request, $id){
        $character = Character::findOrFail($id);
        $character->name = $request->name;
        $character->creation_date = $request->date;
        $character->manga_name = $request->mangaN;
        $character->drawer = $request->Cname;
        $character->save();
        return redirect('/liste');
    }

    public function deleteCharacter(Request $request) {
        Character::destroy($request->id);
        return redirect('/liste');
    }

    
}
