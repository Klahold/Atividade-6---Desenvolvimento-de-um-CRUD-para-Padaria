<?php

include 'db.php';
$id = $_GET['id'];

$sql = " DELETE FROM produtos WHERE id=$id ";

if ($conn->query($sql) === true) {
    echo "Registro excluído com sucesso.
        <a href='readProdutos.php'>Ver Produtos.</a>
        ";
} else {
    echo "Erro " . $sql . '<br>' . $conn->error;
}
$conn -> close();
exit();