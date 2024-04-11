<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products; // Добавляем импорт для модели Products

class Order extends Model
{
    use HasFactory;

    protected $table = 'order';
    protected $fillable = [
        'Data',
        'Number',
        'Cost',
        'Address',
        'Quantity',
        'Commentary',
        'ID_Product',
        'ID_Users',
        'ID_Status_Order',
    ];

    // Определение отношения с пользователем
    public function user()
    {
        return $this->belongsTo(User::class, 'ID_Users');
    }

    // Определение отношения с статусом заказа
    public function status()
    {
        return $this->belongsTo(StatusOrder::class, 'ID_Status_Order');
    }

    // Определение отношения с продуктом
    public function product()
    {
        return $this->belongsTo(Products::class, 'ID_Product');
    }
    
}
