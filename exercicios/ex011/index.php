<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario com a respotas na mesma pagina HTML</title>
</head>
<body>
    <header>
        <h1>
            Formulario sem trocar de pagina
        </h1>
    </header>
    <?php 
        $numero1 = $_GET['numero1'] ?? 0;
        $numero2 = $_GET['numero2']?? 0;
    ?>
        <main>
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
            <label for="numero1">Digite um número</label>
            <input type="text" name="numero1" placeholder="digite o 1º número" value="<?=$numero1?>">
            <label for="numero2">Digite um número</label>
            <input type="text" name="numero2" placeholder="digite o 2º número" value="<?=$numero2 ?>">
            <input type="submit" value="SOMAR">
        </form>
        </main>
        <h3>RESULTADO</h3>
        <?php 
            $soma = $numero1 + $numero2;
            echo "A soma entre os valores é igual a " . $soma;
        ?>
</body>
</html>