<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuOrder extends Model
{
    use HasFactory;
    protected $fillable= [
        'parent_id',
        'menu_id',
        'order'

    ];
}
