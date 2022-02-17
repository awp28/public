<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KoicaController extends Controller
{
    public function koica()
    {
        return view('front.koica.index');
    }
}
