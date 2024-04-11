<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;

    protected $fillable = [
        'FullName', // Добавлен новый столбец FullName
        'description', // Поле description изменено на описание
        'price',
        'photo_path',
    ];
}
