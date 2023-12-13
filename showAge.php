<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <?php  
        $age = $_POST['age'];
        function isNumeric($age) {
            if($age <= 0 || $age >= 120) 
                echo '<span style="color: red"><em>Данные введены не верно</em></span>';
            else 
                return ('Ваш возрасть: ' . $age . ' лет');
        }
        ?>
        <h1>
            <?=isNumeric($age)?>
        </h1>
    
</body>
</html>