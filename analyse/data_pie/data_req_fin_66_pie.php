<?php  


require "config.php";


if (isset($_POST['ajax']) && isset($_POST['provaince66'])) {


if($_POST['provaince66']==""){


$stmt = $connection->query("

(SELECT zone.Typecommune, SUM(financeprojet.Contrib_Etat) FROM `zone` INNER JOIN financeprojet ON zone.idprojet = financeprojet.idprojet
WHERE Typecommune='Rural' 
 GROUP BY zone.Typecommune
)
UNION

(SELECT zone.Typecommune, SUM(financeprojet.Contrib_Etat) FROM `zone` INNER JOIN financeprojet ON zone.idprojet = financeprojet.idprojet
WHERE Typecommune='Urbain' 
 GROUP BY zone.Typecommune
)

  ");



}

else {

$stmt = $connection->query("


(SELECT zone.Typecommune, SUM(financeprojet.Contrib_Etat) FROM `zone` INNER JOIN financeprojet ON zone.idprojet = financeprojet.idprojet
WHERE Typecommune='Rural' AND zone.provaince='".$_POST['provaince66']."'
 GROUP BY zone.Typecommune
)
UNION

(SELECT zone.Typecommune, SUM(financeprojet.Contrib_Etat) FROM `zone` INNER JOIN financeprojet ON zone.idprojet = financeprojet.idprojet
WHERE Typecommune='Urbain' AND zone.provaince='".$_POST['provaince66']."'
 GROUP BY zone.Typecommune
)
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
        var my_2d66 = ".json_encode($php_data_array)."
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
    for(i = 0; i < my_2d66.length; i++)
    data.addRow([my_2d66[i][0], parseInt(my_2d66[i][1])]);
// above row adds the JavaScript two dimensional array data into required chart format
    var options = {title:' ',
                       width:1150,
                       height:700};

        // Instantiate and draw the chart
        var chart = new google.visualization.PieChart(document.getElementById('req_fin_66_pie'));
        chart.draw(data, options);
      }
</script>



";


  exit;


  
}





?>