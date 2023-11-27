<?php

namespace App\Http\Controllers;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{

    public function index()

    {
        $images = Image::get();
        //dd($images);
    
        return view('pages.images', compact('images'));
    }
}
