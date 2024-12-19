<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table='category';
    protected $fillable = [
        'name',
        'description',
        'content',
        'image',
    ];

    public function owner(){
        return $this->belongsTo('User');
    }

    // In product model
    public function product(){
        return $this->hasMany('App\Models\Product', 'idcat');
    }
}
