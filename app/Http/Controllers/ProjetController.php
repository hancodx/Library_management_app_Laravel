<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;
use App\Models\Membre;
use Illuminate\Support\Facades\Validator;

class ProjetController extends Controller
{
    public function index(){
        $projet = Projet::all();
        return view('admin.projets', compact('projet'));
    }


    public function create()
    {
        $members = Membre::all();
        return view('admin.addprojet', ['membres' => $members]);
    }

    public function store(Request $request){
        $input  = $request->all();
        Projet::create($input);
        return redirect('/projects/create')->with('flash_message', ' project Added');
    }






    public function destroy(Projet $projet)
    {
        $projet->delete();
        return back()->with('status', "Projet  deleted successfully");
    }

}
