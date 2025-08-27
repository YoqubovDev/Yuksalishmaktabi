<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videolar = Video::all(); // or your query to get the videos

        // Define the helper function in the controller
        $getYoutubeId = function($url) {
            if (str_contains($url, 'youtu.be/')) {
                return \Illuminate\Support\Str::after($url, 'youtu.be/');
            } elseif (str_contains($url, 'watch?v=')) {
                return \Illuminate\Support\Str::after($url, 'v=');
            } elseif (str_contains($url, 'embed/')) {
                return \Illuminate\Support\Str::after($url, 'embed/');
            } else {
                return '';
            }
        };

        return view('photopage', compact('videolar', 'getYoutubeId'));
    }
}
