<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Petugas;




class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';
    protected $fillable = [
        'id_buku', 
        'id_anggota', 
        'id_petugas', 
        'tanggal_pinjam',
        'tanggal_kembali',
    ];

    public function buku()
        {
            return $this->hasMany(Buku::class, 'id', 'id_buku');
        }

    public function anggota()
        {
            return $this->hasMany(Anggota::class, 'id', 'id_anggota');
        }
    
    public function petugas()
        {
            return $this->hasMany(Petugas::class, 'id', 'id_petugas');
        }
}
