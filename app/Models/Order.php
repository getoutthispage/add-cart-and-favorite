<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Перечисляем поля, которые можно массово заполнять
    protected $fillable = ['product_id', 'name', 'phone'];

}
