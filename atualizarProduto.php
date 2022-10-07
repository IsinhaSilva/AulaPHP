<?php

    include 'conexao.php';
    $id = $_POST['id'];

    $numeroProduto  = $_POST ['numeroProduto'];
    $nomeProduto    = $_POST ['nomeProduto'];
    $quantProduto   = $_POST ['quantProduto'];
    $catProduto     = $_POST ['catProduto'];
    $fonecedor      = $_POST ['fonecedor'];

    $sql = "UPDATE `produtos` SET `numeroProduto`=$numeroProduto,`nomeProduto`='$nomeProduto',`quantProduto`= $quantProduto, `catProduto`='$catProduto',`fonecedor`='$fonecedor' WHERE idProduto = $id";

    $atualizar = mysqli_query($conexao,$sql);

?>

<div class="container" style="width:300px; text-align: center; padding-top: 50px;">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <h4>Produto Atualizado com Sucesso!</h4>

    <div>
        <a href="listarProduto.php" role="button" class="btn btn-sm btn-secondary">Voltar</a>
    </div>
</div>