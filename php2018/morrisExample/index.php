<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Grafica de superficie</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  </head>
  <body>
    <div id="grafico" style="height: 500px;"></div>
    <script type="text/javascript">
    var datos=[
      { year: 'España', value: 200000 },
      { year: 'Francia', value: 1065767 },
      { year: 'Alemania', value: 5443 },
    ];
    var datosAnyos=[
    { year: '2008', value: 20 },
    { year: '2009', value: 10 },
    { year: '2010', value: 5 },
    { year: '2011', value: 5 },
    { year: '2012', value: 20 }
  ];
    new Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'grafico',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: datos,
        // The name of the data record attribute that contains x-values.
        xkey: 'year',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['value'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Value'],
        parseTime: false
      });
    </script>
  </body>
</html>
