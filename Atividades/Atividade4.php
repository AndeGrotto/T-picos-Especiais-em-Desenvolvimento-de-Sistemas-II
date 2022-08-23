<?php
require_once "header.php";
if (!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $altura = $_POST['altura'];
    $sexo = $_POST['sexo'];

    calcIMC($altura, $sexo);
}

function calcIMC($a, $s)
{

    if ($s == "M") {
        $imc = (72.7 * $a) - 58;
        echo '<td><h2>Peso ideal do homem é: ' . $imc . '</h2></td>';
    } else if ($s == "F") {
        $imc = (62.1 * $a) - 44;
        echo '<td><h2>Peso ideal da mulher é: ' . $imc . '</h2></td>';
    } else {
        echo '<td><h1>Sexo não encontrado</h1></td>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>

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
    <!-- 4. Desenvolva	um	algoritmo	PHP	que	com	base	em	um	tamanho(A) (digitado	pelo	usuário) e	um	sexo(S)
(digitado	pelo	usuário) seja	impresso	o	peso	ideal	da	pessoa.
Regra	IMC	(Índice	de	Massa	Corporal)
a) Para	homens:	(72.7	*	A)	– 58
b) Para	mulheres:	(62.1	*	A)	– 44. -->

    <form method="POST" action="#">
        <div class="mb-3"><br>
            <h1>Calcular IMC</h1>
            <label class="form-label">Altura: </label>
            <input class="form-control col-md-4" type="number" step="0.01" min=0 name="altura" id="altura" required />

            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo" id="sexo" value="M" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                    Masculino
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo" id="sexo" value="F">
                <label class="form-check-label" for="flexRadioDefault2">
                    Feminino
                </label>
            </div><br>

            <button type="submit" class="btn btn-primary" name="calcular">Calcular</button>
        </div>

    </form>
</body>

</html>