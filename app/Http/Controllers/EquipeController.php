<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipe;
use App\Models\Membre;

class EquipeController extends Controller
{
    public function index(){
        $equipe = Equipe::all();
        return view('admin.equipes', compact('equipe'));
    }


    public function create()
    {
        $members = Membre::all();
        return view('admin.addequipe', ['membres' => $members]);
    }

    public function store(Request $request){
        $input  = $request->all();
        Equipe::create($input);
        return redirect('/equipes/create')->with('flash_message', ' equipe Ajouté');
    }


    public function destroy(Equipe $equipe)
    {
        $equipe->delete();
        return back()->with('status', "Equipe  deleted successfully");
    }
}
