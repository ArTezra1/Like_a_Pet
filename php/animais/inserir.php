<?php 

include_once('../clientes/config.php'); 
// include_once('../clientes/testelogin.php');

session_start();

if(isset($_POST['submit'])){
  
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $peso = $_POST['peso'];
    $email = $_SESSION['email'];    
    
    $sqluser = "SELECT id_clientes FROM $tabelac WHERE Email = $email ";
    
    $stmt = $conexao->prepare("SELECT id_clientes FROM $tabelac WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    
    $result = $stmt->get_result();
    
    $row = $result->fetch_assoc();
    $id_clientes = $row['id_clientes'];
    print_r($id_clientes);
        


    $result = mysqli_query($conexao, "INSERT  INTO $tabelaan(Nome, Tipo, Peso, id_clientes) VALUES ('$nome', '$tipo', '$peso', '$id_clientes')");

    header('Location: ../clientes/homelog.php');
}
?>
