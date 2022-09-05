<?php
    include_once("./template.php")
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Currículo</title>
        <link rel="stylesheet" href="estilo.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    </head>
    <body>
        <main>
            <div class="cabecalho">
                <img class="icons" src="./image/habilidades.png" alt="">
                <h1>Habilidades</h1>
            </div>

            <div class="gd-1">
                <h2 class="title-curso">Google Charts</h2>
                <script type="text/javascript">
                    google.charts.load("current", {packages:["corechart"]});
                    google.charts.setOnLoadCallback(drawChart);
                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                        ['Task', 'Hours per Day'],
                        ['Work',     11],
                        ['Eat',      2],
                        ['Commute',  2],
                        ['Watch TV', 2],
                        ['Sleep',    7]
                        ]);

                        var options = {
                        title: 'My Daily Activities',
                        is3D: true,
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                        chart.draw(data, options);
                    }
                </script>
                <div id="piechart_3d" style="width: 600px; height: 300px;"></div>
                 
            </div>

            <div class="gd-2">
                <h2 class="title-curso">Microsoft Office - Completo</h2>
                <p>Excel(Avançado)</p>
                <p>Concluído</p> 
            </div>

            

        </main>
    </body>

</html>