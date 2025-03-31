<?php 

include_once('../clientes/config.php');
// include_once('../clientes/testelogin.php');

session_start();

if(isset($_POST['submit'])){

    $email = $_SESSION['email'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];

    $sqluser = "SELECT id_clientes FROM $tabelac WHERE Email = $email ";

    /*CLIENTES*/
    $stmt = $conexao->prepare("SELECT id_clientes FROM $tabelac WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    
    $result = $stmt->get_result();
    
    $row = $result->fetch_assoc();
    $id_clientes = $row['id_clientes'];
    // print_r($id_clientes);
    /*ANIMAIS*/

    $stma = $conexao->prepare("SELECT id_animais FROM $tabelaan WHERE id_clientes = ?");
    $stma->bind_param("i", $id_clientes);
    $stma->execute();

    $resultado = $stma->get_result();

    $rowan = $resultado->fetch_assoc();
    $id_animais = $rowan['id_animais'];
    // print_r($id_animais);

    $inserir = mysqli_query($conexao, "INSERT  INTO $tabelaa(Datas, Hora, id_clientes, id_animais) VALUES ('$data', '$hora', '$id_clientes', $id_animais)");

    header('Location: ../clientes/homelog.php');   
}

?>