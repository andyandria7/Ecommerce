<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'p_name','p_old_price','p_current_price','p_qty','p_featured_photo','p_total_view','p_is_featured','p_is_active','ecat_id'

    ];

    public function product_photo(){
        return $this->hasMany(Product_photo::class, 'p_id','p_id');
    }

}
