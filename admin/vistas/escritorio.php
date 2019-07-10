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
          
            <h1 class="box-title">Escritorio</h1>

            <div class="box-tools pull-right">

            </div>

          </div>
          
          <!--Cuerpo del apartado de Escritorio-->          
          <div class="panel-body">
            
            <p style="color: #8a8a8a; font-size:12pt; border-bottom: 1px solid; padding-bottom: 10px;">Estadisticas de los usuarios registrados</p>

            <div class="row">
            <!--Pequeñas cajas de informacion-->
              <div class="col-lg-3 col-xs-6">
                
                <div class="small-box bg-green">
                
                  <div class="inner">
                    
                    <input 
                      type="text" 
                      name="num_egresados" 
                      id="num_egresados"
                      readonly="" 
                      style="background: none; border:none; font-size: 20pt; font-weight: 600; width: 30px"
                    />

                    <p>Egresados</p>
                  
                  </div>
                  
                  <div class="icon">
                    
                    <i class="fa fa-graduation-cap"></i>
                  
                  </div>
                  
                  <a href="#" class="small-box-footer" data-toggle="modal" data-target="#listaEgresados">Ver Lista<i class="fa fa-arrow-circle-right"></i></a>
                
                </div>
              
              </div>

              <div class="col-lg-3 col-xs-6">
                
                <div class="small-box bg-green">
                
                  <div class="inner">
                    
                    <input 
                      type="text" 
                      name="num_empresas" 
                      id="num_empresas"
                      readonly="" 
                      style="background: none; border:none; font-size: 20pt; font-weight: 600; width: 30px"
                    />

                    <p>Empresas</p>
                  
                  </div>
                  
                  <div class="icon">
                    
                    <i class="fa fa-industry"></i>
                  
                  </div>
                  
                  <a href="#" data-toggle="modal" data-target="#listaEmpresas" class="small-box-footer">Ver lista <i class="fa fa-arrow-circle-right"></i></a>
                
                </div>
              
              </div>

              <div class="col-lg-3 col-xs-6">
                
                <div class="small-box bg-green">
                
                  <div class="inner">
                    
                    <input 
                      type="text" 
                      name="num_admins" 
                      id="num_admins"
                      readonly="" 
                      style="background: none; border:none; font-size: 20pt; font-weight: 600; width: 30px"
                    />

                    <p>Administradores</p>
                  
                  </div>
                  
                  <div class="icon">
                    
                    <i class="fa fa-user-secret"></i>
                  
                  </div>
                  
                  <a href="#" data-toggle="modal" data-target="#listaAdmins" class="small-box-footer">Ver lista <i class="fa fa-arrow-circle-right"></i></a>
                
                </div>
              
              </div>

              <div class="col-lg-3 col-xs-6">
                
                <div class="small-box bg-green">
                
                  <div class="inner">
                    
                    <input 
                      type="text" 
                      name="totalregistros" 
                      id="totalregistros"
                      readonly="" 
                      style="background: none; border:none; font-size: 20pt; font-weight: 600; width: 50px"
                    />

                    <p>Total de registros</p>
                  
                  </div>
                  
                  <div class="icon">
                    
                    <i class="fa fa-folder-open"></i>
                  
                  </div>
                
                </div>
              
              </div>
           
          </div>

          <p style="color: #8a8a8a; font-size:12pt; border-bottom: 1px solid; padding-bottom: 10px;">Resultados de las encuentas</p>

          <div class="row">

            <div class="col-sm-3 col-lg-3 col-md-3">
            
              <div>

                <div class="info-box">
                  
                  <span class="info-box-icon bg-gray"><i class="fa fa-laptop"></i></span>

                  <div class="info-box-content">

                    <span class="info-box-text">Informatica</span>

                    <span class="info-box-number">
                      <input 
                      type="text" 
                      name="informatica" 
                      id="informatica"
                      readonly="" 
                      style="background: none; border:none; font-size: 20pt; font-weight: 600; width: 30px"
                      />
                    </span>

                  </div>

                </div>

              </div> 

              <div> 
                
                <div class="info-box">
                  
                  <span class="info-box-icon bg-gray"><i class="fa fa-calculator"></i></span>

                  <div class="info-box-content">

                    <span class="info-box-text">Contaduria</span>

                    <span class="info-box-number">
                      <input 
                      type="text" 
                      name="contaduria" 
                      id="contaduria"
                      readonly="" 
                      style="background: none; border:none; font-size: 20pt; font-weight: 600; width: 30px"
                      />
                    </span>

                  </div>

                </div>

              </div>

              <div> 
                
                <div class="info-box">
                  
                  <span class="info-box-icon bg-gray"><i class="fa fa-legal"></i></span>

                  <div class="info-box-content">

                    <span class="info-box-text">Derecho</span>

                    <span class="info-box-number">
                      <input 
                      type="text" 
                      name="derecho" 
                      id="derecho"
                      readonly="" 
                      style="background: none; border:none; font-size: 20pt; font-weight: 600; width: 30px"
                    />
                    </span>

                  </div>

                </div>

              </div>

              <div> 
                
                <div class="info-box">
                  
                  <span class="info-box-icon bg-gray"><i class="fa fa-briefcase"></i></span>

                  <div class="info-box-content">

                    <span class="info-box-text">Agronomia</span>

                    <span class="info-box-number">
                      <input 
                      type="text" 
                      name="agronomia" 
                      id="agronomia"
                      readonly="" 
                      style="background: none; border:none; font-size: 20pt; font-weight: 600; width: 30px"
                      />
                    </span>

                  </div>

                </div>

              </div>

              <div> 
                
                <div class="info-box">
                  
                  <span class="info-box-icon bg-gray"><i class="fa fa-briefcase"></i></span>

                  <div class="info-box-content">

                    <span class="info-box-text">Turismo</span>

                    <span class="info-box-number">
                      <input 
                      type="text" 
                      name="turismo" 
                      id="turismo"
                      readonly="" 
                      style="background: none; border:none; font-size: 20pt; font-weight: 600; width: 30px"
                      />
                    </span>

                  </div>

                </div>

              </div>

            </div>

            <div class="col-sm-8 col-md-9 col-lg-9">
              
              <br><br>
              <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto">
                
              </div>

            </div>

            </div>

            <div class="row">
              <div class="col-sm-10 col-md-10 col-lg-10" style="margin-left:7%;">
              
              <div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

              </div>

            </div>
          

          </div>
                   
        </div>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL PARA MOSTAR LISTA DE EGRESADOS
