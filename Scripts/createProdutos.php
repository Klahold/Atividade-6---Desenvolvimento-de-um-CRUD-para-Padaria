<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['name'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $quantidade_estoque = $_POST['quantidade'];
    

    $sql = " INSERT INTO produtos (nome,descricao,preco,quantidade_estoque, id_usuarios) VALUE ('$nome','$descricao','$preco','$quantidade_estoque','4')";

    if ($conn->query($sql) === true) {
        echo "Novo registro criado com sucesso.";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
}

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/Style.css">
    <title>Fazer produtos</title>
</head>

<body>
    <h1>Cadastrar Produtos</h1>

    <form method="POST" action="createProdutos.php">

        <label for="name">Produto:</label>
        <input type="text" name="name" required>

        <br>

        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" required>

        <br>

        <label for="preco">Preco:</label>
        <input type="number" step="0.01" name="preco" required>

        <br>

        <label for="quantidade">Quantidade no estoque:</label>
        <input type="number" name="quantidade" required>

        <br>

        <input type="submit" value="Adicionar">

    </form>

    <a href="readProdutos">Ver Produtos.</a>

</body>

</html>



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Styles/Style.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar cliente</title>
</head>

<body>


        <header>
            <div class ="navbar"> 
                <div class ="Logo">
                    <img id="Logo" src="../Assets/Logo.Padaria (1).png" alt="Logo do Bumba meu boi">
                </div>
                
           
            </div>
        </header>

        <main>

    
        <dIv>
          <form>
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="nome" class="form-control" id="nome" aria-describedby="NomeHelp">
                        <div id="NomeHelp" class="form-text">Digite seu nome completo.</div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="EmailHelp">
                        <div id="EmailHelp" class="form-text">Digite seu email mais recente.</div>
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="telefone" class="form-control" id="telefonee" aria-describedby="telefoneHelp">
                        <div id="telefoneHelp" class="form-text">Digite telefone para contato.</div>
                    </div>
        
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                
                    <a href="../Scripts/readClientes.php">Ver registros.</a>
            </Div>

            </div>
        </dIv>
        </main>
    
    </body>
    </html>