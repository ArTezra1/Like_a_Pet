<?php 

include_once('../clientes/config.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $categ = $_POST['categ'];
    $preco = $_POST['preco'];

    $sqlUptade = "UPDATE 
    tbl_produtos SET Nome='$nome', Categoria='$categ', Preço='$preco' WHERE id_produtos='$id'";

    $result = $conexao->query($sqlUptade);
}

header('Location: consultar.php');

?>