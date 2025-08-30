<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio antecessor e sucessor</title>
</head>
<body>
    <section>
    <?php 
        $numero = $_POST["numero"];
        echo "O sucessor é " .  $numero + 1;
        
        echo "O antecessor é " .  $numero - 1;
    ?>
    </section>
</body>
</html>