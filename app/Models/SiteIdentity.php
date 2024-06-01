<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteIdentity extends Model
{
    use HasFactory;

    protected $primaryKey = 'idSiteIdentity';
    protected $fillable = [
        'visi',
        'gambarStruktur',
        'regulasi',
        'misi',
        'name',
        'logo',
        'email',
        'phone',
        'address',
        'instagram',
        'facebook',
        'youtube',
    ];
}
