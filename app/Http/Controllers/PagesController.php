<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class PagesController extends Controller
{
    
    public function dashboard(){
        return view('pages.dashboard');
    }

    public function registrar()
    {
        return view('registrar');
    }

    public function registrarFreeLancer()
    {
        return view('registrarFreelancer');
    }


    public function registrarUser()
    {
        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $pass = Hash::make(request('password'));
        $user->password = $pass;
        $user->remember_token = request('_token');
        $user->tipoUsuario = request('tipoUsuario');;
        $user->biblio = request('biblio');
        $user->save();
        return redirect('/login');
    }

}
