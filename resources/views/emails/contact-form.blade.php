<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обратная связь</title>
</head>
<body>
    <h1>Обратная связь</h1>
    <p><strong>ФИО:</strong> {{ $data['fio'] }}</p>
    <p><strong>Описание вопроса:</strong> {{ $data['text'] }}</p>
    <p><strong>Номер телефона:</strong> {{ $data['tel'] }}</p>
</body>
</html>
    