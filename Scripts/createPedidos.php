<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome_pedido = $_POST['nome_pedido'];
    $preco = $_POST['preco'];
    

    $sql = " INSERT INTO pedidos (nome_pedido,preco) VALUE ('$nome_pedido','preco')";

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
    <title>Fazer pedido</title>
</head>

<body>
    <h1>Cadastrar cliente</h1>

    <form method="POST" action="createPedidos.php">

        <label for="name">Produto:</label>
        <input type="text" name="name" required>

        <br>

        <label for="number">preco:</label>
        <input type="number" name="number" required>

        <br>

        <input type="submit" value="Adicionar">

    </form>

    <a href="">Ver registros.</a>

</body>

</html>