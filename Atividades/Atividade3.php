<?php
require_once "header.php";
if (!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $gasolina = $_POST['gasolina'];
    $alcool = $_POST['alcool'];

    abastecimento($gasolina , $alcool);
}

function abastecimento($gas, $alc)
{
    $gas *= 0.7;
    if ($gas < $alc) {
        echo '<td><h1>Abasteça com gasolina! </h1> <h2>Valor da diferença: R$' . $alc -$gas  .'</h2></td>';
    } else if ($gas > $alc) {
        echo '<td><h1>Abasteça com álcool! </h1> <h2>Valor da diferença: R$' . $alc -$gas  .'</h2></td>';
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
    <!-- 3. Desenvolva	um	algoritmo	PHP	que	com	base	no	valor	da	gasolina (digitado	pelo	usuário)	e	no	valor	do	
álcool (digitado	pelo	usuário) ele	informe	se	é	mais	econômico	abastecer	com	gasolina	ou	com	álcool.
a) valor	da	gasolina	*	0.7,	se	o	resultado	for	maior	que	o	valor	do	álcool	“abasteça	com	álcool”,	senão	
“abasteça	com	gasolina”. -->

    <form method="POST" action="#">
        <div class="mb-3"><br>
            <h3>Digite o valor da gasolina e álcool.</h3>
            <label class="form-label">Gasolina: </label>
            <input class="form-control col-md-4" type="number" step="0.01" min=0 name="gasolina" id="gasolina" required />

            <label class="form-label">Álcool: </label>
            <input class="form-control col-md-4" type="number" step="0.01" min=0 name="alcool" id="alcool" required />


            <button type="submit" class="btn btn-primary" name="calcular">Calcular</button>
        </div>

    </form>
</body>

</html>