<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function register() {
        return view('auth.register');
    }
    public function Doregister(RegisterRequest $request){
        $client = new Client();
       $client->firstname = request('firstname');
       $client->lastname = request('lastname');
       $client->email = request('email');
       $client->password = bcrypt(request('password'));
       $client->save();

       return redirect()->route('login')->with("success","Inscription reussie! Vous pouvez maintenant vous connecter");
    }
}
