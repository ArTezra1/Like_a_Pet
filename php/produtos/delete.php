<?php 

include_once('../clientes/config.php');

    $id = $_GET['id'];

    $sqlselect = "SELECT * FROM tbl_produtos WHERE id_produtos = $id";

    $result = $conexao->query($sqlselect);

    if($result->num_rows > 0){
        $sqldelete = "DELETE FROM $tabelap WHERE id_produtos = $id";
    $resultdelete = $conexao->query($sqldelete);
    };

    header("Location: consultar.php");
?>