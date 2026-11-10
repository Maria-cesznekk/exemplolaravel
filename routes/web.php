<?php

use App\Livewire\Login;
use App\Livewire\ProdutoCreate;
use App\Livewire\ProdutoEdit;
use App\Livewire\ProdutoIndex;
use App\Models\Produto;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produto/create', ProdutoCreate::class) ->name('produto.create');
Route::get('/produto/index', ProdutoIndex::class) ->name('produto.index');
Route::get('/produto/edit', ProdutoEdit::class) ->name('produto.edit');
Route::get('/login', Login::class) ->name('login');


