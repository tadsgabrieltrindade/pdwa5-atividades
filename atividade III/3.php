<html>
 <head>
  <title>Exemplo 57</title>
 </head>
 <body>
 <form method="post">
    <label for="">Nome:</label>
    <input type="text" name="nome">
    <label for="">Idade:</label>
    <input type="number" name="idade">
    <input type=submit value="Enviar"> 
 </form>

<?php
    $a = $_POST["nome"]; 
    $b = $_POST["idade"]; 
    $c = 2022 - (2022 - $b);
    if($b > 18)
        echo " $a é maior de 18 e tem $c Anos";
    else
        echo "$a não é maior de 18 e tem $c Anos";
?>
 </body>
</html>
