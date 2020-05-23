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

(SELECT zone.Typecommune, SUM(financeprojet.Contrib_Etabli) FROM `zone` INNER JOIN financeprojet ON zone.idprojet = financeprojet.idprojet
WHERE Typecommune='Rural' 
 GROUP BY zone.Typecommune
)
UNION

(SELECT zone.Typecommune, SUM(financeprojet.Contrib_Etabli) FROM `zone` INNER JOIN financeprojet ON zone.idprojet = financeprojet.idprojet
WHERE Typecommune='Urbain' 
 GROUP BY zone.Typecommune
)

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
        var my_2d77 = ".json_encode($php_data_array)."
</script>
"

;


?>





<div class="row">
<form>
<label style="margin-top: 30px;margin-left:217px;">Provaince : </label style="">
<div  style="margin-left:217px;width: 350px;">

<select class="form-control" name="provaince77" id="provaince77" placeholder="">
<option></option>

 <?php  
           
               $sql = "SELECT DISTINCT(provaince) FROM `zone`";
              $result = mysqli_query($connection,$sql);





             while ( $row = mysqli_fetch_array($result,MYSQLI_ASSOC) ) {  ?> 

             <option><?php echo $row['provaince'];  ?></option>
            <?php }  ?>

</select>


</div>
<div id="req_fin_77_pie" style="margin-top: 0px;"></div>
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
		for(i = 0; i < my_2d77.length; i++)
    data.addRow([my_2d77[i][0], parseInt(my_2d77[i][1])]);
// above row adds the JavaScript two dimensional array data into required chart format
    var options = {title:' ',
                       width:1150,
                       height:700};

        // Instantiate and draw the chart
        var chart = new google.visualization.PieChart(document.getElementById('req_fin_77_pie'));
        chart.draw(data, options);
      }
</script>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

// On reprend le même id que dans le précédent chapitre

 $(document).ready(function(){


$("#provaince77").change(function(e){
   //alert('La deuxième zone a été mise à jour');
   e.preventDefault();

    var provaince77 = $('#provaince77').val();



     $.ajax({
            type: 'POST',
            url: 'analyse/data_pie/data_req_fin_77_pie.php', 
            data: {ajax: 1,provaince77: provaince77}
        })
        .done(function(data){
             
            // show the response
            //alert( "YES." );
            $('#req_fin_77_pie').html(data);
             
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







