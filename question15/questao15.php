<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 15</title>
</head>
<body>
    <?php 
    class Carro {
    public $modelo;
    public $cor;

    public function dirigir() {
        return "O carro está em movimento.";
    }
}

$carro = new Carro();
$carro->modelo = "Fusca";
$carro->cor = "Azul";

echo $carro->modelo . "<br>";
echo $carro->dirigir() . "<br>"; 
    ?>
</body>
</html>