<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
<body >
<?Php
require "config.php";// Database connection

if($stmt01 = $connection->query("


SELECT  YEAR(dateprojet.dateAuthentif), COUNT(projet.IdProjet) FROM `projet` INNER JOIN dateprojet ON projet.IdProjet=dateprojet.idprojet
WHERE projet.booleenPDR=1
GROUP BY YEAR(dateprojet.dateAuthentif)


  ")){

$php_data01_array = Array(); // create PHP array
while ($row01 = $stmt01->fetch_row()) {
   
   $php_data01_array[] = $row01; // Adding to array
   }

}else{
echo $connection->error;
}
//print_r( $php_data01_array);
// You can display the json_encode output here. 
                         

// Transfor PHP array to JavaScript two dimensional array 
echo "<script>
        var my_2d02 = ".json_encode($php_data01_array)."
</script>";
?>


<div id="req_pdr_01_pie"></div>
</body>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
 google.charts.load('current', {'packages':['corechart']});
     // Draw the pie chart when Charts is loaded.
      google.charts.setOnLoadCallback(draw_my_chart01);
      // Callback that draws the pie chart
      function draw_my_chart01() {
        // Create the data table .
        var data01 = new google.visualization.DataTable();
        data01.addColumn('string', '01');
        data01.addColumn('number', '01');
		for(i = 0; i < my_2d02.length; i++)
    data01.addRow([my_2d02[i][0], parseInt(my_2d02[i][1])]);
// above row adds the JavaScript two dimensional array data into required chart format
    var options01 = {title:'',
                       width:1150,
                       height:700};

        // Instantiate and draw the chart
        var chart = new google.visualization.PieChart(document.getElementById('req_pdr_01_pie'));
        chart.draw(data01, options01);
      }
</script>
</html>







