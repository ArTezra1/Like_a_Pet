<?php 

// print_r($_REQUEST)

session_start();

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
    //acessa a página caso esteja logado
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // print_r($email);
    // print_r('<br>');
    // print_r($senha);

    $sql = "SELECT * FROM tbl_clientes WHERE email = '$email' AND senha = '$senha'";

    $result = $conexao->query($sql);

    // print_r($result);
    // print_r($sql);

    if(mysqli_num_rows($result) < 1){
        // print_r('Não existe!');
        unset($_SESSION['email']);
        unset($_SESSION['senha']);

        header('Location: indexlogin.php');
    }else{
        // print_r('existe!');
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: homelog.php');
    }

}else{
    //nega o acesso na página caso não exista login
    header('Location: indexlogin.php');
}

?>