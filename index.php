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
        <button type="submit">Somar</button>
        <button type="submit">Subtrair</button>
        <button type="submit">Multiplicar</button>
        <button type="submit">Dividir</button>
    </form>
    <br>

    <?php 
    require_once 'Soma';
    require 'Subtração';
    require 'Multiplicação';
    require 'Divisão'; 

    if($_POST){
        $soma = $_POST[''];
    }
    
    ?>

</body>
</html>