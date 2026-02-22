<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return "Система управління співробітниками IT-компанії";
    }

    public function about()
    {
        return "Даний проєкт реалізує управління співробітниками, проєктами та їх взаємодією в IT-компанії.";
    }
}
