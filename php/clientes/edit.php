<?php 

if(!empty($_GET['id'])){
  
    include_once('config.php');

    $id = $_GET['id'];

    $sqlselect = "SELECT * FROM tbl_clientes WHERE id_clientes = $id";

    $result = $conexao->query($sqlselect);

    if($result->num_rows > 0){
       while($user_data = mysqli_fetch_assoc($result)){
        $nome = $user_data['Nome'];
        $email = $user_data['Email'];
        $senha = $user_data['Senha'];
       }
    //    print_r($nome);
    //    print_r($email);
    //    print_r($senha);
    }else{
        header('Location: sistema_clientes.php');
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

    <a href="sistema.php">
        voltar
    </a>

    <form action="save.php" method="POST">
        <label for="nome"> nome</label>
        <input type="text" name="nome" id="nome" value="<?php echo $nome ?>">

        <label for="email">email</label>
        <input type="email" name="email" id="email" value="<?php echo $email ?>">

        <label for="senha">senha</label>
        <input type="password" name="senha" id="senha" value="<?php echo $senha ?>">

        <input type="hidden" name="id" value="<?php echo $id ?>">

        <input type="submit" name="update" id="update">
    </form>
</body>
</html>