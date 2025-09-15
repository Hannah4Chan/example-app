@extends('layouts.app') 

@section('title', 'Cadastro de Usuario')



@section('content')

 <h1>Cadastro de Usuario</h1>
 <a href="{{ route('users.index') }}">Listar Usuarios</a>

 <form action="{{ route('users.create') }}" method="post">
    @csrf

   
    @if($errors ->any())

        @foreach ($errors->all() as $error)
            <div style="color:red">{{ $error }}</div>
        
        
       
        
        @endforeach
    
    @endif




    <div>
        <label for="">Nome:</label>
        <input type="text" name="name" value="{{ old('name') }}" >


    </div>

    <div>
        <label for="">Email:</label>
        <input type="text" name="email" value="{{ old('email') }}">


    </div>

    <div>
        <label for="">Senha:</label>
        <input type="password" name="password">


    </div>

    <label for="">Avatar</label>
    <input type="file" name="avatar">




    <div>
        <button type="submit">Cadastrar</button>



 </form>

 @endsection
 