<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    // Barcha sliderlarni olish
    public function index()
    {
        $sliders = Slider::all();
        return view('about', compact('sliders'));
    }
}
