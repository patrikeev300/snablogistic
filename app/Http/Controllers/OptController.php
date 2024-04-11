<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OptFormMail;

class OptController extends Controller
{
    public function sendForm(Request $request)
    {
        $validatedData = $request->validate([
            'fio' => 'required|string|max:255',
            'email' => 'required|string',
            'address' => 'required|string',
            'tel' => 'required|string|max:20',
            'comments' => 'required|string|max:20',
        ]);

        try {
            Mail::to('patrikeev100@bk.ru')->send(new OptFormMail($validatedData));
            return redirect()->back()->with('success', 'Форма успешно отправлена!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ошибка отправки письма: ' . $e->getMessage());
        }
    }

}
