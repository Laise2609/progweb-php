<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loopd PHP</title>
</head>
<body>
    <h1>Loops ou laços de repetição</h1>    
    <hr>

    <h2>While (enquanto)</h2>
<?php
    $i = 1;
    while($i < 4){
?>        
        <p><?=$i?></p>
<?php        $i++;
    }
?>

    <h2>do/while (faça/enquanto)</h2>

<?php
    $j = 1;
    do {
?>

    <div style="border: solid 1px">
        <h3>Exemplo <?=$j?></h3>
    </div>

<?php
    $j++;
} while ($j <= 5);
?>

<?php
    for($i = 1; $i <=3; $i++){
?>

    <p>Valor de i é <b><?=$i?></b></p>
    
<?php
    }
?>

    <h2>Exercício array e loop</h2>
    <p>Crie um array contendo os nomes dos 12 meses do ano.</p>
    <p>Usando um loop, faça o nome dos meses aparecer em uma lista ordenada.</p>


    <ol>
<?php
    const meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
    $contador = 0;
    do {
?>
        <li><?=meses[$contador]?></li>
<?php
    $contador++;
}   while ($contador < count(meses));
?>

    </ol>

    <h2>Foreach</h2>

    <p>Loops exclusivo para Arrays</p>
    
    <ol>
        <?php foreach(meses as $mes){?>
            <li><?=$mes?></li>
        <?php }; ?>
    </ol> 

<?php
    // Array associativo (formados por pares de chave => valor)
    $curso = [
        //chabe (key) => valor (value)
        "nome" => "Programador Web",
        "carga_horaria" => 240,
        "unidade" => "Penha",
        "ucs" => 5
    ];

    foreach ($curso as $key => $value){
?>
    <p><?=$value?></p>

<?php }; ?>


</body>     
</html>