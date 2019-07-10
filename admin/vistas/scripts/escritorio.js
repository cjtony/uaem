var tabla;

function init(){

	listarEgresados();
  listarEmpresas();
  listarAdmins();
	numeroEgresados();
  numeroEmpresas();
  numeroAdmins();

  egresadoInfo();

    //Variables para la grafica de barras
    //google.charts.load("current", {packages:['corechart']});
    //google.charts.setOnLoadCallback(drawChart);
    //--------->

    //Funcion para la grafica de pastel
	

}

//funcion para la grafica de barras
/*function drawChart() {

        var num = 18;
      var data = google.visualization.arrayToDataTable([
        ["Element", "Total", { role: "style" } ],
        ["Informatica", 10, "#BCF5A9"],
        ["Contaduria", 80, "#81F79F"],
        ["Derecho", 19, "#BCF5A9"],
        ["Agronimia", 21, "color: #81F79F"],
        ["Turismo", num, "color: #BCF5A9"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "<p>Almunos</p>",
        width: 520,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
}
*/
//funcion para contar el numero de egresados registrados en el sistema
function numeroEgresados()
{
	$.ajax({
		url: "../ajax/escritorio.php?op=num_egresados",
		type: "get",
		success: function(g){

			 $("#num_egresados").val(g);

		}
	});
}
//funcion para contar el numero de registros de empresas en el sistemas
function numeroEmpresas()
{
    $.ajax({
       url: "../ajax/escritorio.php?op=num_empresas",
       type: "get",
       success: function(g)
       {
            $("#num_empresas").val(g);
       }
    });
}

//funcion para contar el numero de registros de administradores en el sistemas
function numeroAdmins()
{
    $.ajax({
       url: "../ajax/escritorio.php?op=num_admins",
       type: "get",
       success: function(g)
       {
            $("#num_admins").val(g);
       }
    });

    TotalRegistros();
}

function TotalRegistros()
{
    $.ajax({
       url: "../ajax/escritorio.php?op=totalregistros",
       type: "GET",
       success: function(g)
       {
            $("#totalregistros").val(g);
       } 
    });

}

function listarEgresados(){

	tabla=$('#tbllistado').dataTable(
	{
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: 'Bfrtip',//Definimos los elementos del control de tabla
	    buttons: [		          
		            
		        ],
		"ajax":
				{
					url: '../ajax/escritorio.php?op=listarEgresados',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"bDestroy": true,
		"iDisplayLength": 10,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
};

function listarEmpresas(){

    tabla=$('#tbllistadoEmpresas').dataTable(
    {
        "aProcessing": true,//Activamos el procesamiento del datatables
        "aServerSide": true,//Paginación y filtrado realizados por el servidor
        dom: 'Bfrtip',//Definimos los elementos del control de tabla
        buttons: [                
                    
                ],
        "ajax":
                {
                    url: '../ajax/escritorio.php?op=listarEmpresas',
                    type : "get",
                    dataType : "json",                      
                    error: function(e){
                        console.log(e.responseText);    
                    }
                },
        "bDestroy": true,
        "iDisplayLength": 10,//Paginación
        "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
    }).DataTable();
};

function listarAdmins(){

    tabla=$('#tbllistadoAdmins').dataTable(
    {
        "aProcessing": true,//Activamos el procesamiento del datatables
        "aServerSide": true,//Paginación y filtrado realizados por el servidor
        dom: 'Bfrtip',//Definimos los elementos del control de tabla
        buttons: [                
                    
                ],
        "ajax":
                {
                    url: '../ajax/escritorio.php?op=listarAdmins',
                    type : "get",
                    dataType : "json",                      
                    error: function(e){
                        console.log(e.responseText);    
                    }
                },
        "bDestroy": true,
        "iDisplayLength": 10,//Paginación
        "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
    }).DataTable();
};


//funcion para contar el numero de egresados de cada carrera que han contestado la encuesta
function egresadoInfo()
{
  $.ajax({
    url: "../ajax/escritorio.php?op=egresadoinfo",
    type: "GET",
    success: function(dato)
    {
        //alert(dato);
        $("#derecho").val(dato[12]);
        var derecho = parseInt(dato[12]);

        $("#informatica").val(dato[31]);
        var informatica = parseInt(dato[31]);
        
        $("#contaduria").val(dato[49]);
        var contaduria = parseInt(dato[49]);

        $("#agronomia").val(dato[66]);
        var agronomia = parseInt(dato[66]);

        $("#turismo").val(dato[81]);
        var turismo = parseInt(dato[81]);
      

        Highcharts.chart('container', {

    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Porcentaje de las carreras que han contestado la encuesta'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Porcentaje',
        colorByPoint: true,
        data: [{
            name: 'Informatica',
            y: informatica,
            sliced: true,
            selected: true
        }, {
            name: 'Contaduria',
            y: contaduria
        }, {
            name: 'Derecho',
            y: derecho
        }, {
            name: 'Agronomia',
            y: agronomia
        }, {
            name: 'Turismo',
            y: turismo
        }]
    }]
});
      
    }

  });

}

init();