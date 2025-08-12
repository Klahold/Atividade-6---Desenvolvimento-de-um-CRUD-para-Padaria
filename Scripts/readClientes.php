<?php

include 'db.php';

$sql = "SELECT * FROM clientes";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table border ='1'>
        <tr>
            <th> ID </th>
            <th> Nome </th>
            <th> Email </th>
            <th> Telefone </th>
            <th> Data de Criação </th>
            <th> Ações </th>
        </tr>
         ";

    while ($row = $result->fetch_assoc()) {

        echo "<tr>
                <td> {$row['id']} </td>
                <td> {$row['name']} </td>
                <td> {$row['email']} </td>
                <td> {$row['telefone']} </td>
                <td> {$row['created_at']} </td>
                <td> 
                    <a href='updateClientes.php?id={$row['id']}'>Editar<a>
                    <a href='deleteClientes.php?id={$row['id']}'>Excluir<a>
                
                </td>
              </tr>   
        ";
    }
    echo "</table>";
} else {
    echo "Nenhum registro encontrado.";
}

$conn -> close();

echo "<a href='createClientes.php'>Inserir novo Cadastro</a>";
echo "<a href='../Public/paginaInicial.html'>Voltar para o menu</a>";