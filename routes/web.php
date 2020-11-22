<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::resource('contatos',ContatoController::class)->names('contato')->parameters(['contatos'=>'contato']);
