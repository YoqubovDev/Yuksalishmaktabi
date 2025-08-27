<?php

namespace App\Http\Controllers;

use App\Models\Qabulrasmi;

class QabulRasmiController extends Controller
{
    public function index()
    {
        $qabulrasmis = Qabulrasmi::all();
        return view('home', compact('qabulrasmis'));
    }
}

