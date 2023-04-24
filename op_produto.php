<?php

$produto = $_POST["produto"];
$preco = $_POST["preco"];
$estoque = $_POST["estoque"];


echo "Nome do Produto: " . $produto;
echo "<br>Preço do Produto: " . $preco;
echo "<br>Estoque: " . $estoque;

echo "<br><a href='index.php'>Voltar</a>";

