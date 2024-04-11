<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status_Products;
use App\Models\Reviews;

class WelcomeController extends Controller
{
    public function index()
    {
        // Получаем список статусов продуктов
        $statuses = Status_Products::with('products')->get();
        
        // Получаем список отзывов
        $reviews = Reviews::all(); // Или какой-то другой метод получения отзывов в зависимости от требований
    
        // Возвращаем вид welcome с передачей списка статусов и отзывов
        return view('welcome', compact('statuses', 'reviews'));
    }
}
