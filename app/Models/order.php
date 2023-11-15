<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable=['user_id', 'order_number', 'order_status', 'order_date', 'total_price', 'total_item', 'payment_method', 'delivery_data','delivery_date', 'finish_date'];
}
