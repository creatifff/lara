<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'image_path',
        'is_published',
    ];

    public function getImageUrlAttribute() {
        return url(Storage::url($this->image_path));
    }
}


