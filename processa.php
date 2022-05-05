<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processador</title>
</head>
<body>
    <h1>Processando dados</h1>
    <hr>

<?php
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    //Capturando os dados enviados a partir do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    //Se existir o $_POST['interesses'], o que foi selecionado fica na variável. Caso contrário, deixe um arrai vazio na variável.
    $interesses = $_POST["interesses"] ?? [];
    $informativos = $_POST["informativos"];
    $mensagem = $_POST["mensagem"];
?>    

    <h2>Dados</h2>

    <ul>
        <li> Nome: <?=$nome?></li>
        <li> Email: <?=$email?></li>
        <li> Idade: <?=$idade?></li> 
        <!-- se "interesses" não estiver vazio faça tudo abaixo -->
        <?php if(!empty($interesses)){?>
        <li> Interesses:
            <ul>
                <?php foreach($interesses as $interesse) {?>
                <li><?=$interesse?></li>
                <?php } ?>
            </ul>
        </li>
        <?php } ?>
        <li> Receber informativos: <?=$informativos?></li>
        <li >Mensagem: <?=$mensagem?></li>
    </ul>


</body>
</html>