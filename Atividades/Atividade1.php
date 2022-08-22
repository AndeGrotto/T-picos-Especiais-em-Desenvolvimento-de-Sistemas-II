<?php
require_once "header.php";
if (!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $vet[0] = $_POST['numero1'];
    $vet[1] = $_POST['numero2'];
    $vet[2] = $_POST['numero3'];
    $vet[3] = $_POST['numero4'];
    $vet[4] = $_POST['numero5'];

    bubbleSort($vet);
}

function bubbleSort($vetor)
{
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 4; $j++) {
            if ($vetor[$j + 1] <= $vetor[$j]) {
                $aux = $vetor[$j];
                $vetor[$j] = $vetor[$j + 1];
                $vetor[$j + 1] = $aux;
            }
        }
        $lista[$i] = $aux;
    }
    echo '<h1>Lista organizada em ordem crescente:</h1>';
    for ($n = 0; $n < 5; $n++) {
        echo '<td><h3>Número ' . $n . '= ' . $vetor[$n] . '</h3></td>';
    }
}
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

        h2 {
            color: red;
            font-size: 30px;
        }

        h3 {
            color: blue;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <!-- 1. Desenvolva um algoritmo PHP que, com base em 5 valores digitados pelo usuário, seja impressa a
        ordenação desses valores. Neste caso pode-se utilizar algoritmos de ordenação, tais como: bubble sort,
        merge sort, quick sort, etc.-->
    <form method="POST" action="#">
        <div class="mb-3"><br>
            <h3>Digite 5 valores.</h3>
            <label class="form-label">Número 1: </label>
            <input class="form-control col-md-4" type="number" name="numero1" id="numero1" required />

            <label class="form-label">Número 2: </label>
            <input class="form-control col-md-4" type="number" name="numero2" id="numero2" required />

            <label class="form-label">Número 3: </label>
            <input class="form-control col-md-4" type="number" name="numero3" id="numero3" required />

            <label class="form-label">Número 4: </label>
            <input class="form-control col-md-4" type="number" name="numero4" id="numero4" required />

            <label class="form-label">Número 5: </label>
            <input class="form-control col-md-4" type="number" name="numero5" id="numero5" required />

            <button type="submit" class="btn btn-primary" name="ordenar">Ordenar</button>
        </div>

    </form>
</body>

</html>