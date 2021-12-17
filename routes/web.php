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
                "link" => "homePage"
            ],
            [
                "title" => "Area clienti",
                "link" => "clientPage"
            ],
            [
                "title" => "Shop",
                "link" => "shopPage"
            ],
            [
                "title" => "Chi siamo",
                "link" => "aboutUsPage"
            ],
            [
                "title" => "Contatti",
                "link" => "contactsPage"
            ],
        ]
    ];

    return view("home", $data);
})->name("homePage");

Route::get('/client', function () {
    return view("client");
})->name("clientPage");

Route::get('/shop', function () {
    return view("shop");
})->name("shopPage");

Route::get('/about_us', function () {
    return view("about_us");
})->name("aboutUsPage");

Route::get('/contacts', function () {
    return view("contacts");
})->name("contactsPage");
