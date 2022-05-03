<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções </title>
</head>
<body>
    <h1>Funções no PHP</h1>
    <hr>

    <h2>Funções básicas (sem retorno)</h2>

<?php
    function dadosAutor(){
        echo "<div>";
        echo "<p>Laise Maria M. Almeida</p>";
        echo date ("d/m/Y");
        echo "</div>";
    }
?>
    
    <section>
        <p>Projeto site Back-End</p>
        <?=dadosAutor()?>
    </section>
    <hr>

    <h2>Função com retorno de dados</h2>

<?php
    function dadosCurso(){
        return "Programador Web - 240 horas";
    }
?>
    <p>Informações: <?=dadosCurso()?></p>
    <p>O Senac Penha tem o curso <?=dadosCurso()?></p>
    <hr>

    <h2>Funções com parâmetros/argumentos</h2>

<?php
    function soma($valor1, $valor2){
        return $valor1 + $valor2;
    }
?>

    <p><?=soma(150, 200)?></p>
    <p><?=soma(10, 20)?></p>

<?php
    $primeiro = 2893;
    $segundo = 745632;
?>

    <p><?=soma($primeiro, $segundo)?></p>

<?php
    $preco = 1578.99;
    $desconto = 75.4789;
    $salarioMinimo = 1212;
    $novoSalario = 2500.47;

    function formataNumero(float $valor, int $casasDecimais = 2){
        return "R$ ".number_format($valor, $casasDecimais, ",", ".");
    }   
?>

    <ul>
        <li>Preço: <?=formataNumero($preco)?></li>
        <li>Desconto: <?=formataNumero($desconto, 4)?></li>
        <li>Salário Mínimo: <?=formataNumero($salarioMinimo)?></li>
        <li>Novo Salário: <?=formataNumero($novoSalario, 1)?></li>
    </ul>
    <hr>

    <h2>Indução de tipos de dados</h2>

<?php
    /* TIPOS DE DADOS PRIMITIVOS:  
       float  -> numeros decimais
       int    -> números inteiros
       string -> textos*/
    function calcularMedia(float $nota1, float $nota2): float{
        return ($nota1 + $nota2) / 2;
    }
?>

    <p><?=calcularMedia(10, 5)?></p>
    <p><?=calcularMedia(5.5, 7.7)?></p>
    <p><?=calcularMedia(9.84, 3.41)?></p>


</body>
</html>