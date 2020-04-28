<?php

//  php artisan make:controller MainController


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function name($name) {
        return view('other/other', ['name' => $name]);
    }
}