======================================-->
<div id="listaEgresados" class="modal fade" role="dialog" data-backdrop="false">

  <div class="modal-dialog" style="width:1050px;">

    <div class="modal-content">

      <div class="modal-header" style="background:#3C6943; color:#fff;padding:2px 10px;">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h3 class="text-center" style="color:#fff;"><i class="fa fa-user-plus"></i> Lista de egresados registrados en el SSE</h3>

      </div>

      <div class="panel-body table-responsive" id="listadoregistros">

        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
              
          <thead>

            <th>Estado de encuesta</th>
            <th>Licenciatura</th>
            <th>Cuenta</th>
            <th>Nombre</th>
            <th>Apepat</th>
            <th>Apemat</th>
            <th>ingreso</th>
            <th>egreso</th>

          </thead>

          <tbody>                            

          </tbody>
                          
        </table>

      </div>

    </div>

  </div>

</div>

<!--=====================================
MODAL PARA MOSTAR LISTA DE EMPRESAS
======================================-->
<div id="listaEmpresas" class="modal fade" role="dialog" data-backdrop="false">

  <div class="modal-dialog" style="width:1050px;">

    <div class="modal-content">

      <div class="modal-header" style="background:#3C6943; color:#fff;padding:2px 10px;">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h3 class="text-center" style="color:#fff;"><i class="fa fa-user-plus"></i> Lista de las empresas registradas en el SSE</h3>

      </div>

      <div class="panel-body table-responsive">

        <table id="tbllistadoEmpresas" class="table table-striped table-bordered table-condensed table-hover">
              
          <thead>

            <th>#</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Pag. web</th>
            <th>Direccion</th>
            <th>Correo</th>

          </thead>

          <tbody>                            

          </tbody>
                          
        </table>

      </div>

    </div>

  </div>

