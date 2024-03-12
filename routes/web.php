<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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

$elastic_server = "http://127.0.0.1:9200";
$elastic_user = "elastic";
$elastic_password = "hKD62=tjwgq8xWQlRli+";

$client = Http::withBasicAuth($elastic_user, $elastic_password)->baseUrl($elastic_server);

Route::get('/', function () {
    Log::info('Hey');
    return view('welcome');
});

Route::get('/_aliases', function () use ($client) {
    $response = $client->get('_aliases');
    return response()->json($response->object());
});
