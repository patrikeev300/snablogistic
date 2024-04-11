<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\StatusOrder;

class UserController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        $totalAmount = Order::where('ID_Users', $user->id)->sum('Cost');
        $activeOrdersCount = Order::where('ID_Users', $user->id)->where('ID_Status_Order', '!=', 4)->count();
        $orders = Order::where('ID_Users', $user->id)->with('product')->get(); // Загрузка связанных данных о продукте
    
        return view('personalarea', compact('totalAmount', 'activeOrdersCount', 'orders'));
    }
    

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->surname = $request->surname;
        // Другие поля для обновления
        
        $user->save();

        return redirect()->back()->with('success', 'Профиль успешно обновлен');
    }
}
