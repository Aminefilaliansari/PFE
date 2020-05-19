<?php  


require "config.php";


if (isset($_POST['ajax']) && isset($_POST['annee03'])) {


if($_POST['annee03']==""){


$stmt = $connection->query("

SELECT concat(projet.champprojet, '    ', YEAR(dateprojet.dateAuthentif) ),COUNT(projet.IdProjet), projet.* , dateprojet.*  
FROM `projet` INNER JOIN dateprojet ON projet.IdProjet=dateprojet.idprojet
GROUP BY YEAR(dateprojet.dateAuthentif)



  ");



}

else {

$stmt = $connection->query("


SELECT concat(projet.champprojet, '    ', YEAR(dateprojet.dateAuthentif) ),COUNT(projet.IdProjet), projet.* , dateprojet.*  
FROM `projet` INNER JOIN dateprojet ON projet.IdProjet=dateprojet.idprojet
WHERE YEAR(dateprojet.dateAuthentif) = '".$_POST['annee03']."'
GROUP BY YEAR(dateprojet.dateAuthentif)


  ");


    }






$php_data_array = Array(); // create PHP array
while ($row = $stmt->fetch_row()) {
   
   $php_data_array[] = $row; // Adding to array
   }

//print_r( $php_data_array);
// You can display the json_encode output here. 
                         

// Transfor PHP array to JavaScript two dimensional array 
echo "<script>
        var my_2d003 = ".json_encode($php_data_array)."
</script>


<script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
<script>
 google.charts.load('current', {'packages':['corechart']});
     // Draw the pie chart when Charts is loaded.
      google.charts.setOnLoadCallback(draw_my_chart);
      // Callback that draws the pie chart
      function draw_my_chart() {
        // Create the data table .
        var data = new google.visualization.DataTable();
        data.addColumn('string', '');
        data.addColumn('number', '');
    for(i = 0; i < my_2d003.length; i++)
    data.addRow([my_2d003[i][0], parseInt(my_2d003[i][1])]);
// above row adds the JavaScript two dimensional array data into required chart format
    var options = {title:'3 -  Proposition de projet selon l annee projet et champ de projet : ',
                       width:1150,
                       height:700};

        // Instantiate and draw the chart
        var chart = new google.visualization.PieChart(document.getElementById('req_projet_03_pie'));
        chart.draw(data, options);
      }
</script>



";


  exit;


  
}





?>