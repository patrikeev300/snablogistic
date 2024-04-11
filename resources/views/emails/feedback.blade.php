@component('mail::message')
# Обратная связь

ФИО: {{ $data['fio'] }}

Описание вопроса: {{ $data['text'] }}

Номер телефона: {{ $data['tel'] }}

@endcomponent
