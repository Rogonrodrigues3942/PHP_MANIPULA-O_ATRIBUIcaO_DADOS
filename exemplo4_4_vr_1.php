<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis Globais nº 1</title>
</head>
<body>
    <?php
        $num = 5000;
        function testa_escopo()
        {
            $num = 50;
            echo "<br>".$num;
        }

        echo $num."<br>";
        testa_escopo();
    ?>
    
</body>
</html>