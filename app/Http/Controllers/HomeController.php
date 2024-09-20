<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        Storage::disk('local')->put('example.txt', 'Demo');
        $data = Storage::disk('local')->get('example.txt');
        $size = Storage::disk('local')->size('example.txt');
        $lasModified = Storage::disk('local')->lastModified('example.txt');
        $path = Storage::disk('local')->path('example.txt');

        //copy | move | prepend | append | delete
        
        dump($data);
        dump($size);
        dump($lasModified);
        dd($path);
        return view('home');
    }
}