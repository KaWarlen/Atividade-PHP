<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 13</title>
</head>
<body>
   <?php 
   $globalVar = 100;

function testeEscopo() {
    $localVar = 50;
    echo "Local: $localVar<br>";
}

testeEscopo();
echo "Global: $globalVar<br>";

   
   
   ?> 
</body>
</html>