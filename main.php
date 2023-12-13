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

        table {
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
        <br><br><br>

        <h2> Создайте форму с одним полем – возраст пользователя в годах. Проверьте с помощью функции is_numeric() введено ли число. Проверьте является ли число допустимым (не отрицательным и меньше 120). Если с возрастом все в порядке, выведите его на следующей странице. Если что-то введено не правильно, выведите на следующей странице сообщение об ошибке.</h2>
        <form action="showAge.php" method="post">
            <label>Ваш возраст:
                <input type="number" name="age">
            </label>
            <br>
            <input type="submit" value="send">
        </form>


        <h2>С помощью цикла и функции получения случайных чисел сгенерируйте список <ul>, содержащий случайные трехзначные числа. Размер списка также случаен.

            <?php

            function getRandomNumber() {
                    return rand(100, 999);
            }

            $randomListSize = rand(2, 10);
            echo '<ul>';
            for ($i = 0; $i < $randomListSize; $i++) {
                echo sprintf('<li style="list-style-type:upper-roman">' . getRandomNumber() . '</li>' );
            }
            echo '</ul>';
            ?>
        </h2>
    </div>

    <script></script>
</body>

</html>