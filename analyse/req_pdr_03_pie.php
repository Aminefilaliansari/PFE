<?php require "config.php";// Database connection

 ?>

<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
<head>
<title></title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body >
<?Php



if($stmt = $connection->query("

SELECT  zone.commune, COUNT(projet.IdProjet) FROM `projet` INNER JOIN zone ON projet.IdProjet=zone.idprojet
WHERE projet.booleenPDR=1
GROUP BY zone.commune

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
        var my_2d03 = ".json_encode($php_data_array)."
</script>
"

;


?>





<span id="titreanalyse" class="main100-form-title">3  - Proposition de la relation de projet avec le PDR selon Commune et provaince :  </span>
<div class="row  justify-content-center"  style="text-align:center">
<form method="POST" action>
<label style="margin-top: 30px;">Provaince : </label style="">
<div  style="margin: auto;width: 350px;">
<input type="text" class="form-control" name="provaince03" id="provaince03" placeholder="">
<input type="button" class="main100-form-btn" value="Recherche" id="Rech03" name="Rech03" style="z-index: 2;position: relative;">
</div>
<div id="req_pdr_03_pie" style="margin-left: 178px; margin-top: -44px;"></div>
</form>
</div>






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






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

// On reprend le même id que dans le précédent chapitre

 $(document).ready(function(){


$("#Rech03").click(function(e){
   alert('La deuxième zone a été mise à jour');
   e.preventDefault();

    var provaince03 = $('#provaince03').val();



     $.ajax({
            type: 'POST',
            url: 'analyse/data_pie/data_req_pdr_03_pie.php', 
            data: {ajax: 1,provaince03: provaince03}
        })
        .done(function(data){
             
            // show the response
            //alert( "YES." );
            $('#req_pdr_03_pie').html(data);
             
        })
        .fail(function() {
         
            // just in case posting your form failed
            alert( "Posting failed." );
             
        });
 
        // to prevent refreshing the whole page page
        return false;


});

});

</script>




</html>







