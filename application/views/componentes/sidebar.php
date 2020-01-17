<!-- Sidebar -->

<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <br>
<br>
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="http://172.17.5.35/listarEncuesta">
        <div class="sidebar-brand-icon rotate-n-15"></div>
        <div class="sidebar-brand-text mx-3"><img class="img-fluid" src="<?php echo base_url();?>/assets/img/moneda.png" alt=""></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="http://172.17.5.35/listarEncuesta">
            <i class="fas fa-fw fa-home "></i>
            <span style="font-family: calibri;">Plan movilidad sostenible</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading" style="font-family: calibri;">
    Servicios
    </div>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fas fa-book"></i>
          <span style="font-family: calibri;">Informes</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" style="font-family: calibri;">Listado:</h6>
                <a class="collapse-item" href="<?php echo base_url();?>./index.php/informes/informeTrabajo" aria-expanded="true" style="font-family: calibri;">De la casa al trabajo </a>

                <a class="collapse-item" style="font-family: calibri;" href="<?php echo base_url();?>./index.php/informes/informeHogar">Del trabajo al hogar</a>

        </div>
      </li>


    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url();?>./index.php/empleados" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-medkit "></i>
            <span style="font-family: calibri;">Empleados</span>
        </a>
    </li>
 <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-ambulance"></i>
          <span style="font-family: calibri;">Encuesta</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
                <a style="font-family: calibri;" class="collapse-item" href="http://172.17.5.35/EncuestaAmbiental/index.php">Ir a la encuesta</a>
        </div>
      </li>


    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>