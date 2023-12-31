<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['id', 'nama', 'desc', 'size', 'warna', 'berat', 'stok', 'harga', 'gambar', 'kategori_id'];

    public function Kategori(): BelongsTo
    {
        return $this->belongsTo(kategori::class, 'kategori_id');
    }

    public function favorite(): HasMany
    {
        return $this->HasMany(Favorite::class, 'product_id', 'id');
    }



}
