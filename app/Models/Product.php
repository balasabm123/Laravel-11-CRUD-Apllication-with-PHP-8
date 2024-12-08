<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    protected $fillable=[
        'name',
        'qty',
        'price',
        'description'
    ];


    static public function getSingle($id){
        return self::find($id);
    }
    
}
