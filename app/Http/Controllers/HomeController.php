<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Travel;

class HomeController extends Controller
{
    function index()
    {
        $travels = Travel::all();
        return view('home.index', compact('travels'));
    }
}
