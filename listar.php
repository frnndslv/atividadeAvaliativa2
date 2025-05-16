<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    require 'conexao.php';
    $sql = "SELECT id, nome, preco, quantidade FROM produtos";
    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        echo "<table border='1' cellpadding='8'>";
        echo "<tr><th>ID</th><th>Nome</th><th>Preço</th><th>Quantidade</th></tr>";

        // Loop para exibir os dados
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $linha['id'] . "</td>";
            echo "<td>" . $linha['nome'] . "</td>";
            echo "<td>" . $linha['preco'] . "</td>";
            echo "<td>" . $linha['quantidade'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Nenhum produto foi encontrado.";
    }

    mysqli_close($conn);
?>
    
</body>
</html>