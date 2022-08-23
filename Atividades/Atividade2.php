<?php
require_once "header.php";
if (!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $media[0] = $_POST['nota1'];
    $media[1] = $_POST['nota2'];
    $media[2] = $_POST['nota3'];
    $media[3] = $_POST['nota4'];

    mediaNota($media);
}

function mediaNota($med)
{
    $mediaFinal = 0;
    for ($i=0; $i < 4; $i++) { 
        $mediaFinal += $med[$i];
    }
    $mediaFinal = $mediaFinal/4;
    if ($mediaFinal >= 7) {
        echo '<td><h2>Aluno aprovado! <br> Média: ' . $mediaFinal .'</h2></td>';
    } else if ($mediaFinal >=5 && $mediaFinal < 7) {
        echo '<td><h2>Aluno em recuperação! <br> Média: ' . $mediaFinal .'</h2></td>';
        $mediaFinal = 10 - $mediaFinal;
        echo '<td><h1>Deverá tirar a seguinte nota para passar: ' . $mediaFinal .'</h1></td>';
    } else{
        echo '<td><h2>Aluno reprovado! <br> Média: ' . $mediaFinal .'</h2></td>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>

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
    <!-- 2. Desenvolva	 um	 algoritmo	 PHP	 que	 com	 base	 em	 quatro	 notas	 (digitadas pelo	 usuário) de	 um	
determinado	 aluno,	 calcule	 a	 média	 aritmética	 das	 notas	 informadas	 e	 imprima	 uma mensagem
informando	se	o	aluno	está	passado (nota>=7),	se	o	aluno	está	em	recuperação (nota>=5	e	nota<7)	ou	
se	 o	 aluno	 está	reprovado (nota<5). Caso	 o	 aluno	 esteja	 em	 recuperação	 imprima	 qual	 a	 nota	 que	 o	
aluno	deverá	tirar	na	recuperação	para	ser	aprovado. -->

    <form method="POST" action="#">
        <div class="mb-3"><br>
            <h3>Digite 4 notas.</h3>
            <label class="form-label">Nota 1: </label>
            <input class="form-control col-md-4" type="number" step="0.01" min=0 max="10" name="nota1" id="nota1" required />

            <label class="form-label">Nota 2: </label>
            <input class="form-control col-md-4" type="number" step="0.01" min=0 max="10" name="nota2" id="nota2" required />

            <label class="form-label">Nota 3: </label>
            <input class="form-control col-md-4" type="number" step="0.01" min=0 max="10" name="nota3" id="nota3" required />

            <label class="form-label">Nota 4: </label>
            <input class="form-control col-md-4" type="number" step="0.01" min=0 max="10" name="nota4" id="nota4" required />

            <button type="submit" class="btn btn-primary" name="calcular">Calcular</button>
        </div>

    </form>
</body>

</html>