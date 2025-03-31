<?php 

include_once('../clientes/config.php'); 
// include_once('../clientes/testelogin.php');

session_start();

if(isset($_POST['submit'])){
    $email = $_SESSION['email'];
    $data = $_POST['data'];
    $id_cliente = $_POST['id_cliente'];
    $total = $_POST['total'];
    
    $sqluser = "SELECT id_clientes FROM $tabelac WHERE Email = $email ";
    
    $stmt = $conexao->prepare("SELECT id_clientes FROM $tabelac WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    
    $result = $stmt->get_result();
    
    $row = $result->fetch_assoc();
    $id_clientes = $row['id_clientes'];
    print_r($id_clientes);
        


    $result = mysqli_query($conexao, "INSERT  INTO $tabelav(Datas, id_clientes, Total) VALUES ('$data', '$id_cliente', '$total')");

    header('Location: consultar.php');
}
?>
