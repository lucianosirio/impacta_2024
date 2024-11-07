<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {

        //Recuperar os registros do BD
        $users = User::orderByDesc('id')->get();


        //Carregar a View
        return view('users.index', ['users' => $users]);
    }

    public function show(User $user)
    {   
        return view('users.show', ['user' => $user]); 
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

       //Cadastrar registro no banco de dados
       User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
       ]);

       //Redirecionar o usuário, enviar a mensagme de sucesso
       return redirect()->route('user.index')->with('success', 'Usuário cadastrado com sucesso!');      

    }
}
