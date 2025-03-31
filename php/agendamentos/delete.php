<?php 

include_once('../clientes/config.php');

    $id = $_GET['id'];

    $sqlselect = "SELECT * FROM tbl_agendamentos WHERE id_agendamentos = $id";

    $result = $conexao->query($sqlselect);

    if($result->num_rows > 0){
        $sqldelete = "DELETE FROM $tabelaa WHERE id_agendamentos = $id";
    $resultdelete = $conexao->query($sqldelete);
    };

    header("Location: consultar.php");
?>