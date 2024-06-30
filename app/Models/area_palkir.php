<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class area_palkir extends Model
{
    use HasFactory;

    protected $table = 'area_palkir';
    protected $fillable = ['id', 'nama', 'kapasitas', 'keterangan', 'kampus_id'];

    public function kampus()
    {
        return $this->belongsTo(kampus::class);
    }
}
