<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusOrder extends Model
{
    use HasFactory;

    protected $table = 'status_order';
    protected $fillable = ['Name'];

    // Если вам нужна связь с заказами, вы можете добавить здесь отношение hasMany
    public function orders()
    {
        return $this->hasMany(Order::class, 'ID_Status_Order');
    }
}
