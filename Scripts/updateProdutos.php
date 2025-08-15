<?php

include 'db.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $quantidade_estoque = $_POST['quantidade_estoque'];

    $sql = "UPDATE produtos SET nome ='$nome',descricao ='$descricao',preco ='$preco',quantidade_estoque ='$quantidade_estoque' WHERE id=$id";

    if ($conn->query($sql) === true) {
        echo "Registro atualizado com sucesso.
        <a href='readProdutos.php'>Ver registros.</a>
        ";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
    exit(); 
}

$sql = "SELECT * FROM produtos WHERE id_produtos=$id";
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
    <h1>Update produtos</h1>
    <form method="POST" action="updateProdutos.php?id=<?php echo $row['id'];?>">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php echo $row['nome'];?>" required>

        <br>

        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" value="<?php echo $row['descricao'];?>" required>

        <br>

        <label for="preco">Preço:</label>
        <input type="number" name="preco" value="<?php echo $row['preco'];?>" required>

        <br>

        <label for="quantidade_estoque">Quantidade do estoque:</label>
        <input type="number" name="quantidade_estoque" value="<?php echo $row['quantidade_estoque'];?>" required>

        <br>

        <input type="submit" value="Atualizar">

    </form>

    <a href="readProdutos.php">Ver registros.</a>

</body>

</html>