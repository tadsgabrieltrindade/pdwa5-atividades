<html>
 <head>
  <title>Exemplo 57</title>
 </head>
 <body>
 <form method="post">
    <input type="number" name="numero">
 </form>

<?php
    $a = $_POST["numero"]; 
    if($a > 0)
        echo "$a é um Valor Positivo";
    elseif($a < 0)
        echo "$a é um Valor Negativo";
    else
        echo "$a é Igual a Zero";
?>
 </body>
</html>
