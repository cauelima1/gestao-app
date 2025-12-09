<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/login', function () {
    return 'Login';
})->name('site.login');

Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {
        return 'Clientes';
    })->name('app.clientes');
    Route::get('/fornecedores', function () {
        return 'Fornecedores';
    })->name('app.fornecedores');
    Route::get('/produtos', function () {
        return 'Produtos';
    })->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('site.teste');


Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="' . route('site.index') . '">Clique aqui</a> para ir para a página inicial.';
});

/* Exemplos de redirecionamento de rotas
Route::get('/rota1', function () {
    echo "Rota 1";
})->name('site.rota1');


Route::get('/rota2', function () {
    return redirect()->route('site.rota1');
})->name('site.rota2');

Route::redirect('/rota2', '/rota1');
*/

/* Exemplos de parâmetros obrigatórios e opcionais nas rotas
Route::get(
    '/contato/{nome}/{categoria_id}',
    function (
        string $nome,
        int $categoria_id = 1
    ) {
        echo "Estamos aqui: $nome - $categoria_id";
    }
)
    ->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
*/