<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = 5000;
        function testa_escopo1()
        {
            $num += 5;
            echo $num."<br>";
        }
        echo $num . "<br>";
        testa_escopo1();
    ?>
</body>
</html>