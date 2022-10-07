<?php

include 'conexao.php';

$numeroProduto = $_POST ["numeroProduto"];
$nomeProduto   = $_POST ["nomeProduto"];
$quantProduto  = $_POST ["quantProduto"];
$catProduto    = $_POST ["catProduto"];
$fonecedor     = $_POST ["fonecedor"];

$sql = "INSERT INTO `produtos`(`numeroProduto`, `nomeProduto`, `quantProduto`, `catProduto`, `fonecedor`) 
VALUES ($numeroProduto,'$nomeProduto',$quantProduto,'$catProduto','$fonecedor')";

$inserir = mysqli_query($conexao, $sql);

?>

<div class="container" style="width: 300px; text-align:center; padding-top: 50px">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
 integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<h4>Produto cadastrado com sucesso</h4>

<div>
    <a href="index.php" role ="button" class="btn btn-secondary"> Cadastrar novo item</a>
</div>
</div>