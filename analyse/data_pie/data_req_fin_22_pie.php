<?php  


require "config.php";


if (isset($_POST['ajax']) && isset($_POST['commune22'])) {


if($_POST['commune22']==""){


$stmt = $connection->query("

(SELECT CONCAT(' ETAT ',zone.commune) as ann,SUM(financeprojet.Contrib_Etat) FROM `financeprojet`INNER JOIN zone ON financeprojet.idprojet = zone.idprojet
 
GROUP BY zone.commune )
UNION
(SELECT CONCAT(' ETABLISSEMENT ',zone.commune) as ann,SUM(financeprojet.Contrib_Etabli) FROM `financeprojet`INNER JOIN  zone ON financeprojet.idprojet = zone.IdZone

GROUP BY zone.commune )

  ");



}

else {

$stmt = $connection->query("


(SELECT CONCAT(' ETAT ',zone.commune) as ann,SUM(financeprojet.Contrib_Etat) FROM `financeprojet`INNER JOIN zone ON financeprojet.idprojet = zone.idprojet
WHERE zone.commune =  '".$_POST['commune22']."'
GROUP BY zone.commune )
UNION
(SELECT CONCAT(' ETABLISSEMENT ',zone.commune) as ann,SUM(financeprojet.Contrib_Etabli) FROM `financeprojet`INNER JOIN  zone ON financeprojet.idprojet = zone.IdZone
WHERE zone.commune =  '".$_POST['commune22']."'
GROUP BY zone.commune )

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
        var my_2d22 = ".json_encode($php_data_array)."
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
    for(i = 0; i < my_2d22.length; i++)
    data.addRow([my_2d22[i][0], parseInt(my_2d22[i][1])]);
// above row adds the JavaScript two dimensional array data into required chart format
    var options = {title:' ',
                       width:1150,
                       height:700};

        // Instantiate and draw the chart
        var chart = new google.visualization.PieChart(document.getElementById('req_fin_22_pie'));
        chart.draw(data, options);
      }
</script>



";


  exit;


  
}





?>