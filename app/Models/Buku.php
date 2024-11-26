<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $guarded = ['id'];

    public function penulis(): BelongsTo
    {
        return $this->belongsTo(Penulis::class, 'id_penulis');
    }

    public function penerbit(): BelongsTo
    {
        return $this->belongsTo(Penerbit::class, 'id_penerbit');
    }
}
