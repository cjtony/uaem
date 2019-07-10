function init()
{
  EgresadosinContestar();

  PorcentajeCarrera();

  $(".table").DataTable();
}

//Funcion para la grafica de barras
function EgresadosinContestar()
{ 
      //FUNCION PARA LA GRAFICA DE BARRAS
      Highcharts.chart('container2', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Resultados'
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
            name: 'Total de egresados',
            data: [1,2,4,5,6]

        }, {
            name: 'Con empleo',
            data: [2,3,4,1,3]

        }, {
            name: 'Sin empleo',
            data: [1,2,3,2,1]

        }]
      });
}

$("#EgreLaborando").click(function(){
  $("#ListaEgresadosLaborando").show('2');
  $("#icoClose1").removeClass('ocult');
});

$("#icoClose1").click(function() {
    $("#icoClose1").addClass('ocult');
    $("#ListaEgresadosLaborando").hide('2');
});

$("#EgreNoLaborando").click(function(){
  $("#ListaEgresadosNoLaborando").show('2');
  $("#icoClose2").removeClass('ocult');
});

$("#icoClose2").click(function() {
    $("#icoClose2").addClass('ocult');
    $("#ListaEgresadosNoLaborando").hide('2');
});

$("#Porcentaje").click(function(){
  $("#PorcentajeCarreras").show('2');
  $("#icoClose3").removeClass('ocult');
});

$("#icoClose3").click(function() {
    $("#icoClose3").addClass('ocult');
    $("#PorcentajeCarreras").hide('2');
});

function PorcentajeCarrera()
{
  Highcharts.chart('container', {

    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text:''
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
            y: 12,
        }, {
            name: 'Contaduria',
            y: 11
        }, {
            name: 'Derecho',
            y: 18
        }, {
            name: 'Agronomia',
            y: 14
        }, {
            name: 'Turismo',
            y: 12
        }]
    }]
});
}

init();