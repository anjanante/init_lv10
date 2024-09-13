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

    /**
     *
     * @return \Illuminate\Http\Response;
     */
    public function create(){
        return view('users.create');
    }

    /**
     *
     * @return \Illuminate\Http\Response;
     */
    public function store(Request $request){
        $request->validate([
            'name'  => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('users.index')->with('success', 'User created successfully');
    }

    /**
     *
     * @param User $user
     * @return \Illuminate\Http\Response;
     */
    public function show(User $user){
        return view('users.show', ['user' => $user]);
    }
}
