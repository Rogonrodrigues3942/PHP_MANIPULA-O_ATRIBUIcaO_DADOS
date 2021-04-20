<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor variável global - nº 3</title>
</head>
<body>
    <?php
        $num = 5000;

        function testa_escopo1()
        {
            echo $GLOBALS["num"]."<br><br>";
            $GLOBALS["num"]++;
        }

        testa_escopo1();
        echo "<br>".$num;
    ?>
    
</body>
</html>