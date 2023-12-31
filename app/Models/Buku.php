<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use App\Models\Anggota;
use App\Models\Petugas;



class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $fillable = [
        'kode_buku',
        'rak_id',
        'judul_buku',
        'penulis_buku',
        'penerbit_buku',
        'tahun_penerbit',
        'stok_buku',
        
    ];

    public function rak()
    {
        return $this->hasMany('App\Models\Rak', 'id', 'rak_id');
    }

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }

    public function pengembalian()
        {
            return $this->hasMany(Peminjaman::class);
        }

    public function buku()
        {
            return $this->belongsToMany(Buku::class, 'peminjaman');
        }

    public function petugas()
        {
            return $this->belongsToMany(Petugas::class, 'peminjaman');
        }
}
