<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class goods extends Model
{
    protected $table = 'goods';
    protected $fillable = ['name', 'type', 'price', 'quantity'];
}
