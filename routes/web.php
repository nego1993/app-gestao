<?php

// require base_path('routes/web.php');

use App\Http\Controllers\{PrincipalController, sobreNosController, ContatoController, FornecedorController, TesteController};
use App\Http\Middleware\AutenticacaoMiddleware;
use App\Http\Middleware\LogAcessoMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [PrincipalController::class, 'principal'])->name('principal');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('sobre-nos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');
Route::post('/contato', [ContatoController::class, 'salvar'])->name('contato');


Route::get('/login', function () { return 'Login'; })->name('login');

Route::middleware(AutenticacaoMiddleware::class)->group( function() {
       Route::prefix('/app')->group(function () {
              Route::get('/clientes', function () { return 'Clientes'; })->name('clientes');
              Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('fornecedores');
              Route::get('/produtos', function () { return 'Produtos'; })->name('produtos');
       });
});

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');

Route::get('/rota2', function () {
       return redirect()->route('site.rota1');
})->name('site.rota2');
// 
// Route::redirect('/rota2', '/rota1');

Route::fallback(function () {
       echo 'A rota acessada não existe, clique <a href="' . route('principal') . '"> aqui </a> para retornar para a pagina inicial';
});
