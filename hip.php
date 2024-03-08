<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hipotenusa</title>
</head>
<body>
    <?php
    $cat1=$_GET["cat1"];
    $cat2=$_GET["cat2"];
    echo "<p> o valor da hipotenusa é: " . hypot($cat1, $cat2);
    ?>
    <br>
    <a href= "http://localhost/funçoes/index.html">voltar</a>
</body>
</html>