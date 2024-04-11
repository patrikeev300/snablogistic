<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function sendForm(Request $request)
    {
        $validatedData = $request->validate([
            'fio' => 'required|string|max:255',
            'text' => 'required|string',
            'tel' => 'required|string|max:20',
        ]);

        try {
            Mail::to('patrikeev100@bk.ru')->send(new ContactFormMail($validatedData));
            return redirect()->back()->with('success', 'Форма успешно отправлена!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ошибка отправки письма: ' . $e->getMessage());
        }
    }


    public function index(){

        return view('kontakt');    
    }

    
}
