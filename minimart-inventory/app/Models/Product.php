<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [

        'supplier_id',

        'category_id',

        'name',

        'barcode',

        'price',

        'stock',

        'expiration_date'

    ];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}