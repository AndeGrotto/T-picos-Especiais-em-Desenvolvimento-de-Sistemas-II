<?php
$numeros = array(1 => "numero1");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>

    <style>
        input,
        select {
            padding: 10px;
            margin: 5px;
        }

        h3 {
            color: blue;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <h2>1. Desenvolva um algoritmo PHP que, com base em 5 valores digitados pelo usuário, seja impressa a
        ordenação desses valores. Neste caso pode-se utilizar algoritmos de ordenação, tais como: bubble sort,
        merge sort, quick sort, etc.</h2>
    <h1><?=$numeros;?></h1>
    <form method="POST">
        <h3>Digite 5 valores.</h3><br>
        <label>Número 1: </label><input type="text" name="numero1" required/><br>
        <!-- <label>Número 2: </label><input type="number" name="numero2" required/><br>
        //<label>Número 3: </label><input type="number" name="numero3" required/><br>
        //<label>Número 4: </label><input type="number" name="numero4" required/><br>
        //<label>Número 5: </label><input type="number" name="numero5" required/><br> -->
        <input type="submit" name="ordenar" value="Ordenar">
    </form>
</body>

</html>