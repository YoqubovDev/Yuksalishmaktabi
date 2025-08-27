<?php

namespace App\Http\Controllers;

use App\Models\HomeSlider;
use App\Models\Qabulrasmi;
use Illuminate\Http\Request;

class HomeSliderController extends Controller
{
    public function index()
    {
        $homes = HomeSlider::all();
        $qabulrasmis = QabulRasmi::latest()->get();
        return view('home', compact('qabulrasmis','homes'));

    }
}
