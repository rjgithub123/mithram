<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreGalleryRequest;
use App\Repositories\GalleryRepositoryInterface;

class GalleryController extends Controller
{
     private $gallery;

    public function __construct(GalleryRepositoryInterface $gallery)
    {
        $this->gallery = $gallery;
      //  $this->middleware('auth');
    }

    public function index()
    {
        $gallery = $this->gallery->getAll();
        return view('admin.gallery.index', compact('gallery'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(StoreGalleryRequest $request)
    {
        $this->gallery->create($request->validated());

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery item created successfully.');
    }

    // public function show($id)
    // {
    //     $galleryItem = $this->gallery->find($id);
    // }

    public function edit($id)
    {
        $gallery = $this->gallery->find($id);
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function destroy($id)
    {
        $this->gallery->delete($id);
        return redirect()->route('admin.gallery.index')->with('success', 'Gallery item deleted successfully.');
    }
}
