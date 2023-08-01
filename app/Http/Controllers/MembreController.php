<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Membre;


class MembreController extends Controller
{
    public function index(){
        $membre = Membre::all();
        return view('admin.members', compact('membre'));
    }

    public function create(){
        return view('admin.addmembre');
    }

    public function store(Request $request){
        $input  = $request->all();
        Membre::create($input);
        return redirect('/members/create')->with('flash_message', 'student Added');
    }

    public function destroy(Membre $member)
    {
        $member->delete();
        return back()->with('status', "Member deleted successfully");
    }

}
