<!DOCTYPE html>
<html>
<head>
    <title>Lista de Produtos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<h1>Lista de Produtos</h1>
<a href="frmproduto.php">Novo produto</a>
<a href="index.php">Voltar</a>
<table>
    <tr>
        <th>Produto</th>
        <th>Preço</th>
        <th>Estoque</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>
    <tr>
        <td>Camiseta</td>
        <td>R$29.99</td>
        <td>50</td>
        <td><a href="editar_produto.php?id=1">Editar</a></td>
        <td><a href="excluir_produto.php?id=1">Excluir</a></td>
    </tr>
    <tr>
        <td>Calça Jeans</td>
        <td>R$89.99</td>
        <td>30</td>
        <td><a href="editar_produto.php?id=2">Editar</a></td>
        <td><a href="excluir_produto.php?id=2">Excluir</a></td>
    </tr>
    <tr>
        <td>Sapato</td>
        <td>R$149.99</td>
        <td>20</td>
        <td><a href="editar_produto.php?id=3">Editar</a></td>
        <td><a href="excluir_produto.php?id=3">Excluir</a></td>
    </tr>
    <tr>
        <td>Bolsa</td>
        <td>R$59.99</td>
        <td>40</td>
        <td><a href="editar_produto.php?id=4">Editar</a></td>
        <td><a href="excluir_produto.php?id=4">Excluir</a></td>
    </tr>
    <tr>
        <td>Óculos de Sol</td>
        <td>R$79.99</td>
        <td>15</td>
        <td><a href="editar_produto.php?id=5">Editar</a></td>
        <td><a href="excluir_produto.php?id=5">Excluir</a></td>
    </tr>
</table>
</body>
</html>