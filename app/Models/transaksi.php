<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $fillable = ['id','tanggal','mulai','akhir','keterangan','biaya','kendaraan_id','area_palkir_id'];

    public function area_palkir()
    {
        return $this->belongsTo(area_palkir::class);
    }
    public function kendaraan(){
        return $this->belongsTo(kendaraan::class);
    }
}
