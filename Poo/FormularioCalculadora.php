<?php 
    require_once 'instaciaCalculadora.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
    <h2>Calculadora</h2>
    <form method="POST" action="instaciaCalculadora.php">
        <input type="number" name="numero1"
        placeholder="Digite o 1° número">
        <br><br>
        <input type="number" name="numero2"
        placeholder="Digite o 2° número">
        <br><br>
        <input class="soma" type="submit" value="+" name="btnSomar">
        <input class="sub" type="submit" value="-" name="btnSubtrair">
        <input class="mult" type="submit" value="X" name="btnMultiplicar">
        <input class="dividi" type="submit" value="/" name="btnDividir">
    </form>
    </div>
</body>
</html>