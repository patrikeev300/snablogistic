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
            $this->sendEmail($validatedData);
            return redirect()->back()->with('success', __('messages.form_success'));
        } catch (\Exception $e) {
            // Log the error for detailed analysis
            \Log::error('Error sending email: ' . $e->getMessage());
            return redirect()->back()->with('error', __('messages.form_error'));
        }
    }

    private function sendEmail($data)
    {
        Mail::to('patrikeev100@bk.ru')->send(new ContactFormMail($data));
    }

    public function index()
    {
        return view('kontakt');    
    }
}

