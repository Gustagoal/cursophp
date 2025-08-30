<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/style.css">
    <title>Formulario</title>
</head>
<body>
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post" autocomplete="off">
    <main>
        <label for="nome">Nome</label>
        <input type="text" name="nome" placeholder="nome">
        <br>
        <label for="idade">Idade</label>
        <input type="number" name="idade" placeholder="idade">
        <br>
        <input type="submit">
    </main>
    </form>
<div>
<?php 
    $nome = $_POST["nome"]??'';
    $idade = $_POST["idade"]??'';
    echo "O seu nome é $nome ";
    echo "<br>";
    echo "A sua idade é $idade";
?>
</div>
</body>
</html>