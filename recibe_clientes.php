<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Curso PHP_ROUND_HALF_ODD</title>
    <?php require_once "menu.php" ?>
  </head>
  <body>
      <div class="container">
      <?php 
      $codigo = $_POST['codigo'];
      $nombre = $_POST['nombre'];
      $telefono = $_POST['telefono'];
      ?>
    <table class="table">
        <tbody>
            <tr>
                <th>CODIGO</th>
                <th>NOMBRE</th>
                <th>TELEFONO</th>
            </tr>
        </tbody>
        <tr>
            <td><?php echo $codigo ?></td>
            <td><?php echo $nombre ?></td>
            <td><?php echo $telefono ?></td>
        </tr>
    </table>
      </div>
      

   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>