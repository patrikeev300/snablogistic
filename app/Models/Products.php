<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $fillable = [
        'Name',
        'Article',
        'Country',
        'Weight', // Добавляем поле Weight в $fillable
        'Price',
        'Description',
        'Photo_path',
        'Availablequantity',
        'ID_Status_Product',
        'ID_Assignment',
    ];

    public function assignment()
    {
        return $this->belongsTo(Assignment::class, 'ID_Assignment');
    }

    public function status()
    {
        return $this->belongsTo(Status_Products::class, 'ID_Status_Product');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'ID_Product');
    }
}
