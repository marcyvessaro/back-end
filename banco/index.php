<?php

if(isset($_POST['submit'])){
    print_r('Username: '. $_POST ['nome']);
    print_r('<br>');
    print_r('Nome de exibição: '. $_POST['exb']);
    print_r('<br>');
    print_r('Email: '. $_POST['email']);
    print_r('<br>');
    print_r('Senha '. $_POST['senha']);
    print_r('<br>');
    print_r('Confirmar senha: '. $_POST['confirm']);
    print_r('<br>');
    
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insercao</title>

</head>
<body>
    <div class="box">
        <form action="index.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Username</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="exb" id="email" class="inputUser" required>
                    <label for="exb" class="labelInput">Nome de exibição</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <label for="password"><b>senha:</b></label>
                <input type="password" name="senha" id="senha" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="password" name="confirm" id="confirm" class="inputUser" required>
                    <label for="confirm" class="labelInput">confirmar senha</label>
                </div>

                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>