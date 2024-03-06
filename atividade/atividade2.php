<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Três Valores</title>
</head>

<body>
    <h2>Soma de Três Valores</h2>
    <form method="post" action="">
        <p>insira seu nome:</p>     
        <input type="text" name="aluno" placeholder="Digite seu nome" required><br>
        <input type="number" name="valor1" placeholder="Digite a primeira nota" required><br>
        <input type="number" name="valor2" placeholder="Digite a segunda nota" required><br>
        <input type="number" name="valor3" placeholder="Digite a terceira nota" required><br>
        
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {


        
        $aluno = $_POST["aluno"];
        
        $v1 = $_POST["valor1"];
        
        $v2 = $_POST["valor2"];
        
        $v3 = $_POST["valor3"];

        $resultado = ($v1 + $v2 + $v3)/3;

        echo ("O valor da média das notas do $aluno é: $resultado");

    }

