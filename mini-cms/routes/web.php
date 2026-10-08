<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

$renderBienvenue = function () {
    return view('bienvenu', [
        'etudiant' => 'Meriem',
        'groupe' => 'Groupe 1',
        'cours' => 'Développement web',
    ]);
};

Route::get('/bienvenu', $renderBienvenue);
Route::get('/bienvenue', $renderBienvenue);

Route::get('/a-propos', function () {
    return view('a-propos', [
        'auteur' => 'Meriem',
        'groupe' => 'Groupe 1',
    ]);
});
