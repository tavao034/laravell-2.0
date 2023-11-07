<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class WelcomeController extends Controller
{
    public function welcome ($msg='') {
            return view('welcome',['msg'=>$msg]);
    } 

    public function create (Request $request) {
        //return view('welcome');
        //dd($request->all());
        $msg = "";
        Usuario::create($request->all());
        $msg = "Usuario cadastrado com sucesso";
        return redirect()->route('welcome',['msg'=>$msg]);
    
}

}
