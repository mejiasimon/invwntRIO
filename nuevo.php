<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Registro</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>
<body class="py-3">
    <main class="container contenedor">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col">
                    <h4>Nuevo Registro</h4>
                </div>
            </div>
            <div class="row">
                <div class="col">
                  <form class="row g-3" method="post" action="guarda.php" autocomplete="off">
                    <div class="col-md-4">
                        <label for="codigo" class="form-label">Código</label>
                        <input type="text" id="codigo" name="codigo" class="form-control" required autofocus>
                    </div>
                    <div class="col-md-8">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <input type="text" id="descripcion" name="descripcion" class="form-control" required autofocus>
                    </div>
                    <h5>Inventario</h5>
                    <div class="col-md-12">
                        <div class="formi-check">
                            <label for="inventariable" class="form-check-label">Inventariable</label>
                            <input type="checkbox" id="inventariable" name="inventariable" class="form-check-input">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="stock" class="form-label">Existencias</label>
                        <input type="number" name="stock" id="stock" class="form-control">
                    </div>
                    <div class="col-md-12">
                            <a href="index.php" class="btn btn-primary">Regresar</a>
                            <button type="submit" class="btn btn-primary" name="registro">Guardar</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>