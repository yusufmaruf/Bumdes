<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $primaryKey = 'idAgenda';
    protected $fillable = [
        'idAgenda',
        'name',
        'slug',
        'photo',
        'desc',
        'location',
        'waktuMulai',
        'waktuSelesai',
    ];
}
