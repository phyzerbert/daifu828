<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function currency() {
        return $this->belongsTo(Currency::class);
    }
}
