<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        //Carregar a View
        return view('users.index');
    }

    public function create()
    {
        //Carregar a View Create
        return view('users.create');
    }
}
