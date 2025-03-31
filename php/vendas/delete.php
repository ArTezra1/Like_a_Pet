<?php 

include_once('../clientes/config.php');

    $id = $_GET['id'];

    $sqlselect = "SELECT * FROM $tabelav WHERE id_vendas = $id";

    $result = $conexao->query($sqlselect);

    if($result->num_rows > 0){
        $sqldelete = "DELETE FROM $tabelav WHERE id_vendas = $id";
    $resultdelete = $conexao->query($sqldelete);
    };

    header("Location: consultar.php");


?>