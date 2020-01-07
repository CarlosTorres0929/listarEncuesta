<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url();?>/index.php/principal">
        <div class="sidebar-brand-icon rotate-n-15"></div>
        <div class="sidebar-brand-text mx-3"><img class="img-fluid" src="<?php echo base_url();?>/assets/img/logo.png" alt=""></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>/index.php/principal">
            <i class="fas fa-fw fa-home "></i>
            <span>Plan movilidad sostenible</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
    Servicios
    </div>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fas fa-book"></i>
          <span>Informes</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Listado:</h6>
                <a class="collapse-item" href="<?php echo base_url();?>./index.php/informes/informeTrabajo" aria-expanded="true">al trabajo </a>

                <a class="collapse-item" href="<?php echo base_url();?>./index.php/informes/informeHogar">al hogar</a>

        </div>
      </li>


    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url();?>./index.php/empleados" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-medkit "></i>
            <span>Empleados</span>
        </a>
    </li>
 <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-ambulance"></i>
          <span>Encuesta</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="http://localhost:8080/EncuestaAmbiental/index.php">Ir a la encuesta</a>
        </div>
      </li>


    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>