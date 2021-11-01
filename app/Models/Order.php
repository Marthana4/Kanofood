<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table ="order_menus";
    protected $primaryKey = 'id_order';
    protected $fillable = [
        'id_order',
        'reason',
        'message',
        'total_order',
        'order_date',
        'order_status',
        'id',

    ];

}
