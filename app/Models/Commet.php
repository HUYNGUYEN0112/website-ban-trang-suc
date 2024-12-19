<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commet extends Model
{
    use HasFactory;
    protected $table='comment';
    protected $fillable = [
        'name',
        'email',
        'cntent',
        'id_com',
    ];
    public function product(){
        return $this->belongsTo('App\Models\Product', 'id_com', 'id');
    }
}
