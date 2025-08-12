<?php
// Conexão com o banco (contém erro de variável e de conexão)
$host = "localhost";
$user = "root";
$password = "root";
$db = "crud_exemplo";

$conn = mysqli_connect($hot, $user, $password, $db); // Erro: $hot ao invés de $host

if ($conn->connect_error) {
    die("Conexao falhou: " . $conn->connect_error);
}
?>