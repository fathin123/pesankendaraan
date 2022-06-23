<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // use HasFactory;
    protected $table = "customers";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'nama_mobil', 'alamat', 'nohp',
    ];
    public function mobil()
    {
        return $this->belongsTo(Mobil::class, 'nama_mobil');
    }
}
