<!DOCTYPE html>
<?php
if ((isset($_POST['matricula'])) && ($_POST['matricula'] != '') && (isset($_POST['modelo'])) && ($_POST['modelo'] != '')
&& (isset($_POST['nombre'])) && ($_POST['nombre'] != '') && (isset($_POST['apellido'])) && ($_POST['apellido'] != '')) {

    include "model/modelo.php";
    $nuevo = new Service();
    $asd = $nuevo->setServicio($_POST['matricula'], $_POST['modelo'], $_POST['nombre'] , $_POST['apellido']);
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaxiCorp - Alta Nuevo Taxi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
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

      <div class="container">
          <header class="text-center">
              <h1>Alta nuevo Taxi</h1>
              <hr/>

          <div class="row">
              <div class="col-lg-6">

                  <form action="#" method="post" class="col-lg-5">
                      <h3>Nuevo servicio</h3>     
                      Matricula: <input type="text" name="matricula" class="form-control"/> 
                      Modelo: <input type="text" name="modelo" class="form-control"/>            
                      Nombre: <input type="text" name="nombre" class="form-control"/>    
                      Apellido: <input type="text" name="apellido" class="form-control"/>    
                      <br/>
                      <input type="submit" value="Crear" class="btn btn-success"/>
                  </form>
              </div>
              <div class="col-lg-6 text-center">
                  <hr/>
                  <h3>Listado de servicios</h3>
                  <a href="controller/controlador.php"><i class="fa fa-align-justify"></i> Acceder al listado de servicios</a>
                  <hr/>
              </div> 
          </div>
          <footer class="col-lg-12 text-center">
              TaxiCorp - <?php echo date("Y"); ?>
          </footer>

</body>
</html>