<?php 

include '../../config/Conexion.php';

?>

<script src="../../public/highcharts.js"></script>

<script src="../../public/modules/exporting.js"></script>

<script src="../../public/modules/export-data.js"></script>

<div class="content-wrapper">        
        
  <section class="content">
    
    <div class="row">
      
      <div class="col-md-12">
        
        <div class="box">
          
          <!--Encabezado de licenciaturas-->
          <div class="box-header with-border">
          
            <h1 class="box-title">

              Modulo de estadisticas 

            </h1>

            <div class="box-tools pull-right">

            </div>

          </div>
          
          <!--Cuerpo del apartado-->          
          <div class="panel-body">
            
            <div class="box-body">
              
              <ul class="todo-list">

                <li>
                  <span class="handle">
                    <i class="fa fa-ellipsis-v"></i>
                    <i class="fa fa-ellipsis-v"></i>
                  </span>
                  <span class="text">Estado laboral de los egresados</span>
                  <div class="tools">
                    <i data-toggle="modal" data-target="#Modal_Trabajo_Egresados" class="fa fa-line-chart"></i>
                  </div>
                </li>

                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Make the theme responsive</span>
                  <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Let theme shine like a star</span>
                  <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Let theme shine like a star</span>
                  <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Check your messages and notifications</span>
                  <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Let theme shine like a star</span>
                  <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
              <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
            </div>
          </div>

          </div>
          
          
                   
        </div>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL ESTADO DE TRABAJO DE LOS EGRESADOS
======================================-->
<div id="Modal_Trabajo_Egresados" class="modal fade" role="dialog" data-backdrop="false">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 style="color:#3C6943;font-size:16pt;font-weight:600;">
          <i class="fa fa-bar-chart"></i>
          Estado laboral de los egresados UAEM
        </h4>
      </div>

      <div class="modal-body">
        
        <div id="container2" style="min-width:310px;height:400px;margin:0 auto"></div>

        <div>


          <style type="text/css">
            .ocult {
              display: none;
            }
            .mt-2 {
              margin-top: 2em;
            }
            .mb-2 {
              margin-bottom: 1em;
            }
            .hover {
              cursor: pointer;
            }
          </style>

          <h1 style="color:#3C6943;font-size:16pt;" class="text-center mt-2 mb-2">
            <i class="fa fa-plus" style="margin-right: 1em;"></i>
            Más opciones
          </h1>
          <hr>
          <div class="row mt-2 mb-2">
            <div class="col-sm-6 text-left">
              <a id="EgreLaborando" href="#" style="text-decoration:none;color:#3C6943;font-size:12pt; font-weight: bold;">
                <i class="fa fa-arrow-circle-right hover"></i> Lista de los egresados que laboran
              </a>
            </div>
            <div class="col-sm-6 text-right">
              <i id="icoClose1" class="fa fa-times-circle fa-2x text-danger ocult hover"></i>
            </div>
          </div>
          <hr>
          <div id="ListaEgresadosLaborando" style="padding:10px;display:none;">
            <div class="text-right" style="margin-bottom: 2em !important;">
              <a target="_blank" href="../vistas/reportLab.php?type=yeslab" class="font-weight-bold" style="background-color: #3C6943; padding: 0.5em; color: #fff; border-radius: 8px 6px 8px 6px; box-shadow: 3px 3px 3px 3px #ddd;">
                <i class="fa fa-print" style="margin-right: 0.5em;"></i>
                Imprimir pdf
              </a>
            </div>
            <table class="table table-striped">
              <thead>
                <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>sexo</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $alumnosLaboran = "SELECT * FROM encuesta3 e3 INNER JOIN egresado eg ON eg.idegresado = e3.idegresado
                  WHERE e3.trabajas = 'Si'";
                  $resultadoLaboran = $conexion->query($alumnosLaboran);
                  while ($datLaboran = mysqli_fetch_array($resultadoLaboran)) {
                ?>  
                  <tr>
                    <td><?php echo $datLaboran['nombre']; ?></td>
                    <td><?php echo $datLaboran['apepat']." ".$datLaboran['apemat']; ?></td>
                    <td><?php echo $datLaboran['edad']; ?></td>
                    <td><?php echo $datLaboran['sexo']; ?></td>
                  </tr>
                <?php
                  }
                ?>
              </tbody>
            </table>
          </div>
          <br>

          <hr>
          <div class="row mt-2 mb-2">
            <div class="col-sm-6 text-left">
              <a id="EgreNoLaborando" href="#" style="text-decoration:none;color:#3C6943;font-size:12pt; font-weight: bold;">
                <i class="fa fa-arrow-circle-right"></i> Ver listado de los egresados que no laboran
              </a>
            </div>
            <div class="col-sm-6 text-right">
              <i id="icoClose2" class="fa fa-times-circle fa-2x text-danger ocult hover"></i>
            </div>
          </div>
          <hr>
          <div id="ListaEgresadosNoLaborando" style="padding:10px;display:none;">
            <div class="text-right" style="margin-bottom: 2em !important;">
              <a target="_blank" href="../vistas/reportLab.php?type=notlab" class="font-weight-bold" style="background-color: #3C6943; padding: 0.5em; color: #fff; border-radius: 8px 6px 8px 6px; box-shadow: 3px 3px 3px 3px #ddd;">
                <i class="fa fa-print" style="margin-right: 0.5em;"></i>
                Imprimir pdf
              </a>
            </div>
            <table class="table table-striped">
              <thead>
                <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>sexo</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $alumnosLaboran = "SELECT * FROM encuesta3 e3 INNER JOIN egresado eg ON eg.idegresado = e3.idegresado
                  WHERE e3.trabajas = 'No'";
                  $resultadoLaboran = $conexion->query($alumnosLaboran);
                  while ($datLaboran = mysqli_fetch_array($resultadoLaboran)) {
                ?>  
                  <tr>
                    <td><?php echo $datLaboran['nombre']; ?></td>
                    <td><?php echo $datLaboran['apepat']." ".$datLaboran['apemat']; ?></td>
                    <td><?php echo $datLaboran['edad']; ?></td>
                    <td><?php echo $datLaboran['sexo']; ?></td>
                  </tr>
                <?php
                  }
                ?>
              </tbody>
            </table>
          </div>
          <br>

          <hr>
          <div class="row mt-2 mb-2">
            <div class="col-sm-6 text-left">
              <a id="Porcentaje" href="#" style="text-decoration:none;color:#3C6943;font-size:12pt; font-weight: bold;">
                <i class="fa fa-arrow-circle-right"></i> Porcentaje de las carreras con egresados laborando
              </a>
            </div>
            <div class="col-sm-6 text-right">
              <i id="icoClose3" class="fa fa-times-circle fa-2x text-danger ocult hover"></i>
            </div>
          </div>
          <div id="PorcentajeCarreras" style="display:none;">
            <div id="container" style="min-width:200px;height:250px;max-width:500px; margin: 0 auto">
            </div>
          </div>
          
          
          
          
        </div>

      </div>

      <div class="modal-footer">
      
      </div>

    </div>

  </div>

</div>


<!--=====================================
MAQUETA MODAL
======================================-->
<div id="Modal" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Estado laboral de los egresados UAEM</h4>
      </div>

      <div class="modal-body">
        
      </div>

      <div class="modal-footer">
      
      </div>

    </div>

  </div>

</div>

<script type="text/javascript" src="scripts/estadisticas.js"></script>