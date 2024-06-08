<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function register(RegisterRequest $request){
        $client = new Client();
       

    }
}
