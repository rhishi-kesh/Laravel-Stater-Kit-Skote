<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Order;

class OrderDetail extends Model
{
    use HasFactory;
    
    protected $fillable = ['order_id', 'card_id', 'quantity', 'subtotal'];
    
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}