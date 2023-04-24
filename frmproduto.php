<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Produto</title>
</head>
<body>
<h1>Cadastro de Produto</h1>
<form action="op_produto.php" method="post">
    <label for="nome">Nome do Produto:</label>
    <input type="text" name="produto" id="produto" required>
    <br>
    <label for="preco">Preço:</label>
    <input type="number" name="preco" id="preco" step="0.01" required>
    <br>
    <label for="estoque">Estoque:</label>
    <input type="number" name="estoque" id="estoque" required>
    <br>
    <input type="submit" value="Cadastrar">
</form>
<a href="index.php">Voltar</a>
</body>
</html>
