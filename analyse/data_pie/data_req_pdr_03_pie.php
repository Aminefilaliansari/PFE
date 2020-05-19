<?php  


require "config.php";


if (isset($_POST['ajax']) && isset($_POST['provaince03'])) {


if($_POST['provaince03']==""){


$stmt = $connection->query("

SELECT CONCAT(zone.commune,' , ', zone.provaince), COUNT(projet.IdProjet) FROM `projet` INNER JOIN zone ON projet.IdProjet=zone.idprojet
WHERE projet.booleenPDR=1
GROUP BY zone.commune

  ");



}

else {

$stmt = $connection->query("

SELECT CONCAT(zone.commune,' ,  ', zone.provaince), COUNT(projet.IdProjet), zone.provaince FROM `projet` INNER JOIN zone ON projet.IdProjet=zone.idprojet 
WHERE projet.booleenPDR=1 AND zone.provaince = '".$_POST['provaince03']."' 
GROUP BY zone.commune
  ");


    }






$php_data_array = Array(); // create PHP array
while ($row = $stmt->fetch_row()) {
   
   $php_data_array[] = $row; // Adding to array
   }

print_r( $php_data_array);
// You can display the json_encode output here. 
                         

// Transfor PHP array to JavaScript two dimensional array 
echo "<script>
        var my_2d03 = ".json_encode($php_data_array)."
</script>


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
    for(i = 0; i < my_2d03.length; i++)
    data.addRow([my_2d03[i][0], parseInt(my_2d03[i][1])]);
// above row adds the JavaScript two dimensional array data into required chart format
    var options = {title:'3  - Proposition de la relation de projet avec le PDR selon Commune et provaince :  ',
                       width:1150,
                       height:700};

        // Instantiate and draw the chart
        var chart = new google.visualization.PieChart(document.getElementById('req_pdr_03_pie'));
        chart.draw(data, options);
      }
</script>


";


  exit;


  
}





?>