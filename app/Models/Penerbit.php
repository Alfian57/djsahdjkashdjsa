<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Penerbit extends Model
{
    use HasFactory;

    protected $table = 'penerbit';
    protected $guarded = ['id'];

    public function buku(): HasMany
    {
        return $this->hasMany(Buku::class, 'id_penerbit');
    }
}
