<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menfess extends Model
{
    use HasFactory;
    public function komentars()
    {
        return $this->hasMany(Komentar::class);
    }

    protected $fillable = [
        'id',
        'menfess',
    ];

}
