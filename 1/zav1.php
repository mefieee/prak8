<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../css/styles.css">
    <title>Суперглобальні змінні PHP</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>

<body>
    <h1>Суперглобальні змінні PHP</h1>

    <table>
        <tr>
            <th>Позначення змінної</th>
            <th>Характеристика</th>
            <th>Отримане значення</th>
        </tr>
        <tr>
            <td>GLOBALS</td>
            <td>Посилання на всі змінні глобальної області видимості</td>
            <td><?php var_dump($GLOBALS); ?></td>
        </tr>
        <tr>
            <td>_SERVER</td>
            <td>Інформація про сервер і середовище виконання</td>
            <td><?php var_dump($_SERVER); ?></td>
        </tr>
        <tr>
            <td>_GET</td>
            <td>Змінні HTTP GET</td>
            <td><?php var_dump($_GET); ?></td>
        </tr>
        <tr>
            <td>_POST</td>
            <td>Змінні HTTP POST</td>
            <td><?php var_dump($_POST); ?></td>
        </tr>
        <tr>
            <td>_FILES</td>
            <td>Змінні файлів, завантажених по HTTP</td>
            <td><?php var_dump($_FILES); ?></td>
        </tr>
        <tr>
            <td>_COOKIE</td>
            <td>HTTP Cookies</td>
            <td><?php var_dump($_COOKIE); ?></td>
        </tr>
        <tr>
            <td>_SESSION</td>
            <td>Змінні сесії</td>
            <td><?php var_dump($_SESSION); ?></td>
        </tr>
        <tr>
            <td>_REQUEST</td>
            <td>Змінні HTTP-запиту</td>
            <td><?php var_dump($_REQUEST); ?></td>
        </tr>
        <tr>
            <td>_ENV</td>
            <td>Змінні оточення</td>
            <td><?php var_dump($_ENV); ?></td>
        </tr>
    </table>
    <div class="link">
        <a href="../index.html">Всі завдання</a>
    </div>
</body>
</html>