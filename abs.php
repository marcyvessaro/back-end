<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>abs</title>
</head>
<body>
    <?php
   $abs= $_GET ["abs"];
   echo "<p> o numero real de $abs é: " . abs($abs);
   ?>
    <br>
    <a href= "http://localhost/funçoes/index.html">voltar</a>
</body>
</html>