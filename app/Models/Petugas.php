<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Anggota;
use App\Models\Pengembalian;
use App\Models\Peminjaman;
use App\Models\Buku;


class Petugas extends Model
{
    use HasFactory;
    protected $table = 'operators';
    protected $fillable = [
        'nama_petugas',
        'jabatan_petugas',
        'no_telpon',
        'alamat_petugas'
    ];

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

    public function anggota()
        {
            return $this->belongsToMany(Anggota::class, 'peminjaman');
        }
}
