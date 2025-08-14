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
                <td> {$row['id_produtos']} </td>
                <td> {$row['nome']} </td>
                <td> {$row['descricao']} </td>
                <td> {$row['preco']} </td>
                <td> {$row['quantidade_estoque']} </td>
                <td> 
                    <a href='updateProdutos.php?id_produtos={$row['id_produtos']}'>Editar<a>
                    <a href='deleteProdutos.php?id_produtos={$row['id_produtos']}'>Excluir<a>
                
                </td>
              </tr>   
        ";
    }
    echo "</table>";
} else {
    echo "Nenhum registro encontrado.";
}

$conn -> close();

echo "<a href='createProdutos.php'>Inserir novo Cadastro</a>";
echo "<a href='../Public/paginaInicial.html'>Voltar para o menu</a>";
?>