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
    $data = [
        "name" => "Eroe",
        "surname" => "Marvel",
        "heroesList" => [
            "Spider-Man",
            "Iron-Man",
            "Hulk",
            "Captain America"
        ],
        "listNavLink" => [
            [
                "title" => "Home",
                "link" => "#"
            ],
            [
                "title" => "Area clienti",
                "link" => "#"
            ],
            [
                "title" => "Shop",
                "link" => "#"
            ],
            [
                "title" => "Chi siamo",
                "link" => "#"
            ],
            [
                "title" => "Contatti",
                "link" => "#"
            ],
        ]
    ];

    return view("home", $data);
});
