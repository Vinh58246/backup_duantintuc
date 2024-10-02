<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table='news';
    protected $primaryKey='id';
    protected $attributes = [
        'status' => 0,
        'views' => 0,
        'hots' => 0
    ];
    protected $fillable = [
        'idcategory',
        'title',
        'status',
        'content',
        'avatar',
        'views',
        'date',
        'hots',
        'slug',
    ];

    public function category_foreign(){
        return $this->belongsTo(category::class, 'idcategory');
    }
}
