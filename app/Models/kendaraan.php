<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraan';
    protected $fillable = ['id', 'merk', 'pemilik', 'nopol', 'thn_beli', 'deskripsi', 'jenis_kendaraan_id', 'kapasitas_kursi', 'rating'];

    public function jenis_kendaraan()
    {
        return $this->belongsTo(jenis::class);
    }
}
