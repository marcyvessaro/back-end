<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <form method="get">
      
    <label>Informe uma cor </label>
    <input type="text" name="cor" id="cor"></input>
    <button type="submit" name="enviar" value="enviar">Enviar</button>

    </form>
    <?php 
    $cor = $_GET['cor'];

    if ($cor == "azul"){
    echo "a cor é azul";
    }
    elseif ($cor == "amarelo"){
      echo "a cor é amarelo";
    }
    else{
    echo "a cor é invalida";}
      
?>
  
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>
