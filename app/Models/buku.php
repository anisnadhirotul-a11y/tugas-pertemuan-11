<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;

    /**
     * Nama tabel
     */
    protected $table = 'buku';

    /**
     * Mass Assignment
     */
    protected $fillable = [
        'kode_buku',
        'judul',
        'kategori',
        'pengarang',
        'penerbit',
        'negara_penerbit',
        'kota_penerbit',
        'tahun_terbit',
        'isbn',
        'harga',
        'stok',
        'deskripsi',
        'bahasa',
    ];

    /**
     * Casting data
     */
    protected $casts = [
        'tahun_terbit' => 'integer',
        'harga' => 'decimal:2',
        'stok' => 'integer',
    ];

    /**
     * Accessor format harga
     */
    public function getHargaFormatAttribute(): string
    {
        return 'Rp ' . number_format($this->harga, 0, ',', '.');
    }

    /**
     * Accessor status tersedia
     */
    public function getTersediaAttribute(): bool
    {
        return $this->stok > 0;
    }

    /**
     * Accessor status stok badge
     */
    public function getStatusStokBadgeAttribute(): string
    {
        if ($this->stok == 0) {
            return '<span class="badge bg-danger">Habis</span>';
        } elseif ($this->stok <= 5) {
            return '<span class="badge bg-warning">Menipis</span>';
        } elseif ($this->stok <= 15) {
            return '<span class="badge bg-info">Sedang</span>';
        }

        return '<span class="badge bg-success">Aman</span>';
    }

    /**
     * Accessor tahun label
     */
    public function getTahunLabelAttribute(): string
    {
        return $this->tahun_terbit >= 2024
            ? 'Buku Baru'
            : 'Buku Lama';
    }

    /**
     * Scope buku tersedia
     */
    public function scopeTersedia($query)
    {
        return $query->where('stok', '>', 0);
    }

    /**
     * Scope kategori
     */
    public function scopeKategori($query, $kategori)
    {
        return $query->where('kategori', $kategori);
    }

    /**
     * Scope stok menipis
     */
    public function scopeStokMenipis($query)
    {
        return $query->where('stok', '<', 5);
    }

    /**
     * Scope harga range
     */
    public function scopeHargaRange($query, $min, $max)
    {
        return $query->whereBetween('harga', [$min, $max]);
    }

    /**
     * Scope buku terbaru
     */
    public function scopeTerbaru($query)
    {
        return $query->where('tahun_terbit', '>=', 2024);
    }
}