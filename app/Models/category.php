<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    
    protected $primaryKey='id';
    protected $attributes = [
        'trang_thai' => 0
    ];
    protected $fillable = [
        'ten',
        'trang_thai',
        'slug'
    ];

}
