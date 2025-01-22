<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FeatureProduct extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'feature_products';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];


    public function products()
    {
        return $this->belongsTo(product::class, 'fk_product_id');
    }
}
