<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('home');
    }
   public function create(){
       return view('auth.register');
   }
   public function store(UserRequest $userR){
    User::create($userR->all());
        return redirect()->route('register.index');
   }
   
}
