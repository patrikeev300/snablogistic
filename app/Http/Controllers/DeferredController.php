<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use App\Models\Reviews;

class DeferredController extends Controller
{
    public function index()
    {
        // Проверяем, аутентифицирован ли пользователь
        if (Auth::check()) {
            // Получаем текущего пользователя
            $user = Auth::user();
            $reviews = Reviews::all(); // Или какой-то другой метод получения отзывов в зависимости от требований

            // Получаем избранные продукты пользователя
            $deferredProducts = $user->deferreds()->with('product.assignment')->get();
        
            // Передаем избранные продукты на страницу deferred.blade.php
            return view('deferred', ['deferredProducts' => $deferredProducts]);
        } else {
            // Если пользователь не аутентифицирован, перенаправляем его на страницу аутентификации
            return redirect()->route('login')->with('error', 'Пожалуйста, войдите в свой аккаунт, чтобы просмотреть избранные продукты.');
        }
    }
    
    
    public function add(Request $request, Products $product)
    {
        // Проверяем, не добавлен ли товар уже в избранное пользователем
        if ($request->user()->deferreds()->where('ID_Product', $product->id)->exists()) {
            return redirect()->back()->with('error', 'Товар уже добавлен в избранное.');
        }

        // Добавляем товар в избранное пользователя
        $request->user()->deferreds()->create([
            'ID_Product' => $product->id,
        ]);

        return redirect()->back()->with('success', 'Товар успешно добавлен в избранное.');
    }

    public function remove(Request $request, Products $product)
    {
        // Находим запись о товаре в избранном пользователя
        $deferred = $request->user()->deferreds()->where('ID_Product', $product->id)->first();

        // Проверяем, найдена ли запись
        if (!$deferred) {
            return redirect()->back()->with('error', 'Товар не найден в избранном.');
        }

        // Удаляем товар из избранного пользователя
        $deferred->delete();

        return redirect()->back()->with('success', 'Товар успешно удален из избранного.');
    }
}
