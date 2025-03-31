<?php 

include_once('config.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sqlUptade = "UPDATE 
    tbl_clientes SET Nome='$nome', Email='$email', senha='$senha' WHERE id_clientes='$id'";

    $result = $conexao->query($sqlUptade);
}

header('Location: sistema.php');

?>