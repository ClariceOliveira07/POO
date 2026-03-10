<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST">
        <label>Digite um valor:</label>
        <input type="number" name="valor1">
        <br>
        <label>Digite outro valor:</label>
        <input type="number" name="valor2">
        <br>
        <label>Digite a operação:</label>
        <input type="submit" name="op" value="+">
        <input type="submit" name="op" value="-">
        <input type="submit" name="op" value="x">
        <input type="submit" name="op" value="/">
    </form>
    <br>

    <?php 
    require_once 'Soma';
    require 'Subtração';
    require 'Multiplicação';
    require 'Divisão'; 

    if($_POST){
        $n1 = $_POST['valor1'];
        $n2 = $_POST['valor2'];
        $op = $_POST['op'];

        $calcu1 = new Soma($valor1, $valor2);
        $calcu2 = new Subtração($valor1, $valor2);
        $calcu3 = new Multiplicação($valor1, $valor2);
        $calcu4 = new Divisão($valor1, $valor2);

        if ($op = "+"){
            echo "resultado" . $calcu1;
        }elseif ($op = "-"){
            echo "resultado" . $calcu2;
        }elseif ($op = "x"){
            echo "resultado" . $calcu3;
        }else ($op = "/"){
            echo "resultado" . $calcu4;
        }
    }
    
    ?>

</body>
</html>