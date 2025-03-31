<?php 

include_once('config.php');

    $id = $_GET['id'];

    $sqlselect = "SELECT * FROM log_exclusao WHERE id = $id";

    

    $result = $conexao->query($sqlselect);

    if($result->num_rows > 0){
        $sqldelete = "DELETE FROM $tabelae WHERE id = $id";

    $resultdelete = $conexao->query($sqldelete);
    };

    header("Location: log.php");


?>