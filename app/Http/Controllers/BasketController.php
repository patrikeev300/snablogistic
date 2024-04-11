<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Baskets;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BasketController extends Controller
{
    public function index()
    {
        $basketItems = Baskets::all();
        $totalPrice = $basketItems->sum('product.Price');
        return view('basket.index', compact('basketItems', 'totalPrice'));
    }

    public function remove($id)
    {
        $basketItem = Baskets::findOrFail($id);
        $basketItem->delete();
        return redirect()->route('basket.index')->with('success', 'Товар успешно удален из корзины.');
    }

    public function create(Request $request)
    {
        // Валидация данных запроса
        $validator = Validator::make($request->all(), [
            'address' => 'required|string|max:255',
            'ID_Product' => 'required|array',
            'ID_Product.*' => 'required|exists:baskets,ID_Product,ID_Users,' . Auth::id(),
            'commentary' => 'nullable|string', // Добавляем валидацию для поля commentary
        ]);
    
        if ($validator->fails()) {
            return redirect()->route('basket.index')->withErrors($validator)->withInput();
        }
    
        // Получаем пользователя
        $user = Auth::user();
    
        // Создаем отдельную запись в таблице заказов для каждого товара в корзине
        foreach ($request->input('ID_Product') as $productId) {
            $basketItem = $user->baskets()->where('ID_Product', $productId)->first();
    
            $order = Order::create([
                'Data' => now(),
                'Number' => Str::random(6),
                'Cost' => $basketItem->product->Price * $basketItem->Quantity,
                'Address' => $request->input('address'),
                'Quantity' => $basketItem->Quantity,
                'ID_Users' => $user->id,
                'ID_Status_Order' => 2, // Статус "В обработке"
                'ID_Product' => $productId,
                'Commentary' => $request->input('commentary'), // Сохраняем значение поля commentary
            ]);
    
            // Удаляем товар из корзины после успешного оформления заказа
            $basketItem->delete();
        }
    
        return redirect()->route('basket.index')->with('success', 'Заказ успешно оформлен.');
    }
    
}
