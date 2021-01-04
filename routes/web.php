<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::get('/products', function () {
$formati = config('pasta');
$collectionPasta = collect($formati);
$pastaLunga = $collectionPasta->where('tipo', 'lunga');
$pastaCorta = $collectionPasta->where('tipo', 'corta');
$pastaCortissima = $collectionPasta->where('tipo', 'cortissima');
$data = [
    'formati' => [
        'lunga' => $pastaLunga,
        'corta' => $pastaCorta,
        'cortissima' => $pastaCortissima
    ]
];

    return view('products', $data);
})->name('products');

Route::get('/product-details/{id}', function($id) {
    $formati = config('pasta');
    if(is_numeric($id) && $id > 0 && $id < count($formati)) {
        $prodotto = $formati[$id];
        $data = [
            'formato' => $prodotto
        ];
        return view('details', $data);
    } else {
        abort('404');
    }
})->name('product-details');

Route::get('/news', function () {
    return view('news');
})->name('news');
