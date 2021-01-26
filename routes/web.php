<?php
use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/



$router->get('/api/user', function(Request $request) {
    $user = $request->user();
    return $user->toArray();
});

$router->post('/register', 'UsersController@register');
$router->post('/store', 'MemesController@store');
$router->get('/meme', 'MemesController@index');
$router->delete('/delete/{id}', 'MemesController@delete');
$router->get('/logout', 'UsersController@logout');





