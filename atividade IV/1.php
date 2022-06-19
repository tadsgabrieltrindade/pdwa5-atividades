<html>
 <head>
  <title>Exemplo 57</title>
 </head>
 <body>
 <form method="post">
    <label for="">Número 1:</label>
    <input type="text" name="num1">
    <br><br>
    <label for="">Número 2:</label>
    <input type="number" name="num2">
    
    <br><br>
    <p>Escolha a operação:</p>
    <input type="radio" name="operacao" value="soma"> Soma
    <input type="radio" name="operacao" value="subtracao"> Subtração
    <input type="radio" name="operacao" value="multiplicacao"> Multiplicação
    <input type="radio" name="operacao" value="divisao"> Divisão
    <br><br>
    <input type=submit value="Enviar"> 
 </form>

 <?php

    $a = $_POST["num1"];  
    $b = $_POST["num2"];
    $operacao = $_POST["operacao"];

    if ($operacao === "multiplicacao")
        echo $a * $b;

    else if ($operacao === "divisao")
        echo $a / $b;

    else if ($operacao === "soma")
        echo $a + $b;
        
    else if ($operacao === "subtracao")
        echo $a - $b;
    
?>
 </body>
</html>
