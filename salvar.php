<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    require 'validacoes.php';

    form_nao_enviado('Forms não foi enviado');
    ha_campos_em_branco('Existe campos em branco');

    require 'conexao.php';
 
    $nomeProduto = $_POST['nomeProduto'];
    $quantidade = $_POST['quantidade'];
    $preco = str_replace(',', '.', $_POST['preco']);
    $preco = floatval($preco);

    $sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    verificar_erro_stmt($stmt);
    mysqli_stmt_bind_param($stmt, "sdi",  $nomeProduto, $preco, $quantidade );


    if (mysqli_stmt_execute($stmt)) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
  

    mysqli_close($conn);
    header("Location: listar.php");

?>
    
</body>
</html>