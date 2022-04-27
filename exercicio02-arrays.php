<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
    <link rel="stylesheet" href="exercicio02.css">
    <style>
        body {
            display: grid;
            place-items: center;
            background-color: darkcyan;
        }
    </style>
</head>
<body>
    <?php
        $pessoa1 = array("Lucas", 19, "lucas132@gmail.com", "Masculino");

        $pessoa2 = array("Mariana", 22, "marina736@gmail.com", "Feminino");
    ?>
    
    <div class="alunos" style="display: inline-block; ">
    <p>Aluno: <?=$pessoa1[0]?></p>

    <p>Idade: <?=$pessoa1[1]?></p>

    <p>Email: <?=$pessoa1[2]?></p>
    </div>

    <hr>
    
    <div class="alunos" style="display: inline-block;">
    <p>Aluno: <?=$pessoa2[0]?></p>

    <p>Idade: <?=$pessoa2[1]?></p>

    <p>Email: <?=$pessoa2[2]?></p>
    </div>

</body>
</html>