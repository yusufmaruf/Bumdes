<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    use HasFactory;

    protected $primaryKey = 'categoryPost';
    protected $fillable = [
        'title',
        'slug',
    ];
}
