<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de divisão</title>
</head>
<body>
    <h1>Anatomia de divisão</h1>
    <?php 
    $dividendo = $_POST['dividendo'] ?? 0;
    $divisor = $_POST['divisor'] ?? 0;
    ?>
<main>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label for="dividendo">Dividendo</label>
        <input type="number" name="dividendo">
        <label for="divisor">Divisor</label>
        <input type="number" name="divisor">
        <button type="submit">Analisar</button>
    </form>

    <?php 
        echo "<br> O dividendo é " . $dividendo;
        echo "<br>O divisor é " . $divisor;
        echo "<br>A divisão é " . round($dividendo/$divisor);
        echo "<br>A sobra é " . $dividendo%$divisor;

    ?>
</main>
</body>
</html>