<?php
// Conexão com o banco (contém erro de variável e de conexão)
$host = "localhost";
$user = "root";
$password = "root";
$db = "crud_exemplo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexao falhou: " . $conn->connect_error);
}
?>