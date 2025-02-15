<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Amount extends Model
{
    use HasFactory;
    
    protected $fillable = ['value'];
}
