<?php

include 'db.php';

$sql = "SELECT * FROM usuarios";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table border ='1'>
        <tr>
            <th> ID </th>
            <th> Nome </th>
            <th> Email </th>
            <th> Data de Criação </th>
            <th> Ações </th>
        </tr>
         ";

    while ($row = $result->fetch_assoc()) {

        echo "<tr>
                <td> {$row['id_usuarios']} </td>
                <td> {$row['name']} </td>
                <td> {$row['email']} </td>
                <td> {$row['created_at']} </td>
                <td> 
                    <a href='updateUsuarios.php?id_usuarios={$row['id_usuarios']}'>Editar<a>
                    <a href='deleteUsuarios.php?id_usuarios={$row['id_usuarios']}'>Excluir<a>
                
                </td>
              </tr>   
        ";
    }
    echo "</table>";
} else {
    echo "Nenhum registro encontrado.";
}

$conn -> close();

echo "<a href='createUsuarios.php'>Inserir novo Cadastro</a>";
echo "<a href='../Public/paginaInicial.html'>Voltar para o menu</a>";
?>