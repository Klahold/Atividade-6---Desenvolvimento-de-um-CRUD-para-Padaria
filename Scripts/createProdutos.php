<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $quantidade_estoque = $_POST['quantidade_estoque'];
    

    $sql = " INSERT INTO produtos  (nome,descricao,preco,quantidade_estoque) VALUE ('$nome','$descricao','$quantidade_estoque','$preco')";

    
    if ($conn->query($sql) === true) {
        echo "Novo registro criado com sucesso.";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
}

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fazer produtos</title>
</head>

<body>
    <h1>Cadastrar Produtos</h1>

    <form method="POST" action="createProdutos.php">

        <label for="name">Produto:</label>
        <input type="text" name="name" required>

        <br>

        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" required>

        <br>

        <label for="preco">preco:</label>
        <input type="number" name="preco" required>

        <br>

        <label for="quantidade">Quantidade no estoque:</label>
        <input type="number" name="quantidade" required>

        <br>

        <input type="submit" value="Adicionar">

    </form>

    <a href="">Ver Produtos.</a>

</body>

</html>