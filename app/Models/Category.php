<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'tcat_name',
    ];

    public function mid_category(): HasMany
    {
        return $this->hasMany(MidCategory::class, 'tcat_id', 'tcat_id');
    }
}
