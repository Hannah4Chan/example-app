<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
{

    $users = User::all();
    //Regras de negócio
    //Variaves e conteudos para a view

    return view('users.index',[
        'greeting' => 'Hello World',
        //greeting é a chave que será usada na view para acessar o valor 'Hello World'. Uma variável.
        'users' => $users

    ]);
   
  

}


    public function create()
    {
        return view('users.create');
    }



    public function store()
    {

        dd('store');
    }


    public function show(User $user)
    {
       
        return view('users.show',[
            'user' => $user
        ]);

    }

    


}


    

