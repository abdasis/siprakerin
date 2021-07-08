<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dudi()
    {
        return $this->belongsToMany(Dudi::class, 'dudi_siswa');
    }

    public function nilai()
    {
        return $this->hasOne(Nilai::class);
    }
}
