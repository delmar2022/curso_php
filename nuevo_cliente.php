<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Curso PHP</title>
    <?php require_once "menu.php" ?>
  </head>
  <body>
   
<div class="container"><br>
<div class="row justify-content-center">
        <div class="col-6 p-5 bg-white shadow-lg rounded">
    <form method="post" action="recibe_clientes.php">
        <div class="form-group">
            <label for="codigo">Codigo:</label>
            <input id="codigo" class="form-control" type="text" name="codigo">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input id="nombre" class="form-control" type="text" name="nombre">
        </div>
        <div class="form-group">
            <label for="telefono">Telefono:</label>
            <input id="telefono" class="form-control" type="text" name="telefono">
        </div><br>
        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>
</div>
</div>
</div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>