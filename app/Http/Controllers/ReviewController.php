<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;
use Exception;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'FullName' => 'required', // Добавляем правило валидации для поля FullName
                'description' => 'required',
                'price' => 'required|numeric|min:0|max:5',
                'photo_path' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Используем имя поля для фото
            ]);
    
            // Создаем новый объект Review
            $review = new Reviews();
            $review->FullName = $request->FullName; // Присваиваем значение из поля FullName
            $review->description = $request->description;
            $review->price = $request->price;
    
            // Загрузка фото, если оно было прикреплено
            if ($request->hasFile('photo_path')) {
                $image = $request->file('photo_path');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);
                $review->photo_path = $imageName; // Сохранение имени файла в поле photo_path
            }
    
            // Сохраняем отзыв в базе данных
            $review->save();
    
            return redirect()->back()->with('success', 'Отзыв успешно отправлен!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Ошибка при отправке отзыва: '.$e->getMessage());
        }
    }
    
    
    public function index()
    {
        try {
            $reviews = Reviews::all(); // Получение всех отзывов из базы данных
        
            // Проверяем, есть ли отзывы в базе данных
            if ($reviews->isEmpty()) {
                // Если отзывов нет, передаем пустой массив в представление
                $reviews = [];
            }
           
            // Передаем отзывы в представление
            return view('welcome', compact('reviews'));
        } catch (Exception $e) {
            // Если произошла ошибка при загрузке отзывов, передаем сообщение об ошибке в представление
            return view('welcome')->with('error', 'Ошибка при загрузке отзывов: '.$e->getMessage());
        }
    }
    
}
