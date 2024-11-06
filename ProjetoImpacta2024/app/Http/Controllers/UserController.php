<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;

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

    public function store(UserRequest $request)
    {
        //Validar formulário
       $request->validated();

       User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
       ]);

       return redirect()->route('user.index')->with('success', 'Usuário cadastrado com sucesso!');      

    }
}
