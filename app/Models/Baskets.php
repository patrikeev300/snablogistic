<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baskets extends Model
{
    use HasFactory;

    protected $table = 'baskets';
    protected $fillable = ['Quantity', 'ID_Product', 'ID_Users'];

    public function product()
    {
        return $this->belongsTo(Products::class, 'ID_Product');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'ID_Users');
    }
}

