<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <h1>Cadastro de Produto</h1>
        <form action="salvar.php" method="post">
            <label for="nomeProduto">Nome do produto:</label>
            <input type="text" name="nomeProduto" id="nomeProduto" required>

            <label for="preco">Preço:</label>
            <input type="number" name="preco" id="preco" required min="0" value="0" step=".01">

            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade" required>

            <button type="submit">Enviar</button>
        </form>

        

</body>
</html>