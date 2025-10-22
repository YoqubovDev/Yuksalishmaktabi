<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;

class PhotocardController extends Controller
{
    public function index()
    {
        $achievements = Achievement::all();
        return view('achievements', compact('achievements'));
    }
}
