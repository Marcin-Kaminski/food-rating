<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MealController extends Controller
{
    public function index()
    {
        $title = 'Cookin';
        return view('index', compact('title'));
    }
}
