<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao6</title>
</head>
<body>
    <?php 
    $valor_int = 10;
    $valor_string = "10";

    if ($valor_int === $valor_string) {
        echo "<br> O valor é o mesmo em tipo e númericamente";
    }
    if ($valor_int == $valor_string) {
        echo "<br> Valor é o mesmo em Numeros";
    }
    if ($valor_int != $valor_string) {
        echo "<br> O valor é diferente númericamente";
    }
    if ($valor_int !== $valor_string) {
        echo "<br> O valor é diferente em numero e/ou tipo";
    }
    else {
        echo "Complicado";
    }
    ?>
</body>
</html>