<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title><?= $data['titulo']?></title>
</head>
<body>
    <img src="img/imgIndex.png" width="350" alt="" class="img1">
    <div class="container">
        <div class="table-title">
            <h1 class="text-center my-5"><?= $data['titulo']?></h1>
        </div> 
        <table class="table table-fill bordeTabla">
            <thead>
                <tr>
                    <th class="table-left" style="background-color: #000;">X</th>
                    <th class="table-left" style="background-color: #000;">Y</th>
                </tr>
            </thead>
            <tbody class="table-hover">
                <?php foreach($data['puntos'] as $item) { ?>
                    <tr>
                        
                        <td class="text-left"><?= $item['x'] ?></td>
                        <td class="text-left"><?= $item['y'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>  
        <ul>
        <li><a href="index.php?controlador=punto&accion=insert" id="insertar">Agregar puntos</a></li>
        <li><a href="index.php?controlador=punto&accion=calcularModelo" id="calcular">Calcular modelo</a></li>
        <li><a href="index.php?controlador=punto&accion=delete" id="eliminar">Limpiar base</a></li>
        </ul>
        <ul>
            <li><a href="../paginaPrincipal/index.php" id="volver">Volver</a></li>
        </ul>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
crossorigin="anonymous"></script>
</body>
</html>