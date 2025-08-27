<?php

namespace App\Http\Controllers;

use App\Models\PhotoCard;
use Illuminate\Http\Request;

class PhotocardController extends Controller
{
    public function index()
    {
        $yutuqlar = Photocard::all();
        return view('yutuqlar', compact('yutuqlar'));
    }
}
