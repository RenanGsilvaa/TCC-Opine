<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UseController extends Controller

{
    public function index (){
        $users = Usuario::all();
        return view('index', compact('users'));
    }

    public function create (){

        return view('users.create');
    }
}
