<?php

namespace App\Http\Controllers;

use App\Models\Qabulrasmi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $qabulrasmis = Qabulrasmi::all();
        return view('home', compact('qabulrasmis'));
    }
}
