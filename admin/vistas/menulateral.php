<aside class="main-sidebar">

  <section class="sidebar">

    <div class="user-panel">
    
      <div class="pull-left image">
    
        <img src="../files/img/user.png" class="img-circle" alt="User Image">
    
      </div>
    
      <div class="pull-left info">
    
        <p><?php echo $_SESSION["user"];?></p>
    
        <a href="#"><i class="fa fa-circle text-success"></i> Activo</a>

      </div>

    </div>       
          
    <ul class="sidebar-menu">
      
      <li class="header"></li>
      
      <li>
        
        <a href="plantilla.php?ruta=escritorio">
        
          <i class="fa fa-tasks"></i> <span>Escritorio</span>
        
        </a>

      </li>            
      
      <li >
      
        <a href="?ruta=dpersonales">
      
          <i class="fa fa-user-secret"></i>
      
          <span>Datos del Administrador</span>
      
        </a>
      
      </li>
            
      <li class="treeview">
      
        <a href="#">
      
          <i class="fa fa-plus"></i>
      
          <span>Registros</span>
      
           <i class="fa fa-angle-left pull-right"></i>
      
        </a>
      
        <ul class="treeview-menu">
      
          <li><a href="plantilla.php?ruta=licenciatura"><i class="fa fa-circle-o text-success"></i> Licenciaturas</a></li>
      
          <li><a href="plantilla.php?ruta=egresado"><i class="fa fa-circle-o text-success"></i> Egresados</a></li>
      
        </ul>
      
      </li>
      
      <li class="treeview">
      
        <a href="?ruta=estadisticas">
      
          <i class="fa fa-line-chart"></i>
      
          <span>estadisticas</span>
      
      
        </a>
      
      </li>                       
      
      <li class="treeview">
      
        <a href="#">
      
          <i class="fa fa-folder"></i> <span>Reportes</span>
      
          <i class="fa fa-angle-left pull-right"></i>
      
        </a>
      
        <ul class="treeview-menu">
      
          <li><a href="?ruta=reportUsers"><i class="fa fa-circle-o"></i> De egresados</a></li>
      
          <li><a href="permiso.php"><i class="fa fa-circle-o"></i> De empresas</a></li>
      
          <li><a href="permiso.php"><i class="fa fa-circle-o"></i> De adminis</a></li>
      
        </ul>
      
      </li>
      
      <li>
      
        <a href="#">
      
          <i class="fa fa-plus-square"></i> <span>Ayuda</span>
      
          <small class="label pull-right bg-red">PDF</small>
      
        </a>
      
      </li>
      
      <li>
      
        <a href="#">
      
          <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
      
          <small class="label pull-right bg-yellow">SSE</small>
      
        </a>
      
      </li>
                        
    </ul>
    
  </section>
        
</aside>