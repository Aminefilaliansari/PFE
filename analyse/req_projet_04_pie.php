<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
<head>
<title></title>
</head>
<body >
<?Php
require "config.php";// Database connection

if($stmt = $connection->query("

SELECT specialiteprojet,COUNT(IdProjet)  FROM `projet`
GROUP BY specialiteprojet

  ")){

$php_data_array = Array(); // create PHP array
while ($row = $stmt->fetch_row()) {
   
   $php_data_array[] = $row; // Adding to array
   }

}else{
echo $connection->error;
}
//print_r( $php_data_array);
// You can display the json_encode output here. 
                         

// Transfor PHP array to JavaScript two dimensional array 
echo "<script>
        var my_2d004 = ".json_encode($php_data_array)."
</script>";
?>


<div id="req_projet_04_pie"></div>
</body>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
		for(i = 0; i < my_2d004.length; i++)
    data.addRow([my_2d004[i][0], parseInt(my_2d004[i][1])]);
// above row adds the JavaScript two dimensional array data into required chart format
    var options = {title:'',
                       width:1150,
                       height:700};

        // Instantiate and draw the chart
        var chart = new google.visualization.PieChart(document.getElementById('req_projet_04_pie'));
        chart.draw(data, options);
      }
</script>
</html>







