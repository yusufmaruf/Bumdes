<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $primaryKey = 'idPost';
    protected $fillable = [
        'title',
        'body',
        'idCategoryPost',
        'images',
        'slug',
        'idUser',
    ];

    public function categoryPost()
    {
        return $this->belongsTo(CategoryPost::class, 'idCategoryPost', 'idCategoryPost');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'idUser', 'id');
    }
}
