<?php 

session_start();
if(!empty($_GET['id'])){
  
    include_once('../clientes/config.php');

    $id = $_GET['id'];
    $email = $_SESSION['email'];


    $stmt = $conexao->prepare("SELECT id_clientes FROM $tabelac WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    
    $resulta = $stmt->get_result();
    
    $row = $resulta->fetch_assoc();
    $id_clientes = $row['id_clientes'];

    /*ANIMAIS*/
    $sqlselect = "SELECT * FROM $tabelaan WHERE id_animais = $id";

    $result = $conexao->query($sqlselect);
    
    $stma = $conexao->prepare("SELECT id_animais FROM $tabelaan WHERE id_clientes = ?");
    $stma->bind_param("i", $id_clientes);
    $stma->execute();

    $resultado = $stma->get_result();

    $rowan = $resultado->fetch_assoc();
    $id_animal = $rowan['id_animais'];

    if($result->num_rows > 0){
       while($user_data = mysqli_fetch_assoc($result)){
        $id_animais = $id_animal;
        $nome = $user_data['Nome'];
        $tipo = $user_data['Tipo'];
        $peso = $user_data['Peso'];
       }
    //    print_r($nome);
    //    print_r($email);
    //    print_r($senha);
    }else{
        header('Location: ../clientes/sistema.php');
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

    <a href="../clientes/sistema.php">
        voltar
    </a>

    <form action="save.php" method="POST">
        <label for="nome">Id do cliente</label>
        <input type="text" name="nome" id="nome" value="<?php echo $id_clientes ?>">

        <label for="nome">Nome do Animal</label>
        <input type="text" name="nome" id="nome" value="<?php echo $nome ?>">

        <label for="tipo">Tipo do Animal</label>
        <input type="text" name="tipo" id="tipo" value="<?php echo $tipo ?>">

        <label for="peso">Peso do Animal</label>
        <input type="text" name="peso" id="peso" value="<?php echo $peso ?>">

        <label for="id">Id do animal</label>
        <input type="number" name="id" value="<?php echo $id_animal ?>">

        <input type="submit" name="update" id="update">
    </form>
</body>
</html>