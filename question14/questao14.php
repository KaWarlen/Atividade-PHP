<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 14</title>
</head>
<body>
<?php     
function contador() {
    static $x = 0;
    $x++;
    echo "$x<br>";
}

contador(); // 1
contador(); // 2
contador(); // 3

    
?>
</body>
</html>