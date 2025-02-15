<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Card;

class Platform extends Model
{
    use HasFactory;
    
    protected $fillable = ['name'];
    
    public function cards()
    {
        return $this->hasMany(Card::class);
    }
}