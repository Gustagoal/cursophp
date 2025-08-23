<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do formulario</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "Desconhecido";
            $sobrenome = $_GET["sobrenome"] ?? "Desconhecido";
            echo "Seja em vindo $nome $sobrenome";

        ?>
    </main>
</body>
</html>