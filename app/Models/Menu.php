<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'description', 'image'];

    // Method for DB RELATIONSHIP(Category and Menu Tables)
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_menu');
    }
}
