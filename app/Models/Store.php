<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $table ="stores";
    protected $primaryKey = 'id_store';

    protected $fillable = [
        'id_store',
        'name_store',
        'jam_buka',
        'jam_tutup',
        'is_active',
        'alamat',
        'deskripsi',
        'id',
    ];

}
