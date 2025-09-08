@extends('layouts.app') 

@section('title', 'Listagem de Usuarios')



@section('content')

 <h1 class="title">{{ $greeting }}</h1>
 <img width="250" src="{{ Vite::asset('resources/images/shihtzu.jpg') }}" alt="">
     @foreach ($users as $user)
       <div class="user-name">{{ $user->name }} ({{$user->email }})</div> 
    
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
   
 



