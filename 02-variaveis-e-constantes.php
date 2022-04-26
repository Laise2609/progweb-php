<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>
<body>
    <h1>Manipulando Dados na Memória</h1>
    <hr>

<?php
    //Variáveis
    $curso = "Programador Web";
    $ano = 2022;
    $preco = 2500.42; 

    //saída de dados dentro da tag php
    echo "<h2>Saída de Dados Completa</h2>";
    echo "<p>$curso</p>";
    echo '<p>$curso</p>';
    echo $ano;
    echo "<p>$preco</p>";

?>

    <h2>Saída de dados intercalando HTML e PHP</h2>
    <!-- saída de dados php "inline" -->
    <p> <?php echo $curso?></p>
    <p> <?=$curso?> 2</p> <!-- sintaxe abreviada -->
    <p> <?=$ano?> </p>
    <p> <?=$preco?> </p>
    <p>
        Estamos fazendo o curso de <?=$curso?> no ano de <?=$ano?>
    </p>

<?php
    //Constantes
    //Forma 1:
    define("MEU_NOME", "Laise");

    //Forma 2
    const ESCOLA = "Senac Penha";

    //Obs: precisa concatenar (ponto .)
    echo "<p>" .MEU_NOME. "</p>";
    echo "<p>" .ESCOLA. "</p>";
?>

</body>
</html>