<?php
require_once "header.php";
if (!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = $_POST['numero'];

    fatorialNumero($numero);
}

function fatorialNumero($n)
{
    $fatorial = 1;
    echo '<td><h1>Número digitado: ' . $n .'</h1></td>';
        for ($i = 1; $i < $n+1; $i++) {
            $fatorial *= $i;

        }
        echo '<td><h2>Fatorial: ' . $fatorial . '</td>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6</title>

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
    <!-- 6. Desenvolva	um	algoritmo	PHP	que	com	base	em	um	valor	informado pelo	usuário calcule	o	seu	fatorial, onde	a	função	fatorial	é:
        Fat(6)	=	6*5*4*3*2*1
        Fat(4)	=	4*3*2*1 -->

    <form method="POST" action="#">
        <div class="mb-3"><br>
            <h1>Cálculo de fatorial</h1>
            <label class="form-label">Número: </label>
            <input class="form-control col-md-4" type="number" min="0" name="numero" id="numero" required /><br>

            <button type="submit" class="btn btn-primary" name="calcular">Calcular</button>
        </div>

    </form>
</body>

</html>