<?php

include 'db.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['nome_pedido'];
    $preco = $_POST['preco'];

    $sql = "UPDATE pedidos SET nome_pedido ='$name',preco ='$preco' WHERE id=$id";

    if ($conn->query($sql) === true) {
        echo "Registro atualizado com sucesso.
        <a href='readPedidos.php'>Ver registros.</a>
        ";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
    exit(); 
}

$sql = "SELECT * FROM pedidos WHERE id=$id";
$result = $conn -> query($sql);
$row = $result -> fetch_assoc();


?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>

<body>
    <h1>Update pedidos</h1>
    <form method="POST" action="update.php?id=<?php echo $row['id'];?>">

        <label for="name">Nome:</label>
        <input type="text" name="name" value="<?php echo $row['name'];?>" required>

        <br>

        <label for="preco">Email:</label>
        <input type="number" name="preco" value="<?php echo $row['preco'];?>" required>

        <br>

        <input type="submit" value="Atualizar">

    </form>

    <a href="read.php">Ver registros.</a>

</body>

</html>