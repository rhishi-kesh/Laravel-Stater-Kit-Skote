<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class Transaction extends Model
{
    use HasFactory;
    
    protected $fillable = ['user_id', 'transaction_no', 'type', 'amount', 'card_type'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}