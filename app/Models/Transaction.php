<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $primaryKey = 'idTransaction';
    protected $fillable = [
        'idBumdes',
        'idUser',
        'category',
        'title',
        'total',
    ];

    public function bumdes()
    {
        return $this->belongsTo(Bumdes::class, 'idBumdes', 'idBumdes');
    }
}
