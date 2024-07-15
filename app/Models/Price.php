<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'price_type',
        'unit_size',
        'qty',
        'price'
    ];

    public function products():BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

}
