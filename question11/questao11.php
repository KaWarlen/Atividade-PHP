<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao11</title>
</head>
<body>
<?php 

$alunos = [
    "Pedro" => ["matematica" => 8, "portugues" => 7],
    "Maria" => ["matematica" => 9, "portugues" => 10]
];
echo $alunos["Maria"]["portugues"];
?>    
</body>
</html>