<html>
 <head>
  <title>Exemplo 57</title>
 </head>
 <body>
 <form method="post">
    <input type="number" name="a">
    <input type="number" name="b">
    <input type=submit value="Enviar"> 
 </form>

<?php
    $a = $_POST["a"]; 
    $b = $_POST["b"]; 
    if($a < $b)
        echo "$a $b";
    else
        echo "$b $a";
?>
 </body>
</html>
