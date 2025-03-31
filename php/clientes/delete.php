<?php 

include_once('config.php');

    $id = $_GET['id'];

    $sqlselect = "SELECT * FROM tbl_clientes WHERE id_clientes = $id";

    

    $result = $conexao->query($sqlselect);

    if($result->num_rows > 0){
        $sqldelete = "DELETE FROM $tabelac WHERE id_clientes = $id";

        $sqlbackup = "INSERT INTO $tabelae(tabela, registro) SELECT '$tabelac', JSON_OBJECT(
        'id_c', id_clientes,
        'nome', Nome,
        'endereço', Endereço,
        'telefone', Telefone,
        'email', Email,
        'senha', Senha
        ) FROM tbl_clientes WHERE id_clientes = $id";

    $resultback = $conexao->query($sqlbackup);

    $resultdelete = $conexao->query($sqldelete);
    };

    header("Location: sistema.php");


?>