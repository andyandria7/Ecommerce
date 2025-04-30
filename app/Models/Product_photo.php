<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_photo extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'photo','p_id'
    ];

    public function product(){
        return $this->belongsTo(Product::class, 'p_id', 'p_id');
    }
}
