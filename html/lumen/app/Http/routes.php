<?php

use App\Models\Foo;


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

$app->get('/', function () use ($app) {
    return $app->welcome();
});

$app->get('/foo', function() {
    return Foo::all();
});

$app->get('/foo/{id}', function($id) use ($app) {
    $foo = Foo::query()->findOrFail($id);
    return $foo;
});