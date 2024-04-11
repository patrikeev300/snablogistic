<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оптовая закупка</title>
</head>
<body>
    <h1>Оптовая закупка</h1>
    <p><strong>ФИО:</strong> {{ $data['fio'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Номер телефона:</strong> {{ $data['tel'] }}</p>
    <p><strong>Адрес торговой точки:</strong> {{ $data['address'] }}</p>

    @if ($data['comments'])
    <p><strong>Комментарии:</strong> {{ $data['comments'] }}</p>
    @endif

    <p>С уважением,<br>{{ config('app.name') }}</p>
</body>
</html>
