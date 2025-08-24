<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número real</title>
</head>
<body>
    <header>
        <h1>Analise de número real</h1>
    </header>
    <section>
        <li>
        <?php 
            $numero = $_POST['numero'];
            echo "A parte inteira do número é " . round($numero,-2);
            echo "A parte fracionaria do número é " . round($numero,2);
        ?>
        </li>
    </section>
</body>
</html>