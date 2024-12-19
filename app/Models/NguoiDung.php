<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NguoiDung extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
          'email',  'password','name',
    ];
    protected $primaryKey = 'id';
 	protected $table = 'nguoidung';
}
