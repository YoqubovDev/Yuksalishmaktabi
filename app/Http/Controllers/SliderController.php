<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    // Barcha sliderlarni olish
    public function index()
    {
        $sliders = Slider::all();
        $news = News::orderBy('published_at', 'desc')
            ->limit(6)
            ->get();
        return view('about', compact('sliders', 'news'));
    }
}
