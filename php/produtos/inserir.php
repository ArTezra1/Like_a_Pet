<?php 

include_once('../clientes/config.php'); 

if(isset($_POST['submit'])){
  
    include_once('../clientes/config.php');

    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];
    $imagem = $_FILES['imagem'];  
    

  


    $result = mysqli_query($conexao, "INSERT  INTO $tabelap(Nome, Categoria, Preço, Quantidade_Estoque, imagem) VALUES ('$nome', '$categoria', '$preco', '$estoque', '$imagem')");

    header('Location: ../clientes/homelog.php');
}
?>
