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
    $u = new User();
    $u->name=$userR->name;
    $u->email=$userR->email;
    $u->password=$userR->password;
    $u->save();
        return redirect()->route('register.index');
   }
   public function show(User $user){
   }
   public function edit(User $user){
   }
   public function update(Request $request){
   }
   public function destroy(User $user){
   }
}
