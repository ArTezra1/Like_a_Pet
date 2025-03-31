<?php 

include_once('../clientes/config.php');

    $id = $_GET['id'];

    $sqlselect = "SELECT * FROM $tabelaan WHERE id_animais = $id";

    $result = $conexao->query($sqlselect);

    if($result->num_rows > 0){
        $sqldelete = "DELETE FROM $tabelaan WHERE id_animais = $id";
    $resultdelete = $conexao->query($sqldelete);
    };

    header("Location: consultar.php");


?>