</div>

<!--=====================================
MODAL PARA MOSTAR LISTA DE Administradores
======================================-->
<div id="listaAdmins" class="modal fade" role="dialog" data-backdrop="false">

  <div class="modal-dialog" style="width:1050px;">

    <div class="modal-content">

      <div class="modal-header" style="background:#3C6943; color:#fff;padding:2px 10px;">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h3 class="text-center" style="color:#fff;"><i class="fa fa-user-plus"></i> Lista de administradores registrados en el SSE</h3>

      </div>

      <div class="panel-body table-responsive">

        <table id="tbllistadoAdmins" class="table table-striped table-bordered table-condensed table-hover">
              
          <thead>

            <th>#</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Correo</th>

          </thead>

          <tbody>                            

          </tbody>
                          
        </table>

      </div>

    </div>

  </div>

</div>


<script type="text/javascript" src="scripts/escritorio.js"></script>


<script type="text/javascript">

//FUNCION PARA MANDAR A TRAER DATOS DE LA BD
function EgresadosinContestar()
{
  $.ajax({
    url: "../ajax/escritorio.php?op=egresadosincontestar",
    type: "GET",
    success: function(datos)
    {
      //VARIABLES  DE LA CARRERA DE DERECHO
      var contestado_egre_derecho = parseInt(datos[12]);
      var total_egre_derecho = parseInt(datos[32]);
      var sincontestra_derecho = total_egre_derecho - contestado_egre_derecho;

      //VARIABLES PARA LA CARRERA DE INFORMATICA
      var contestado_egre_informatica = parseInt(datos[51]);
      var total_egre_informatica = parseInt(datos[64]);
      var sincontestra_informatica = total_egre_informatica - contestado_egre_informatica;

      //VARIABLES PARA LA CARRERA DE CONTADURIA
      var contestado_egre_contaduria = parseInt(datos[82]);
      var total_egre_contaduria = parseInt(datos[95]);
      var sincontestra_contaduria = total_egre_contaduria - contestado_egre_contaduria;

      //CARIBLES PARA LA CARRERA DE AGRONOMIA
      var contestado_egre_agronomia = parseInt(datos[112]);
      var total_egre_agronomia = parseInt(datos[125]);
      var sincontestra_agronomia = total_egre_agronomia - contestado_egre_agronomia;

      //VARIABLES PARA LA CARRERA DE TURISMO
      var contestado_egre_turismo = parseInt(datos[140]);
      var total_egre_turismo = parseInt(datos[153]);
      var sincontestra_turismo = total_egre_turismo - contestado_egre_turismo;

      var total_sin_contestar = sincontestra_derecho +
                                sincontestra_informatica +
                                sincontestra_contaduria +
                                sincontestra_agronomia +
                                sincontestra_turismo;
      

      //FUNCION PARA LA GRAFICA DE BARRAS
      Highcharts.chart('container2', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Estadistica de las encuestas'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
                'Derecho',
                'Informatica',
                'Contaduria',
                'Agronomia',
                'Turismo'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Cantidad'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:1f} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Terminado',
            data: [contestado_egre_derecho, contestado_egre_informatica, contestado_egre_contaduria, contestado_egre_agronomia, contestado_egre_turismo]

        }, {
            name: 'Sin contestar',
            data: [sincontestra_derecho, sincontestra_informatica, sincontestra_contaduria, sincontestra_agronomia, sincontestra_turismo]

        }, {
            name: 'Total de egresados',
            data: [total_egre_derecho, total_egre_informatica, total_egre_contaduria, total_egre_agronomia, total_egre_turismo]

        }]
      });
          }
  });
}
EgresadosinContestar();
</script>


