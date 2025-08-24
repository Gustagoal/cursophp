<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario minimo</title>
</head>
<body>
    <?php 
    $salario = $_GET["salario"] ?? 0;    
    ?>
    <h1>Salário mínimo</h1>
    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="salario">Informe o seu salário</label>
            <input type="number" name="salario" placeholder="Informe seu salário">
            <p>Considerando o salário mínimo de $ 1.380,00</p>
            <input type="submit" value="calcular">
        </form>
    </main>
    <?php 
        $resto_salario = $salario/1380.00;
        echo "<br>Quem recebe o salário de " . $salario;
        echo "<br> Ganha " . intdiv($salario,1380.00) ;
        echo "<br>+" . $resto_salario ;

    
    ?>
</body>
</html>