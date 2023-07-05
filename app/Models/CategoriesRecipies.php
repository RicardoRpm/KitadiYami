<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesRecipies extends Model
{
    use HasFactory;

    protected $table = 'category_recipies';

    protected $fillable = [
        'id',
        'name',
        'description',
        'color',
        'user_id',
    ];
}
