<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['name'];
    $email = $_POST['email'];

    $sql = " INSERT INTO usuarios (name,email) VALUE ('$name','$email')";

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
    <link rel="stylesheet" href="../Styles/Style.css">
    <title>Cadastrar funcionario</title>
</head>

<body>
    <h1>Cadastrar funcionario</h1>
    <form method="POST" action="create.php">

        <label for="name">Nome:</label>
        <input type="text" name="name" required>

        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <br>

        <input type="submit" value="Adicionar">

    </form>

    <a href="readUsuarios.php">Ver registros.</a>

</body>

</html>