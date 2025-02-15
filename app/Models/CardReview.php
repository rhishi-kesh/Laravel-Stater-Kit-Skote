<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use App\Models\Card;

class CardReview extends Model
{
    use HasFactory;
    
    protected $fillable = ['user_id', 'card_id', 'rating', 'review'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
