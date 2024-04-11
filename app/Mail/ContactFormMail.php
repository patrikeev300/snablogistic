<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // Свойство для хранения данных формы

    /**
     * Create a new message instance.
     *
     * @param array $data Данные формы
     */
    public function __construct(array $data)
    {
        $this->data = $data; // Сохраняем данные формы в свойстве класса
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Обратная связь') // Изменено на русский язык
            ->view('emails.contact-form'); // Создайте шаблон письма для контактной формы
    }
}
