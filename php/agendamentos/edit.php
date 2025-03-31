<?php 

if(!empty($_GET['id'])){
  
    include_once('../clientes/config.php');

    $id = $_GET['id'];

    $sqlselect = "SELECT * FROM tbl_agendamentos WHERE id_agendamentos = $id";

    $result = $conexao->query($sqlselect);

    if($result->num_rows > 0){
       while($user_data = mysqli_fetch_assoc($result)){
        $data = $user_data['Datas'];
        $hora = $user_data['Hora'];
        $id_cliente = $user_data['id_clientes'];
        $id_animal = $user_data['id_animais'];
       }
    //    print_r($nome);
    //    print_r($email);
    //    print_r($senha);
    }else{
        header('Location: consultar.php');
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
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

    <a href="consultar.php">
        voltar
    </a>

    <form action="save.php" method="POST">
        <label for="data"> data</label>
        <input type="text" name="data" id="data" value="<?php echo $data ?>">

        <label for="hora">hora</label>
        <input type="text" name="hora" id="hora" value="<?php echo $hora ?>">

        <label for="clientes">id_cliente</label>
        <input type="text" name="clientes" id="clientes" value="<?php echo $id_cliente ?>">

        <label for="animal">id_aniamal</label>
        <input type="text" name="animal" id="animal" value="<?php echo $id_animal ?>">

        <input type="hidden" name="id" value="<?php echo $id ?>">

        <input type="submit" name="update" id="update">
    </form>
</body>
</html>