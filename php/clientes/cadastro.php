<?php 

if(isset($_POST['submit'])){
  
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    

    // print_r($nome);
    // echo "<br>";
    // print_r($email);
    // echo "<br>";
    // print_r($senha);
    // echo "<br>";
    // print_r($telefone);
    // echo "<br>";
    // print_r($endereco);
    // echo "<br>";
    


    $result = mysqli_query($conexao, "INSERT  INTO tbl_clientes(Nome, Email, Senha, Telefone, Endereço) VALUES ('$nome', '$email', '$senha', '$telefone', '$endereco')");

    header('Location: indexlogin.php');
}
?>