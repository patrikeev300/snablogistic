<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Assignment;
use App\Models\Baskets;

class ProductController extends Controller
{
    public function index()
    {
        // Получаем все товары для страницы каталога
        $products = Products::paginate(8);
        
        // Получаем список назначений состава
        $assignments = Assignment::all();
        
        return view('catalog.index', compact('products', 'assignments'));
    }
    

    public function search(Request $request)
    {
        // Получаем поисковой запрос пользователя
        $search = $request->input('search');
        
        // Ищем товары, содержащие введенную пользователем строку в названии или описании
        $products = Products::where('Name', 'like', '%' . $search . '%')
                            ->orWhere('Description', 'like', '%' . $search . '%')
                            ->paginate(8);
        
        // Получаем список назначений состава
        $assignments = Assignment::all();
        
        return view('catalog.index', compact('products', 'assignments'));
    }

    public function sort(Request $request)
    {
        // Получаем значение сортировки из запроса пользователя
        $sort = $request->input('sort');
        
        // Сортируем товары в соответствии с выбранной пользователем опцией
        if ($sort == 'price_asc') {
            $products = Products::orderBy('Price', 'asc')->paginate(8);
        } elseif ($sort == 'price_desc') {
            $products = Products::orderBy('Price', 'desc')->paginate(8);
        } else {
            // Другие варианты сортировки...
            $products = Products::paginate(8);
        }
        
        // Получаем список назначений состава
        $assignments = Assignment::all();
        
        return view('catalog.index', compact('products', 'assignments'));
    }
    
    

    public function filter(Request $request)
    {
        // Получаем значение фильтра из запроса пользователя
        $assignmentId = $request->input('filter'); // Используем имя параметра 'filter'
    
        // Фильтруем товары в соответствии с выбранным пользователем назначением
        if ($assignmentId) {
            // Если назначение состава выбрано, фильтруем товары по этому назначению
            $products = Products::where('ID_Assignment', $assignmentId)->paginate(8);
        } else {
            // Если назначение состава не выбрано, просто возвращаем все товары
            $products = Products::paginate(8);
        }
        
        // Получаем список назначений состава
        $assignments = Assignment::all();
        
        return view('catalog.index', compact('products', 'assignments'));
    }
    
    public function show($id)
    {
        // Находим товар по его ID
        $product = Products::findOrFail($id);

        return view('catalog.show', compact('product'));
    }
    
    public function addToCart(Request $request, Products $product)
    {
        // Создаем запись в корзине для текущего пользователя и выбранного товара
        Baskets::create([
            'Quantity' => 1, // Пока что устанавливаем количество 1
            'ID_Product' => $product->id,
            'ID_Users' => auth()->user()->id, // Получаем ID текущего пользователя
        ]);

        return redirect()->route('basket.index')->with('success', 'Товар успешно добавлен в корзину.');
    }
}

