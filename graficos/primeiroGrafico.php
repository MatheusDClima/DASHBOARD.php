<html>
<head>
  <meta charset="utf-8">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Cidade', 'População', {
          role: 'annotation'
        }],
        <?php
        include('conexao.php');
        $sql = "SELECT * FROM cidades";
        $buscar = mysqli_query($conexao, $sql);

        while ($dados = mysqli_fetch_array($buscar)) {
          $cidade = $dados['Cidade'];
          $populacao = $dados['Populacao'];

        ?>

          ['<?php echo $cidade ?>', <?php echo $populacao ?>, <?= $populacao ?>],

        <?php
        }
        ?>
      ]);

      var options = {
        title: 'População das cidades',
        //curveType: 'function',
        legend: {
          position: 'top'
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('graficoLinha'));

      chart.draw(data, options);
    }
  </script>
</head>

<body>
  <div id="graficoLinha" style="height: 500px"></div>
</body>

</html>