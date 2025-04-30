<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MidCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'mcat_name','tcat_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class,'tcat_id','tcat_id');
    }

    public function endCategory():HasMany
    {
        return $this->hasMany(EndCategory::class, 'mcat_id', 'mcat_id');
    }
    
}
