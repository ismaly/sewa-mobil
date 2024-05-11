<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $table = 'kendaraans';
    protected $fillable = ['merk', 'model', 'plat', 'tanggal_peminjaman', 'tanggal_pengembalian', 'tarif'];
}
