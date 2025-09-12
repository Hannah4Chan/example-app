<?php

use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\Role;
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


          //1 -> 1 relacionamento entre user e profile
    //$user = User::with('profile')->find(1);
    
    //$user->profile()->create([
     //   'type' => 'PJ',
       // 'document_number' => '98765432143'
    //]);

    //dd($user);

    


//N -> N relacionamento entre muitos users e roles (roles sao perfis de usuário, como admin, editor, etc)
//PIVOT sao tabelas intermediarias que armazenam os relacionamentos entre duas tabelas principais.
// users
// role_user se identificar desta forma, o laravel ja entende que é uma tabela pivot.
//roles 


//$roles = Role::all();
//dd($roles);

$user = user::with('roles')->find(1);

$user->roles()->sync([1, 2]); 
//sync sincroniza os roles do usuário com os IDs fornecidos no array. Ele adiciona novos roles e remove os que não estão na lista, garantindo que o usuário tenha exatamente os roles especificados.
//$user->roles()->attach(1); 
//attach adiciona um ou mais registros na tabela pivot associando o usuário aos roles especificados.
//detach remove um ou mais registros da tabela pivot, desassociando o usuário dos roles
//$user->roles()->detach([1]); //Remove o role com id 1 do usuário

dd($user);









    //1 ->N relacionamento entre user e posts

    
//$user = user::with('posts','profile')->find(1);
//$user->posts()->create([
   // 'title' => 'Me post de relacionamento',
    //'body' => 'Meu texto aqui'
//]);

//dd($user);



















//$post = Post::find(1); //Procura o post com id 1 
// find() e usado para buscar um registro pelo seu ID primário.
//where() é usado para adicionar condições às consultas, permitindo filtrar os resultados com base em critérios específicos.
//first() retorna o primeiro resultado da consulta.
//get() retorna todos os resultados que correspondem à consulta.
// Pode-se encadear várias condições usando where para criar consultas mais complexas.
//Where()-> where()->first(); 
//all() retorna todos os registros da tabela associada ao modelo.
// AND
// OR
//$post = Post::where('id', 1)->first();





//$post = Post::all(); //Retorna todos os posts


//$post = Post::where('title', 'LIKE','%post%')->get(); //Retorna todos os posts que contenham a palavra post no título. % é um coringa que representa qualquer sequência de caracteres antes ou depois da palavra post.




//$post = new Post();
//$post->title = 'Meu primeiro post';
//$post->body = 'Conteúdo do meu primeiro post';
//$post->save();


//Outro metodo de inserir dados. Usar o create quando a model estiver com o fillable configurado.
//Create ja deixar salvo no banco de dados.
//$post = Post::create([
 //   'title' => 'Meu primeiro post',
 //   'body' => 'Conteúdo do meu primeiro post'
//]);




//ATUALIZAÇÃO DE REGISTROS  
//Usar input quando a model estiver com o fillable configurado.



//$input = [
    //'title' => 'Meu Novo Título vindo do input',
  //  'body' => 'Conteúdo do meu primeiro post atualizado'
//];
//$post = Post::find(1);
//$post->fill($input); //Preenche o modelo com os dados do array $input


//DELETANDO REGISTROS
//$post = Post::find(1);
//$post->delete(); //Deleta o registro do banco de dados



//$post->save();  

//dd($post);

    return view('welcome');
});

//Route::get('admin/usuarios', function () {
//    return 'HOLAAA USUARIOS!';
//}   );





//Json formato de dados leve e amplamente utilizado para troca de informações entre sistemas.

Route::get('admin/usuarios/cadastro', [UserController::class,'create']) ->name('users.create' );

Route::post('admin/usuarios/cadastro', [UserController::class,'store'])->name('users.create');




Route::get('admin/usuarios',[UserController::class, 'index']) ->name('users.index'); 
Route::get('admin/usuarios/{user}', [UserController::class,'show'] );



