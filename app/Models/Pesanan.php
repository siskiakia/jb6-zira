<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $fillable = ['nama_pesanan'];

    public function detail()
    {
        return $this->hasOne(PesananDetails::class);
    }
}
