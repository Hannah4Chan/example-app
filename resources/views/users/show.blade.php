@extends('layouts.app') 
@section('title', 'Mostrar Usuario ' . $user->name )

@section('content')


<h1>Mostrar Usuario {{ $user->name  }}</h1>

   @if ($user->id === 1)
   <div>Sou Admin</div>
   @else
   <div>Sou Usuario Comum</div>
   
   @endif

@endsection






   {{-- - @php
   $isAdmin = true;
   @endphp
   
   @if ($isAdmin)
   <div>Sou Admin</div>
   
   @endif--}}