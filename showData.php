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
        <table border="1px solid">

            <tr>
                <td>Фамилия</td>
                <td><?= $_POST['surname'] ?></td>
            </tr>
            <tr>
                <td>Имя</td>
                <td><?= $_POST['name'] ?></td>
            </tr>
            <tr>
                <td>Очество</td>
                <td><?= $_POST['papname'] ?></td>
            </tr>
            <tr>
                <td>Отдел</td>
                <td><?= $_POST['otdel'] ?></td>
            </tr>
            <tr>
                <td>Должность</td>
                <td><?= $_POST['dolj'] ?></td>
            </tr>
        </table>
        <a href="showPerson.php?surname=<?= $_POST['surname'] ?>&dolj=<?= $_POST['dolj'] ?>">Next page</a>
    </div>

</body>

</html>