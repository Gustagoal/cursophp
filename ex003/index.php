<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo '<h4>Tipos de dados</h4>';
    $nome = 'Gustavo';
    $idade = 23;
    $verdadeiro_falso = False; 
    $dinheiro = 30.000;

    print var_dump($nome) .var_dump($idade) . var_dump($verdadeiro_falso) . var_dump($dinheiro);

    ?>
</body>
</html>