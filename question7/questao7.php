<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao7</title>
</head>
<body>
    <?php 
    $verdadeiro = true;
    $falso = false;
    $e = $verdadeiro && $falso;
    $ou = $verdadeiro || $falso;
    $nao = !$verdadeiro;

    echo"<br>operação com E: " . ($e ? "Verdadeiro": "Falso");
    echo"<br>operação com Ou: " . ($ou ? "Verdadeiro": "Falso");
    echo"<br>operação com não (negando o verdadeiro) " . ($nao ? "Verdadeiro": "Falso");
    ?>
</body>
</html>