<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Membre;

class HomeController extends Controller
{
    public function index(){

        if(Auth::id()){
            $usertype=Auth()->user()->usertype;

            if ($usertype=='user') {
                return view('dashboard');
            }
            else if ($usertype=='admin') {
                $membre = Membre::all();
                return view('admin.members' , ['membre' => $membre]);
            }

        }
        else{
            return redirect()->back();
        }
    }
}
