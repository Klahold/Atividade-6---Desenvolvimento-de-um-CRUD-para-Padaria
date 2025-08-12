<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome_pedido = $_POST['nome_pedido'];
    $preco = $_POST['preco'];

    $sql = " INSERT INTO pedidos (nome_pedido,preco) VALUE ('$nome_pedido','$preco')";

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
    <title>Create</title>
</head>

<body>

    <form method="POST" action="create.php">

        <label for="name">produto:</label>
        <input type="text" name="name" required>

        <label for="number">preço:</label>
        <input type="number" name="number" required>

        <input type="submit" value="Adicionar">

    </form>

    <a href="read.php">Ver registros.</a>

</body>

</html>