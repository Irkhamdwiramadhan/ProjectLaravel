<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis extends Model
{
    use HasFactory;

    protected $table = 'jenis';
    protected $fillable = ['id,nama'];

    // public function kendaraan()
    // {
    //     return $this->hasMany(kendaraan::class);
    // }
}
