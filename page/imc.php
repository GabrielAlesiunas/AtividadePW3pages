<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
    <title>Cálculo de IMC</title>
</head>
<body>
    <h1 class="text-center">Cálculo de IMC</h1>
    <form method="post" class="form-group col-6 mx-auto">
    <div class="form-group">
        <label for="">Digite seu peso</label>
        <input type="number" class="form-control" name="peso">
    </div>

    <div class="form-group">
        <label for="">Digite sua altura</label>
        <input type="text" class="form-control" name="altura">
    </div>
    <button class="btn btn-secondary btn-block ">Calcular</button>
    </form>

    <?php
    $peso = $_POST ['peso'];
    $altura = $_POST ['altura'];
    $imc = $peso /pow ($altura,2);
    echo "<h1 class='text-center'>Resultado</h1>";

    if($imc<18.5)
    {
        echo "<input type= 'text' class='form-control col-6 mx-auto' value=".$imc.">";
        echo "<h3 class='text-center'>Magreza</h3>";
    }
    else if($imc>=18.5 and $imc<24.9)
    {
        echo "<input type= 'text' class='form-control col-6 mx-auto' value=".$imc.">";
        echo "<h3 class='text-center'>Normal</h3>";
    }
    else if($imc>=24.9 and $imc<30)
    {
        echo "<input type= 'text' class='form-control col-6 mx-auto' value=".$imc.">";
        echo "<h3 class='text-center'>Sobrepeso</h3>";
    }
    else{
        echo "<input type= 'text' class='form-control col-6 mx-auto' value=".$imc.">";
        echo "<h3 class='text-center'>Obesidade</h3>";
    }
    ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>