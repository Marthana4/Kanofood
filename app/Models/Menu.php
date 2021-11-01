<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table ="menu_foods";
    protected $primaryKey = 'id_menu';
    protected $fillable = [
        'id_menu',
        'name_food',
        'image',
        'price',
        'deskripsif',
        'id_store',

    ];
}
