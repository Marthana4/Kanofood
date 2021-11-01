<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    use HasFactory;
    protected $table ="order_details";
    protected $primaryKey = 'id_detail';
    protected $fillable = [
        'id_detail',
        'id_order',
        'id_menu',
        'quantity',
        'total',
    ];

    public function orderdetail(){
        return $this->belongsTo(Menu::class,'id_menu')->withDefault([
            'name_food'=> 'capjayaa',
            'price'=> '10000',
            'quantity'=> '2',
            'total'=> '20000',
        ]);
    }
}
