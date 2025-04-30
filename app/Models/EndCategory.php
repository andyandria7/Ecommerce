<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EndCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'ecat_name','mcat_id'
    ];

    public function mcategory(): BelongsTo
    {
        return $this->belongsTo(MidCategory::class,'mcat_id','mcat_id');
    }
}
