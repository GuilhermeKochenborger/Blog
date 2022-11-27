<?php

require '../config.php';
require '../src/Artigo.php';
require '../src/redireciona.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $artigo = new Artigo($mysql);
    $artigo->adicionar($_POST['titulo'], $_POST['conteudo']);
   
    // header('Location: /blog/admin/index.php');
    // die();


    redireciona ('index.php');
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>Adicionar Artigo</title>
</head>

<body>
    <div id="container">
        <h1>Adicionar Artigo</h1>
        <form action="adicionar-artigo.php" method="POST">
            <p>
                <label for="">Digite o título do artigo</label>
                <input class="campo-form" type="text" name="titulo" id="titulo" required/>
            </p>
            <p>
                <label for="">Digite o conteúdo do artigo</label>
                <textarea class="campo-form" rows="18" cols ="100" type="text" name="conteudo" id="conteudo" required></textarea>
            </p>
            <p>
                <button class="botao" >Criar Artigo</button>
                <input type="button" value="Voltar" onClick="history.go(-1)"> 
                
            </p>
            
        </form>
    </div>
</body>

</html>