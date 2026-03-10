<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
   
    require 'Gerente.php';   
    require 'Estagiario.php'; 

    $gerente = new Gerente("Carlos", 5000.00, 1500.00);
    $estagiaria = new Estagiario("Ana", 1200.00, 200.00);

    echo "O salário final do gerente " . $gerente -> getNome() . " é: R$ " . $gerente -> calcularSalario() . "<br>";
    echo "O salário final da estagiária " . $estagiaria -> getNome() . " é: R$ " . $estagiaria -> calcularSalario();

?>

<hr>

<!--
    <?php for ($i = 1; $i <= 10; $i++) { ?>
        <br>
        <label for="nome<?php echo $i ?>">Funcionário <?php echo $i ?></label>
        <input type="text" name="nome[]" id="nome<?php echo $i ?>" placeholder="Digite o nome...">
    <?php } ?>
-->

</body>
</html>