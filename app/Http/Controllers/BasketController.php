<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrderRequest;
use App\Models\Basket;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BasketController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $basketItems = $user->baskets()->with('product')->get();
        $totalPrice = $basketItems->sum(fn ($item) => $item->product->Price * $item->Quantity);

        return view('basket.index', compact('basketItems', 'totalPrice'));
    }

    public function remove($id)
    {
        $basketItem = Basket::findOrFail($id);
        $basketItem->delete();

        return redirect()->route('basket.index')->with('success', 'Товар успешно удален из корзины.');
    }

    public function createOrder(CreateOrderRequest $request)
    {
        $user = auth()->user();
        $basketItems = $user->baskets()->whereIn('ID_Product', $request->input('ID_Product'))->get();

        DB::transaction(function () use ($user, $basketItems, $request) {
            foreach ($basketItems as $basketItem) {
                $order = Order::create([
                    'Data' => now(),
                    'Number' => Str::random(6),
                    'Cost' => $basketItem->getCost(),
                    'Address' => $request->input('address'),
                    'Quantity' => $basketItem->Quantity,
                    'ID_Users' => $user->id,
                    'ID_Status_Order' => 2,
                    'ID_Product' => $basketItem->ID_Product,
                    'Commentary' => $request->input('commentary'),
                ]);

                $basketItem->delete();
            }
        });

        return redirect()->route('basket.index')->with('success', 'Заказ успешно оформлен.');
    }
}