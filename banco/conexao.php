 <html>
    <html lang="en">
    <head>
        
</head>
<body>
<?php
$dbhost ='localhost';
$user='aluno';
$senha='ceep';
$db='form';

$con = new mysqli($dbhost, $user, $senha, $db);
if($con->connect_errno)
{
  echo "erro" ;
}
else
{
   echo"conexao OKAY";
}
?>

</body>
</html>