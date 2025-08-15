<?php

include 'db.php';
$id = $_GET['id_clientes'];

$sql = " DELETE FROM clientes WHERE id_clientes=$id ";

if ($conn->query($sql) === true) {
    echo "Registro excluído com sucesso.
        <a href='readClientes.php'>Ver registros.</a>
        ";
} else {
    echo "Erro " . $sql . '<br>' . $conn->error;
}
$conn -> close();
exit();