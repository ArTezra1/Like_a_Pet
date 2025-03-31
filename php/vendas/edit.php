<?php 
session_start();
if(!empty($_GET['id'])){
    include_once('../clientes/config.php');

    $id = $_GET['id'];

    $sqlselect = "SELECT * FROM $tabelav WHERE id_vendas = $id";
    $result = $conexao->query($sqlselect);
    
    if($result->num_rows > 0){
        while($user_data = $result->fetch_assoc()){
            $email = $_SESSION['email'];
            $id_c_query = "SELECT id_clientes FROM $tabelac WHERE Email = '$email'";
            $id_clientes_result = $conexao->query($id_c_query);
            if ($id_clientes_result->num_rows > 0) {
                $id_clientes_data = $id_clientes_result->fetch_assoc();
                $id_clientes = $id_clientes_data['id_clientes'];
            }
            $data = $user_data['Datas'];
            $total = $user_data['Total'];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, red, purple);
            text-decoration: none;
            text-align: center;
        }
        form{
            background: black;
            color: white;
            border-radius: 10px;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }
        label{
            display: inline-block;
            background: black;
        }
        input{
            margin-top: 10px;
            margin-bottom: 10px;
            background: white;
            padding: 10px;
            border-radius: 10px;
        }
        a{
            display: inline-block;
            background: black;
            padding: 10px;
            color: white;
            border-radius: 10px 10px 0px 0px;
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <h1>Cadastro</h1>

    <a href="consultar.php">Voltar</a>

    <form action="save.php" method="POST">
        <label for="id_vendas">Id da venda</label>
        <input type="text" name="id_vendas" id="id_vendas" value="<?php echo $id ?>">

        <label for="data">Data da venda</label>
        <input type="text" name="data" id="data" value="<?php echo $data ?>">

        <label for="id_clientes">Id do cliente</label>
        <input type="text" name="id_clientes" id="id_clientes" value="<?php echo $id_clientes ?>">

        <label for="total">Total</label>
        <input type="text" name="total" id="total" value="<?php echo $total ?>">

        <input type="hidden" name="id" value="<?php echo $id ?>">

        <input type="submit" name="update" id="update">
    </form>
</body>
</html>
