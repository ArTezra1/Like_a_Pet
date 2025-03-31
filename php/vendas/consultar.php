<?php

include_once('../clientes/config.php');

$result = mysqli_query($conexao, "SELECT id_vendas, Datas, id_clientes, id_produto ,Total FROM $tabelav");


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
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
        <a href="../clientes/sistema.php"><button class="btn btn-primary">Clientes</button></a>
        <a href="../produtos/consultar.php"><button class="btn btn-primary">Produtos</button></a>
        </div>
        <div>
            <a href="homelog.php"><button class="btn btn-primary">Voltar ao site</button></a>
            <a href="sair.php"><button class="btn btn-primary">Sair</button></a>
        </div>
    </nav>

    <div class="m-3 maca">
        <h1>Tabela de Vendas</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id da Venda</th>
                    <th scope="col">Data</th>
                    <th scope="col">Id do Cliente</th>
                    <th scope="col">Id do Produto</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php

                while ($user_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['id_vendas'] . "</td>";
                    echo "<td>" . $user_data['Datas'] . "</td>";
                    echo "<td>" . $user_data['id_clientes'] . "</td>";
                    echo "<td>" . $user_data['id_produto'] . "</td>";
                    echo "<td>" . $user_data['Total'] . "</td>";
                    echo "<td>
                    <a class='btn btn-primary' href='edit.php?id=$user_data[id_vendas]'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
  <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z'/>
</svg></a>

<a class='btn btn-primary' href='delete.php?id=$user_data[id_vendas]'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
  <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
</svg>
                    </a>
                    </td>";
                    echo "</tr>";
                }

                ?>
            </tbody>
        </table>
    </div>
</body>

</html>