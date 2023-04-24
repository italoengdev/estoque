<!DOCTYPE html>
<html>
<head>
    <title>Lista de Clientes</title>
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
    <h1>Lista de Clientes</h1>
    <a href="frmcliente.php">Novo Cliente</a>
    <a href="index.php">Voltar</a>
    <table>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
        <tr>
            <td>João Silva</td>
            <td>joao.silva@example.com</td>
            <td><a href="editar_cliente.php?id=1">Editar</a></td>
            <td><a href="excluir_cliente.php?id=1">Excluir</a></td>
        </tr>
        <tr>
            <td>Maria Santos</td>
            <td>maria.santos@example.com</td>
            <td><a href="editar_cliente.php?id=2">Editar</a></td>
            <td><a href="excluir_cliente.php?id=2">Excluir</a></td>
        </tr>
        <tr>
            <td>Carlos Oliveira</td>
            <td>carlos.oliveira@example.com</td>
            <td><a href="editar_cliente.php?id=3">Editar</a></td>
            <td><a href="excluir_cliente.php?id=3">Excluir</a></td>
        </tr>
        <tr>
            <td>Laura Rodrigues</td>
            <td>laura.rodrigues@example.com</td>
            <td><a href="editar_cliente.php?id=4">Editar</a></td>
            <td><a href="excluir_cliente.php?id=4">Excluir</a></td>
        </tr>
        <tr>
            <td>Pedro Costa</td>
            <td>pedro.costa@example.com</td>
            <td><a href="editar_cliente.php?id=5">Editar</a></td>
            <td><a href="excluir_cliente.php?id=5">Excluir</a></td>
        </tr>
    </table>
</body>
</html>
