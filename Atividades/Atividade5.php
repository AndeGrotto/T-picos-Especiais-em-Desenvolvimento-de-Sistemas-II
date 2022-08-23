<?php
require_once "header.php";
if (!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = $_POST['numero'];

    numeroCorrido($numero);
}

function numeroCorrido($n)
{
    echo '<td><h1>Valor digitado: ' . $n .'</h1></td>';
    if ($n >= 0) {
        for ($i=0; $i <= $n; $i++) { 
            echo '<td><h2>Nº' . $i .': ' . $i . '</td>';
        }
    } else {
        for ($i=0; $i >= $n; $i--) { 
            echo '<td><h2>Nº' . $i .': ' . $i . '</h2></td>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>

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
    <!-- 5. Desenvolva	 um	 algoritmo	 PHP	 que, com	 base	 em	 um	 valor	 digitado	 pelo	 usuário,	 imprima	 todos	 os	
valores	de	0	até	ele.	Por	exemplo:	valor	informado	é	4,	então,	imprima	0	1	2	3	4. -->

    <form method="POST" action="#">
        <div class="mb-3"><br>
            <h1>Cálculo</h1>
            <label class="form-label">Número: </label>
            <input class="form-control col-md-4" type="number" name="numero" id="numero" required /><br>

            <button type="submit" class="btn btn-primary" name="calcular">Calcular</button>
        </div>

    </form>
</body>

</html>