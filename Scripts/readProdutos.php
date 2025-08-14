<?php

include 'db.php';

$sql = "SELECT * FROM pedidos";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table border ='1'>
        <tr>
            <th> ID </th>
            <th> Nome </th>
            <th> Preço </th>
            <th> Ações </th>
        </tr>
         ";

    while ($row = $result->fetch_assoc()) {

        echo "<tr>
                <td> {$row['id']} </td>
                <td> {$row['nome_pedido']} </td>
                <td> {$row['preco']} </td>
                <td> 
                    <a href='updatePedidos.php?id={$row['id']}'>Editar<a>
                    <a href='deletePedidos.php?id={$row['id']}'>Excluir<a>
                
                </td>
              </tr>   
        ";
    }
    echo "</table>";
} else {
    echo "Nenhum registro encontrado.";
}

$conn -> close();

echo "<a href='createPedidos.php'>Inserir novo Cadastro</a>";
echo "<a href='../Public/paginaInicial.html'>Voltar para o menu</a>";
?>