<?php

use App\Models\Etudiant;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Blade;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
}) ->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


/*Route::get('/etudiant.html', function () {
    return view('Etudiant');
}) ->name('etudiant');
*/
Route::get(
    '/etudiant',
    [DataController::class, 'letudiant'], function(){
        return view('Etudiant');
    }
)->name('etudiant');

Route::get('/Ue.html',[DataController::class, 'listeUe' ], function () {
    return view('UE');
}) ->name('ue'); 


Route::get('/Inscription-pedagogique.html', function () {
    return view('Inscription-pedagogique');
})->name('Inscription-pedagogique');

Route::get('/Appel.html', [DataController::class, 'makeAppel'])->name('etudiant-ue');
