<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style3.css">
    <title><?= $data['titulo']?></title>
</head>
<body>
    <img src="img/imgModelo.png" width="550" alt="" class="img1" style="position: absolute; bottom: 4%; right: 4%;">
    <div class="container">
        <h1 class="text-center my-5" style="font-weight: bold;"><?= $data['titulo']?></h1>
        <p>
            <span class="fw-bold">Polinomio interpolante de Lagrange:</span><br>
            <?= $data['modelo']?>
        </p>
        <form action="index.php?controlador=punto&accion=calcularValor" class="needs-validation" method="post">
            <div class="mb-3 my-5">
                <label for="valor" class="form-label">Valor a interpolar</label>
                <?php if(isset($data['valor'])){ ?>
                    <input type="doubleval" class="form-control" id="valor" name="valor" 
                    value="<?=$data['valor']?>" required>
                <?php }else{?>
                    <input type="doubleval" class="form-control" id="valor" name="valor" required>
                <?php } ?>
            </div>
            <ul><li><button type="submit" id="calcular">Calcular</button></li>
            <li><a href="index.php?controlador=punto" id="volver">Volver</a></li></ul>
        </form>
        <?php if(isset($data['valor'])){ ?>
            <p class="my-5">
            <span class="fw-bold">Valor interpolado:</span>
            <?= $data['valorInterpolado']?>
            </p>
        <?php } ?>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
crossorigin="anonymous"></script>
</body>
</html>