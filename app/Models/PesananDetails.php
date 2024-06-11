<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananDetails extends Model
{
    use HasFactory;

    protected $fillable = ['nama_pembeli', 'tanggal_ubah', 'pesanan_id'];

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }
}
