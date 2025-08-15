<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
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
          <form method="POST" action="createProdutos.php">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Produto</label>
                        <input type="text" class="form-control" id="nome" aria-describedby="NomeHelp">
                        <div id="NomeHelp" class="form-text">digite nome.</div>
                    </div>
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <input type="text" class="form-control" id="descricao" aria-describedby="EmailHelp">
                        <div id="DescricaoHelp" class="form-text">sobre o produto.</div>
                    </div>
                    <div class="mb-3">
                        <label for="preco" class="form-label">Preço</label>
                        <input type="number" class="form-control" id="preco" set: 0.01 aria-describedby="telefoneHelp">
                        <div id="precoHelp" class="form-text">Adicione o preço.</div>
                    </div>
                    <div class="mb-3">
                        <label for="quantidade" class="form-label">quantidade</label>
                        <input type="number" class="form-control" id="quanitidade" aria-describedby="telefoneHelp">
                        <div id="quantidadeHelp" class="form-text">digite a quantidade.</div>
                    </div>
    

                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                
                    <a href="readProdutos.php">Ver registros.</a>
            
            </Div>

            </div>
            </forn>
        </dIv>
        </main>
    
    </body>
    </html>