<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data['users'] = User::orderBy('id', 'desc')->paginate(5); 
        return view('users.index', $data);
    }

    public function show(User $user){
        return view('users.show', ['user' => $user]);
    }
}
