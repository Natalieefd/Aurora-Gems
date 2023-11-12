<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Favorite extends Model
{
    use HasFactory;
    protected $table = 'favorites';
    protected $fillable = ['id', 'user_id', 'product_id'];

    public function Product(): BelongsTo
    {
        return $this->belongsTo(kategori::class, 'product_id');
    }

    public function User(): BelongsTo
    {
        return $this->belongsTo(kategori::class, 'user_id');
    }

}
