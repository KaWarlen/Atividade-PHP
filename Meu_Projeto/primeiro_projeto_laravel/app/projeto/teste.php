<?php
require_once 'produtos/produto.php';

use Produtos\Produtos;

$produto = new Produtos();
$produto->mostrar();