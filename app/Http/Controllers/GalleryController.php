<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //

    public function __construct()
    {
      //  $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.gallery.index');
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        // Validate and store the gallery item
    }
}
