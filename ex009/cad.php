<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado conversor de moedas</title>
</head>
<body>
    <?php 
        $moeda = $_POST["moeda"];
        echo "O valor convertido para dolár é " . round($moeda/5.22,4);
    ?>
</body>
</html>