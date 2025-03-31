<?php 

include_once('../clientes/config.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nome = $_POST['Nome'];
    $tipo = $_POST['Tipo'];
    $peso = $_POST['Peso'];

    $sqlUptade = "UPDATE 
    $tabelaan SET Nome='$nome', Tipo='$tipo', Peso='$peso' WHERE id_animais='$id'";

    $result = $conexao->query($sqlUptade);
}

header('Location: consultar.php');

?>