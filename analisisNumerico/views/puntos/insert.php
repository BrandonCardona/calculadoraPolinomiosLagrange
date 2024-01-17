<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style2.css">
    <title><?= $data['titulo']?></title>
</head>
<body>
    <img src="img/imgInsert.png" width="600" alt="" class="img1" style="position: absolute; bottom: 5%; right: 5%;">
    <div class="container">
        <h1 class="text-center my-5"><?= $data['titulo']?></h1>
        <h5>Ingrese un punto(x,y)</h5>
        <form action="index.php?controlador=punto&accion=store" class="needs-validation" method="post">
            <div class="mb-3">
                <label for="puntoX" class="form-label">X</label>
                <input type="doubleval" class="form-control" id="puntoX" name="puntoX" required>
            </div>
            <div class="mb-3">
                <label for="puntoY" class="form-label">Y</label>
                <input type="doubleval" class="form-control" id="puntoY" name="puntoY" required>
            </div>
            <ul><li><button type="submit" id="guardar">Guardar</button></li>
            <li><a href="index.php?controlador=punto" id="volver">Volver</a></li></ul>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
crossorigin="anonymous"></script>
</body>
</html>