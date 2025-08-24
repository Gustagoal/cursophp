<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando a raiz quadrada</title>
</head>
<body>
    <?php 
        $numero = $_GET["numero"]??0;
    ?>
    <h1>Calculo matematicos</h1>
<main>
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
        <label for="numero">Informe um número</label>
        <input type="number" name="numero">
        <input type="submit" value="calcular raizes">
    </form>
</main>
<?php 
    echo "<br>Analisando o número ".  $numero;
    echo "<br>A raiz quadrada é  " . round(sqrt($numero));
    echo "<br>A raiz cubica é  " . pow($numero,1/3);

?>

</body>
</html>