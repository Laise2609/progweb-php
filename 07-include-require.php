<?php include "recursos.php"?> <!-- "link de php externo" -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de recursos</title>
</head>
<body>
    
    <h2>Inclusão de Recursos</h2>
    <hr>

    <h2><?=ESCOLA?></h2>
    <p>Estamos no curso de <?=$curso?></p>

    <ul>
    <?php foreach($tecnologias as $tecnologia){?>
        <li><?=$tecnologia?></li>
    <?php }; ?>
    </ul>   
    
    <p>Chapolin Colorado tem 20 anos e é <b> <?=verificaIdade(20)?> </b> de idade</p>

    <p>Chaves tem 8 anos e é <b> <?=verificaIdade(8)?> </b> de idade </p>
    <hr>

    <article>
        <h2>Conteúdo qualquer...</h2>
        <?php require "textos.html"?> <!-- require: a página deixa de funcionar se tiver algo de errado dentro dele/ include: é mais permissivo e a página continuará fincionando mesmo com erro  -->
    </article>
    <hr>

    <h2>Qualquer outra coisa</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus rem incidunt eligendi exercitationem explicabo possimus voluptas, iusto quaerat ex reiciendis inventore ullam fugiat voluptates debitis tenetur! Quis omnis quasi maxime.</p>
</body>
</html>