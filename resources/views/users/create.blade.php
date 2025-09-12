@extends('layouts.app') 

@section('title', 'Cadastro de Usuario')



@section('content')

 <h1>Cadastro de Usuario</h1>
 <a href="{{ route('users.index') }}">Listar Usuarios</a>

 <form action="{{ route('users.create') }}" method="post">
    @csrf
    <div>
        <label for="">Nome:</label>
        <input type="text" name="name" >


    </div>

    <div>
        <label for="">Email:</label>
        <input type="text" name="email">


    </div>

    <div>
        <label for="">Senha:</label>
        <input type="password" name="password">


    </div>

    <div>
        <button type="submit">Cadastrar</button>



 </form>

 @endsection
 