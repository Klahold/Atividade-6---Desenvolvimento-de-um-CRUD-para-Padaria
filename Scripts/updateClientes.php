<?php

include 'db.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = "UPDATE clientes SET name ='$name',email ='$email',telefone ='$telefone' WHERE id=$id";

    if ($conn->query($sql) === true) {
        echo "Registro atualizado com sucesso.
        <a href='readClientes.php'>Ver registros.</a>
        ";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
    exit(); 
}

$sql = "SELECT * FROM clientes WHERE id=$id";
$result = $conn -> query($sql);
$row = $result -> fetch_assoc();


?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update cliente</title>
</head>

<body>
    <h1>Update cliente</h1>

    <form method="POST" action="updateClientes.php?id=<?php echo $row['id'];?>">

        <label for="name">Nome:</label>
        <input type="text" name="name" value="<?php echo $row['name'];?>" required>

        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $row['email'];?>" required>

        <br>

        <label for="telefone">Telefone:</label>
        <input type="tel" name="telefone" value="<?php echo $row['telefone'];?>" required>

        <br>

        <input type="submit" value="Atualizar">

    </form>

    <a href="readClientes.php">Ver registros.</a>

</body>

</html>