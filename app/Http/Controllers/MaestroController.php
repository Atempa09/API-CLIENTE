<?php

namespace App\Http\Controllers;

use App\Models\Maestro;

class MaestroController extends Controller
{
    public function index()
    {
        $maestros = Maestro::all();
        return view('maestros.index', compact('maestros'));
    }
}
