<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        .container {
            width: 1140px;
            margin: 150px auto;
            text-align: center;
        }
        table{
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <div class="container">
        <form action="showData.php" method="post">
            <table>
                <tr>
                    <td>Фамилия</td>
                    <td><input type="text" name="surname" required></td>
                </tr>
                <tr>
                    <td>Имя</td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <td>Очество</td>
                    <td><input type="text" name="papname" required></td>
                </tr>
                <tr>
                    <td>Отдел</td>
                    <td><select name="otdel">
                            <option>ИТ</option>
                            <option>Бухгалтерия</option>
                            <option>Продаж</option>
                            <option> Логистика</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Должность</td>
                    <td><input type="text" name="dolj" required></td>
                </tr>
            </table>
            <input type="submit" value="send">
        </form>
    </div>
</body>

</html>