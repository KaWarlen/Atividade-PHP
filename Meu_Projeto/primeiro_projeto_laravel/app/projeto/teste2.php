<?php

require_once 'fisico/produto.php';
require_once 'digital/produto.php';

use fisico\produto as ProdutoFisico;
use digital\produto as ProdutoDigital;

$p1 = new ProdutoFisico();
echo $p1->tipo();

echo "\n";

$p2 = new ProdutoDigital();
echo $p2->tipo();
