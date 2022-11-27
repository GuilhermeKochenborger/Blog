<?php

require 'config.php';

include 'src/Artigo.php';
$artigo = new Artigo($mysql);
$artigos = $artigo->exibirTodos();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Ultimas Postagens</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="container">
        <h1>Ultimas Postagens</h1>
        <?php foreach ($artigos as $artigo) : ?>
        <h2>
            <a href="artigo.php?id=<?php echo $artigo['id']; ?>">
                <?php echo nl2br($artigo['titulo']); ?>
            </a>
        </h2>
        <p>
            <?php echo nl2br($artigo['conteudo']); ?>
        </p>
        <?php endforeach; ?>
    </div>
</body>

</html>