<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Cristian Ospina - Valentina Rua">

  <title><?php echo $titulo?></title>

 <!--Archivos css y font -->
 <?php include("css-principal/css-pages.php");?>

 <?php
    foreach($css_files as $css) 
    {
        ?>
        <link rel="stylesheet" type="text/css" href="<?php echo $css?>">
        <?php
    }
    ?>

</head>

<body id="page-top">
    <div id="wrapper"> <!-- Page Wrapper -->
        <?php include("componentes/sidebar.php");?> <!-- Sidebar - barra lateral-->
        
        <div id="content-wrapper" class="d-flex flex-column"> <!-- Content Wrapper -->
      
            <div id="content"> <!-- Main Content -->
                <?php include("componentes/navbar.php");?> <!--Navbar-->
                
                <!--Mostrar pacientes-->
                <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="breadcome-list">
                                    <div class="row">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Cedula</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Dependencia</th>
                                <th scope="col">Bus</th>
                                <th scope="col">Metro</th>
                                <th scope="col">Carro</th>
                                <th scope="col">Moto</th>
                                <th scope="col">Carro Compartido</th>
                                <th scope="col">Moto compartida</th>
                                <th scope="col">Bicicleta</th>
                                <th scope="col">Caminar</th>
                                <th scope="col">Vehiculo electrico</th>
                                <th scope="col">Otro</th>
                                <th scope="col">Fecha registro</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listado as $fila) 
                            {?>
                            <tr>
                                <!-- <th scope="row"></th> -->
                                <td><?php echo $fila["cedula"];?></td>
                                <td><?php echo $fila["nombre"];?></td>
                                <td><?php echo $fila["dependencia"];?></td>
                                <td><?php echo $fila["bus"];?></td>
                                <td><?php echo $fila["sistema_metro"];?></td>
                                <td><?php echo $fila["carro"];?></td>
                                <td><?php echo $fila["moto"];?></td>
                                <td><?php echo $fila["carro_compartido"];?></td>
                                <td><?php echo $fila["moto_compartida"];?></td>
                                <td><?php echo $fila["bicicleta"];?></td>
                                <td><?php echo $fila["caminar"];?></td>
                                <td><?php echo $fila["vehiculo_electrico"];?></td>
                                <td><?php echo $fila["otro"];?></td>
                                <td><?php echo $fila["fecha_registro"];?></td>
                                <td><?php echo $fila["total"];?></td>
                            </tr>
                            <?php 
                            }?>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <?php include("componentes/footer.php");?> <!-- Footer -->
        </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!--Modal de usuario - salir de cuenta-->
    <?php include("componentes/modal-user.php");?> 


    <!--Archivos js-->
    <?php include("js-principal/js-pages.php");?>

    <?php
    foreach($js_files as $js)
    {
        ?>
            <script type="text/javascript" src="<?php echo $js?>"></script>
        <?php
    }
    ?>
</body>

</html>
