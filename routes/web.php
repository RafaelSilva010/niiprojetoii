<?php
use App\Http\Controllers\YourController;
use App\Models\Category;
use App\Models\Nutritionist;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuario1Controller;
use App\Http\Controllers\Usuario2Controller;
use App\Http\Controllers\Usuario3Controller;
use App\Http\Controllers\Usuario4Controller;
use App\Http\Controllers\Usuario5Controller;
use App\Http\Controllers\Usuario6Controller;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\Sobre2Controller;
use App\Http\Controllers\Sobre3Controller;
use App\Http\Controllers\Sobre4Controller;
use App\Http\Controllers\Sobre5Controller;
use App\Http\Controllers\Sobre6Controller;
use App\Http\Controllers\Usuario1aController;
use App\Http\Controllers\Usuario2aController;
use App\Http\Controllers\Usuario3aController;
use App\Http\Controllers\Usuario4aController;
use App\Http\Controllers\Usuario5aController;
use App\Http\Controllers\Usuario6aController;
use App\Http\Controllers\Usuario1bController;
use App\Http\Controllers\Usuario2bController;
use App\Http\Controllers\Usuario3bController;
use App\Http\Controllers\Usuario4bController;
use App\Http\Controllers\Usuario5bController;
use App\Http\Controllers\Usuario6bController;
use App\Http\Controllers\Usuario1cController;
use App\Http\Controllers\Usuario2cController;
use App\Http\Controllers\Usuario3cController;
use App\Http\Controllers\Usuario4cController;
use App\Http\Controllers\Usuario5cController;
use App\Http\Controllers\Usuario6cController;
use App\Http\Controllers\Usuario1dController;
use App\Http\Controllers\Usuario2dController;
use App\Http\Controllers\Usuario3dController;
use App\Http\Controllers\Usuario4dController;
use App\Http\Controllers\Usuario5dController;
use App\Http\Controllers\Usuario6dController;
use App\Http\Controllers\Usuario1eController;
use App\Http\Controllers\Usuario2eController;
use App\Http\Controllers\Usuario3eController;
use App\Http\Controllers\Usuario4eController;
use App\Http\Controllers\Usuario5eController;
use App\Http\Controllers\Usuario6eController;
use App\Http\Controllers\informaçoesController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\contactosController;
use App\Http\Controllers\squizController;
use App\Http\Controllers\question1Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\resultadosController;


Route::get('/banners', [BannerController::class, 'index']);


Route::get('/forum', function () {
    return view('forum');
})->name('forumrote');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/nutricionistas', function () {
    $nutritionists = Nutritionist::all();
    return view('nutritionists.index', compact(['nutritionists']));
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',


])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/categories', function () {
    $categories = Category::all();
    return view('categories.index', compact('categories'));
});


Route::get('/usuario1', [Usuario1Controller::class, 'index'])->name('usuario1');

Route::get('/usuario2', [Usuario2Controller::class, 'index'])->name('usuario2');

Route::get('/usuario3', [Usuario3Controller::class, 'index'])->name('usuario3');

Route::get('/usuario4', [Usuario4Controller::class, 'index'])->name('usuario4');

Route::get('/usuario5', [Usuario5Controller::class, 'index'])->name('usuario5');

Route::get('/usuario6', [Usuario6Controller::class, 'index'])->name('usuario6');



Route::get('/usuario1a', [Usuario1aController::class, 'index'])->name('usuario1a');

Route::get('/usuario2a', [Usuario2aController::class, 'index'])->name('usuario2a');

Route::get('/usuario3a', [Usuario3aController::class, 'index'])->name('usuario3a');

Route::get('/usuario4a', [Usuario4aController::class, 'index'])->name('usuario4a');

Route::get('/usuario5a', [Usuario5aController::class, 'index'])->name('usuario5a');

Route::get('/usuario6a', [Usuario6aController::class, 'index'])->name('usuario6a');



Route::get('/usuario1b', [Usuario1bController::class, 'index'])->name('usuario1b');

Route::get('/usuario2b', [Usuario2bController::class, 'index'])->name('usuario2b');

Route::get('/usuario3b', [Usuario3bController::class, 'index'])->name('usuario3b');

Route::get('/usuario4b', [Usuario4bController::class, 'index'])->name('usuario4b');

Route::get('/usuario5b', [Usuario5bController::class, 'index'])->name('usuario5b');

Route::get('/usuario6b', [Usuario6bController::class, 'index'])->name('usuario6b');


Route::get('/usuario1c', [Usuario1cController::class, 'index'])->name('usuario1c');

Route::get('/usuario2c', [Usuario2cController::class, 'index'])->name('usuario2c');

Route::get('/usuario3c', [Usuario3cController::class, 'index'])->name('usuario3c');

Route::get('/usuario4c', [Usuario4cController::class, 'index'])->name('usuario4c');

Route::get('/usuario5c', [Usuario5cController::class, 'index'])->name('usuario5c');

Route::get('/usuario6c', [Usuario6cController::class, 'index'])->name('usuario6c');


Route::get('/usuario1d', [Usuario1dController::class, 'index'])->name('usuario1d');

Route::get('/usuario2d', [Usuario2dController::class, 'index'])->name('usuario2d');

Route::get('/usuario3d', [Usuario3dController::class, 'index'])->name('usuario3d');

Route::get('/usuario4d', [Usuario4dController::class, 'index'])->name('usuario4d');

Route::get('/usuario5d', [Usuario5dController::class, 'index'])->name('usuario5d');

Route::get('/usuario6d', [Usuario6dController::class, 'index'])->name('usuario6d');


Route::get('/usuario1e', [Usuario1eController::class, 'index'])->name('usuario1e');

Route::get('/usuario2e', [Usuario2eController::class, 'index'])->name('usuario2e');

Route::get('/usuario3e', [Usuario3eController::class, 'index'])->name('usuario3e');

Route::get('/usuario4e', [Usuario4eController::class, 'index'])->name('usuario4e');

Route::get('/usuario5e', [Usuario5eController::class, 'index'])->name('usuario5e');

Route::get('/usuario6e', [Usuario6eController::class, 'index'])->name('usuario6e');


Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');
Route::get('/sobre2', [Sobre2Controller::class, 'index'])->name('sobre2');
Route::get('/sobre3', [Sobre3Controller::class, 'index'])->name('sobre3');
Route::get('/sobre4', [Sobre4Controller::class, 'index'])->name('sobre4');
Route::get('/sobre5', [Sobre5Controller::class, 'index'])->name('sobre5');
Route::get('/sobre6', [Sobre6Controller::class, 'index'])->name('sobre6');


Route::get('/informaçoes', [informaçoesController::class, 'index'])->name('informaçoes');

Route::get('/contactos', [contactosController::class, 'index'])->name('contactos');


Route::get('/squiz', [squizController::class, 'index'])->name('squiz');

Route::get('/question1', [question1Controller::class, 'index'])->name('question1');



Route::post('/profile/upload', [ProfileController::class, 'upload'])->name('profile.upload');

Route::get('/resultados', [resultadosController::class, 'index'])->name('resultados');
