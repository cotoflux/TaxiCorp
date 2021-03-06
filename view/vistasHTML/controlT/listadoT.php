<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaxiCorp - Listado de taxis</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="../../images/taxicorp-logo.png" alt="Taxicordp logo" width="80" height="80" class="d-inline-block align-top">
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="./inicio.html">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./solicitud.html">Solicitud de taxis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./controlT.html">Control de taxis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./ccaja.html">Control de caja realizada</a>
          </li>
        </ul>
      </div>
</nav>

<form action="../../../controller/Taxi_controlador.php" method="POST">
  <input type="submit" class="button btn btn-primary" name="select" value="Ver Taxis" />
</form>


<h4>Listado de Taxis</h4>

<table border=1 cellpadding=10>
  <tr>
    <th>Matrícula</th>
    <th>Modelo</th>
    <th>Apellidos</th>
    <th>Ocupado</th>
  </tr>
</table>

<?php
if (isset($_GET['aParam'])) :
 foreach ($_GET['aParam'] as $key => $value):
  ?>
  <table border=1 cellpadding=10>
  <tr><td><&nbsp><?php echo($value['Matrícula']); ?>&nbsp</td>
      <td><&nbsp><?php echo($value['Modelo']); ?>&nbsp</td>
      <td><&nbsp><?php echo($value['Apellidos']); ?>&nbsp</td>
      <td><&nbsp><?php echo($value['Ocupado']);?> &nbsp</td></tr>

  </table>
    <?php
  endforeach;
endif;
?>

</body>
</html>