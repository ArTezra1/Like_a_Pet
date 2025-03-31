<?php

$dbHost = 'Localhost';
$dbUser = 'root';
$dbName = 'petshopp';
$dbPassword = '';
$tabelac = "tbl_clientes";
$tabelaa = "tbl_agendamentos";
$tabelaan = "tbl_animais";
$tabelap = "tbl_produtos";
$tabelav = "tbl_vendas";
$tabelae = "log_exclusao";

$conexao = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

// if($conexao->connect_errno){
//  echo "erro";
//  }else{
//  echo "conexao feita";}
