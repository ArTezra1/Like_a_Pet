<?php
session_start();
include_once('config.php');

$sqle = "SELECT registro, excluido_em FROM log_exclusao WHERE tabela = '$tabelac' ORDER BY id DESC";
$resulte = $conexao->query($sqle);

// print_r($_SESSION);

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
} else {
    $logado = $_SESSION['email'];
}

$sql = "SELECT * FROM tbl_clientes ORDER BY id_clientes DESC";

$result = $conexao->query($sql);

// print_r($result);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sistema</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, red, purple);
            
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: space-between;
            padding: 0px 20px;
            background: white;
            align-items: center;
            text-align: center;
            border-radius: 20px;
            margin-top: 30px;
        }

        button {
            padding: 10px;
            border-radius: 10px;
            border: 1px solid blue;
            background: black;
            color: white;
            width: 120px;
            height: 40px;
            font-size: 20px;
            font-weight: 600;
            transition: 0.2s;
        }

        button:hover {
            transform: scale(1.1);
        }

        h1 {
            display: inline-block;
            background: white;
            border-radius: 10px;
            padding: 10px;
        }

        .acess {
            margin-top: 30px;
            font-size: 24px;
            font-weight: 500;
            color: white;
        }

        span {
            background: none;
            text-decoration: underline;
        }

        th {
            background: none;
            border: 1px solid black;
        }

        td {
            background: white;
            border: 1px solid black;
        }

        .btn{
            background: blue;
        }

        svg{
            background: blue;
        }
        
    </style>
</head>

<body>
    <nav class="m-3">
        <h1>Acessou</h1>
        <div>
        <a href="../agendamentos/consultar.php"><button class="btn btn-primary">Agendamento</button></a>
        <a href="../animais/consultar.php"><button class="btn btn-primary">Animais</button></a>
        <a href="../produtos/consultar.php"><button class="btn btn-primary">Produtos</button></a>
        <a href="../vendas/consultar.php"><button class="btn btn-primary">Vendas</button></a>
        </div>
        <a href="sistema.php"><button class="btn btn-primary">Clientes</button></a>
        </div>
        <div>
            <a href="homelog.php"><button class="btn btn-primary">Voltar ao site</button></a>
            <a href="sair.php"><button class="btn btn-primary">Sair</button></a>
        </div>
    </nav>

    <div class="acess">
        <?php

        echo 'Bem vindo: ' . '<span>' . $_SESSION['email'] . '</span>';

        ?>
    </div>

    <div class="m-3 maca">
        <table class="table">
            <h1>Tabela de Exclusão</h1>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">email</th>
                    <th scope="col">Senha</th>
                </tr>
            </thead>
            <tbody>
                <?php

while ($row = $resulte->fetch_assoc()) {

                    $registro = json_decode($row['registro'], true);
                    echo "<tr>";
                    echo "<td>" . $registro['id_c'] . "</td>";
                    echo "<td>" . $registro['nome'] . "</td>";
                    echo "<td>" . $registro['endereço'] . "</td>";
                    echo "<td>" . $registro['telefone'] . "</td>";
                    echo "<td>" . $registro['email'] . "</td>";
                    echo "<td>" . $registro['senha'] . "</td>";
                    
                    echo "</tr>";
                }

                ?>
            </tbody>
        </table>
    </div>
</body>

</html>