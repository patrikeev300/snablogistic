<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Status_Products extends Model
{
    use HasFactory;
    protected $table="status_products";
    protected $perPage = 4; // Указываем количество записей на странице

    protected $fillable = [
        'Name',
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Products::class, 'ID_Status_Product');
    }
}
