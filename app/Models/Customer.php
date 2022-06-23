<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaksi;

class Customer extends Model
{
    // use HasFactory;
    protected $table = "customers";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'id_mobil', 'alamat', 'nohp',
    ];
    public function mobil()
    {
        return $this->belongsTo(Mobil::class, 'id_mobil');
    }

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'id_transaksi');
    }
}
