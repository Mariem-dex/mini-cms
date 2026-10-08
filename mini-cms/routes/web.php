<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home']);

$renderBienvenue = function () {
    return view('bienvenu', [
        'etudiant' => 'Meriem',
        'groupe' => 'Groupe 1',
        'cours' => 'Développement web',
    ]);
};

Route::get('/bienvenu', $renderBienvenue);
Route::get('/bienvenue', $renderBienvenue);

Route::get('/a-propos', [PageController::class, 'about']);

Route::get('/heure', function () {
    return view('heure', [
        'heure' => now()->format('H:i'),
        'date' => now()->format('d/m/Y'),
    ]);
});
