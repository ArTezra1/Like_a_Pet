<?php 

include_once('../clientes/config.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $data = $_POST['data'];
    $id_clientes = $_POST['id_clientes'];
    $total = $_POST['total'];

    $sqlUptade = "UPDATE 
    $tabelav SET Datas='$data', id_clientes='$id_clientes', Total='$total' WHERE id_vendas='$id'";

    $result = $conexao->query($sqlUptade);
}

header('Location: consultar.php');

?>