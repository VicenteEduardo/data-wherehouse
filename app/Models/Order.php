<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'orders';

    protected $guarded = ['id'];
    protected $dates=['deleted_at'];
    public function useres()
    {
        return $this->belongsTo(User::class, 'fk_user_id');
    }
}
