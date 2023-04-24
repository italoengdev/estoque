<!DOCTYPE html>
<html lang="">
<head>
    <title>Cadastro de Cliente</title>
</head>
<body>
<h1>Cadastro de Cliente</h1>
<form action="op_cliente.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required>
    <br>
    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" required>
    <br>
    <input type="submit" value="Cadastrar">
</form>
<a href="index.php">Voltar</a>
</body>
</html>