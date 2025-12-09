<?php

namespace App\Repositories;

use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryRepository implements GalleryRepositoryInterface
{
    public function getAll()
    {
        return Gallery::latest()->get();
    }

    public function create(array $data): Gallery
    {
        // Image upload storage 
        
        if (isset($data['image_path'])) {
            $path = $data['image_path']->store('gallery', 'public');
            $data['image_path'] = $path;
        }

        return Gallery::create($data);
    }

    public function delete($id)
    {
        $galleryItem = Gallery::findOrFail($id);

        // Delete the image from storage
        if ($galleryItem->image_path) {
            Storage::disk('public')->delete($galleryItem->image_path);
        }

        // Delete the gallery item from the database
         $galleryItem->delete();

        return true;
    }

    public function find(int $id): ?Gallery
    {
        return Gallery::findOrFail($id);
    }
    
}
