<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
    <title>Cálculo de viagem</title>
</head>
<body></body>
    <h1 class="text-center">Cálculo de Viagem</h1>
    <form method="post" class="form-group col-6 mx-auto">
    <div class="form-group">
        <label for="">Informe o valor do combústivel</label>
        <input type="number" class="form-control" name="valorcomb">
    </div>

    <div class="form-group">
        <label for="">Informe o consumo do veículo (KM/L)</label>
        <input type="text" class="form-control" name="consumo">
    </div>

    <div class="form-group">
        <label for="">Informe a distância da viagem</label>
        <input type="text" class="form-control" name="distviagem">
    </div>

    <div class="form-group">
        <label for="">Informe o valor gasto com pedágios</label>
        <input type="text" class="form-control" name="pedagio">
    </div>

    <div class="form-group">
        <label for="">Informe a cidade de origem</label>
        <input type="text" class="form-control" name="origem">
    </div>

    <div class="form-group">
        <label for="">Informe a cidade de destino</label>
        <input type="text" class="form-control" name="destino">
    </div>
    <div class="botao">
        <button class="btn btn-secondary btn-block ">Calcular</button>
    </div>
    </form>
    <?php

    if (isset($_POST['valorcomb'])){

    $origem = $_POST ['origem'];
    $destino = $_POST ['destino'];

    $valorcombustivel = $_POST ['valorcomb'];
    $consumo = $_POST ['consumo'];
    $distviagem = $_POST ['distviagem'];
    $pedagio = $_POST ['pedagio'];
    $total = ($distviagem / $consumo) * $valorcombustivel + $pedagio;
    echo "<h5 class='text-center'>O valor gasto da viagem de $origem até $destino foi de: R$$total </h5>";
    
    }
    ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>