<?php

namespace App\Repositories;

use App\Models\Gallery;

interface GalleryRepositoryInterface
{
    public function getAll();
    public function create(array $data): Gallery;
    public function delete($id);
    public function find(int $id): ?Gallery;
}
