<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
<body >
<?Php
require "config.php";// Database connection

if($stmt02 = $connection->query("

SELECT  zone.provaince, COUNT(projet.IdProjet) FROM `projet` INNER JOIN zone ON projet.IdProjet=zone.idprojet
WHERE projet.booleenPDR=1
GROUP BY zone.provaince


  ")){

$php_data02_array = Array(); // create PHP array
while ($row02 = $stmt02->fetch_row()) {
   
   $php_data02_array[] = $row02; // Adding to array
   }

}else{
echo $connection->error;
}
//print_r( $php_data02_array);
// You can display the json_encode output here. 
                         

// Transfor PHP array to JavaScript two dimensional array 
echo "<script>
        var my_2d = ".json_encode($php_data02_array)."
</script>";
?>


<div id="req_pdr_02_pie"></div>
</body>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
 google.charts.load('current', {'packages':['corechart']});
     // Draw the pie chart when Charts is loaded.
      google.charts.setOnLoadCallback(draw_my_chart02);
      // Callback that draws the pie chart
      function draw_my_chart02() {
        // Create the data table .
        var data02 = new google.visualization.DataTable();
        data02.addColumn('string', '02');
        data02.addColumn('number', '02');
		for(i = 0; i < my_2d.length; i++)
    data02.addRow([my_2d[i][0], parseInt(my_2d[i][1])]);
// above row adds the JavaScript two dimensional array data into required chart format
    var options02 = {title:'',
                       width:1150,
                       height:700};

        // Instantiate and draw the chart
        var chart = new google.visualization.PieChart(document.getElementById('req_pdr_02_pie'));
        chart.draw(data02, options02);
      }
</script>
</html>







