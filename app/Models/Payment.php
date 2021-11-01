<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table ="payments";
    protected $primaryKey = 'id_pay';
    protected $fillable = [
        'id_pay',
        'id_order',
        'id',
        'payment_status',
 
    ];
}
