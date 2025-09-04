<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


// Verbo http (GET, POST, PUT, DELETE, etc)
// get e post significam que a rota responde a requisições do tipo GET e POST, respectivamente.
//get serve para obter dados de um servidor. Post serve para enviar dados a um servidor.
// put, delete, patch, options, etc são outros verbos HTTP que podem ser usados conforme a necessidade da aplicação.
//put é usado para atualizar recursos existentes, delete para remover recursos, patch para atualizações parciais, e options para descrever as opções de comunicação com o recurso de destino.
//patch é usado para atualizações parciais de um recurso.
//options é usado para descrever as opções de comunicação com o recurso de destino.

// Rota (URL) -> Função (Lógica para processar a requisição)

Route::get('/', function () {
    return view('welcome');
});

//Route::get('admin/usuarios', function () {
//    return 'HOLAAA USUARIOS!';
//}   );





//Json formato de dados leve e amplamente utilizado para troca de informações entre sistemas.
Route::get('admin/usuarios',[UserController::class, 'index'] ); 
Route::get('admin/usuarios/{user}', [UserController::class,'show'] );
