<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderedItem extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'ordered_items';

    protected $guarded = ['id'];
    protected $dates=['deleted_at'];

    public function products()
    {
        return $this->belongsTo(product::class, 'fk_product_id');
    }
    public function orders()
    {
        return $this->belongsTo(Order::class, 'fk_order_id');
    }
}
