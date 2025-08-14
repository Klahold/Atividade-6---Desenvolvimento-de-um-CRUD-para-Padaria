<?php

include 'db.php';

$sql = "SELECT * FROM produtos";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table border ='1'>
        <tr>
            <th> ID </th>
            <th> Nome </th>
            <th> Descricao </th>
            <th> Preço </th>
            <th> Quantidade no estoque </th>
            <th> Ação </th>
        </tr>
         ";

    while ($row = $result->fetch_assoc()) {

        echo "<tr>
                <td> {$row['id']} </td>
                <td> {$row['nome']} </td>
                <td> {$row['descricao']} </td>
                <td> {$row['preco']} </td>
                <td> {$row['quantidade_estoque']} </td>
                <td> 
                    <a href='adicionarPedido.php?id={$row['id']}'>+<a>
                    <a href='tirarPediod.php?id={$row['id']}'>-<a>
                
                </td>
              </tr>   
        ";
    }
    echo "</table>";
} else {
    echo "Nenhum registro encontrado.";
}

$conn -> close();

echo "<a href='pedido.php'>Fazer novo pedido</a>";
echo "<a href='../Public/paginaInicial.html'>Voltar para o menu</a>";
?>