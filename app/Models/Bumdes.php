<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bumdes extends Model
{
    use HasFactory;

    protected $primaryKey = 'idBumdes';
    protected $fillable = [
        'idUser',
        'name',
        'desc',
        'logo',
        'lokasi',
        'maps',
        'idJenisUsaha',
        'phoneNumber',
        'email'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'idUser', 'id');
    }

    public function jenisUsaha()
    {
        return $this->belongsTo(JenisUsaha::class, 'idJenisUsaha', 'idJenisUsaha');
    }
}
