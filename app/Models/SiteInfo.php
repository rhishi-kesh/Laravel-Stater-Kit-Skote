<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SiteInfo extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'fav_icon', 'copy_right_text'];
}

//provide code for create,edit,update and delete card informations