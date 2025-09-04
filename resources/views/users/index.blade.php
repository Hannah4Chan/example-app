@extends('layouts.app') 

@section('title', 'Listagem de Usuarios')



@section('content')
 <h1:>{{ $greeting }}</h1>
     @foreach ($users as $user)
       <div>{{ $user->name }} ({{$user->email }})</div> 
    
    @endforeach
@endsection






    
{{-- php 

foreac

if/else --}}

{{-- 
   
   @php
    $name ='hannah';


    @endphp
    {{ $name }}
   
   
   --}} 
   
 



