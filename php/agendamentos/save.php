<?php 

include_once('../clientes/config.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $id_clientes = $_POST['clientes'];
    $id_animais = $_POST['animal'];

    $sqlUptade = "UPDATE 
    $tabelaa SET Datas='$data', Hora='$hora', id_clientes='$id_clientes', id_animais='$id_animais' WHERE id_agendamentos='$id'";

    $result = $conexao->query($sqlUptade);
}

header('Location: consultar.php');

?>