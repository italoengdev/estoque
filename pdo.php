<?php
  $servidor = "localhost";
  $banco = "metodoagora_estoque";
  $usuario = "root";
  $senha = "";
  try {
    $conn = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão ok";
  } catch(PDOException $e) {
    echo "Conexão falhou: " . $e->getMessage();
  }
?>