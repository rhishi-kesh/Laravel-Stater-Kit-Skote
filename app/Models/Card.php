<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Platform;
use App\Models\Version;
use App\Models\Amount;
use App\Models\CardReview;

class Card extends Model
{
    use HasFactory;
    
    protected $fillable = ['platform_id', 'title', 'image', 'seller', 'type', 'base_price', 'discount', 'stock', 'usage', 'description', 'delivery_time'];
    
    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }
    
    public function versions()
    {
        return $this->belongsToMany(Version::class, 'card_versions');
    }
    
    public function amounts()
    {
        return $this->belongsToMany(Amount::class, 'card_amounts');
    }
    
    public function reviews()
    {
        return $this->hasMany(CardReview::class);
    }
}
