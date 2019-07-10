<aside class="main-sidebar">

  <section class="sidebar">

    <div class="user-panel">
    
      <div class="pull-left image">
    
        <img src="../files/img/user.png" class="img-circle" alt="User Image">
    
      </div>
    
      <div class="pull-left info">
    
        <p><?php echo $_SESSION["user"];?></p>
    
        <a href="#"><i class="fa fa-circle text-success"></i> Egresado UAEM</a>

      </div>

    </div>       
          
    <ul class="sidebar-menu">
      
      <li class="header"></li>
      
      <li>
        
        <a href="plantillaegresado.php?ruta=inicio">
        
          <i class="fa fa-home"></i> <span>Inicio</span>
        
        </a>

      </li>

      <li>
        
        <a href="plantillaegresado.php?ruta=direccion">
        
          <i class="fa fa-location-arrow"></i> <span>Mi direccion</span>
        
        </a>

      </li>            
      
      <li class="treeview">
      
        <a href="#">
      
          <i class="fa fa-user"></i>
      
          <span>Actualizar Informacion</span>
      
          <i class="fa fa-angle-left pull-right"></i>
      
        </a>
      
        <ul class="treeview-menu">

      
          <li><a href="?ruta=datosacademicos"><i class="fa fa-circle-o text-success"></i> Datos academicos</a></li>
      
          <li><a href="categoria.php"><i class="fa fa-circle-o text-success"></i> De dirección</a></li>
      
        </ul>
      
      </li>
            
     
      
      <li class="treeview">
      
        <a href="?ruta=personales">
      
          <i class="fa fa-location-arrow"></i>
      
          <span>Datos personales</span>
      
      
        </a>
      
      </li>                       
      
      
      <li>
      
        <a href="?ruta=encuestas">
      
        <i class="fa fa-contao"></i>

        <span>Encuestas</span>
      
        </a>
      
      </li>
                        
    </ul>
    
  </section>
        
</aside>