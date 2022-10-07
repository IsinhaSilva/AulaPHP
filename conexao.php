<?php

$servename = "localhost";
$ursename = "root";
$password = "root";
$database = "lojainformatica";

$conexao = mysqli_connect( $servename, $ursename, $password, $database);
mysqli_set_charset($conexao,"utf8");

?>