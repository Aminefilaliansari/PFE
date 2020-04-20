<!DOCTYPE html>
<html>
<head>
		<title> Consultation projet </title>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./vendor/bootstrap/css/bootstrap.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./css/util.css">
  <link rel="stylesheet" type="text/css" href="./css/main.css">
<!--===============================================================================================-->

</head>
<header>
 <div style="background: #f2f2f2;"> 
<?php  
include "MenuDesign.php";
?>
</div>
</header>
<body>




    <div class="container-main100">
      <div class="wrap-main-body">



<div class="container">
<div class="row justify-content-center">

<table class="table">
 <thead>
   <tr>
     <th>ID Projet</th>
     <th>Titre de projet </th>
     <th>Nom d excute</th>
     <th colspan="2">Action</th>
   </tr>


 </thead> 
 
 <?php  


include("database.php");
 $sql = "SELECT * FROM projet";
$result = mysqli_query($bdd,$sql);


while ( $row = mysqli_fetch_array($result,MYSQLI_ASSOC) ) {  ?> 

<?php  
$iduser00=1;
 $sql0 = "SELECT NomExcute FROM distruberprojet WHERE iduser =".$iduser00;  
  $result0 = mysqli_query($bdd,$sql0);
  $row0 = mysqli_fetch_array($result0,MYSQLI_ASSOC);      
  $NomExcute= $row0["NomExcute"];
  
?>


<tr>
<td id="IdProjet"><?php echo $row["IdProjet"];  ?></td>
<td id="TitreProjet"><?php echo $row["TitreProjet"];  ?></td>
<td id="NomExcute"><?php echo $row0["NomExcute"];  ?> </td>
<td>
  <a href="ModifProjet.php?Modif=<?php echo $row["IdProjet"]; ?>" 
  class="btn btn-info" name="<?php echo $row["IdProjet"]; ?>">Modifer</a>
</td>
</tr>

<?php  
}
?>
 

</table>
</div>
</div>


</div>
</div>





<script>

function modifprojet(){

var IdProjet= $('#IdProjet').val();
var TitreProjet= $('#TitreProjet').val();  
var Description = $('#Description').val(); 
var Budget = $('#Budget').val(); 

$.ajax({
  type: "POST",
  url : "function.php?p=modif"
  data : "IdProjet="+IdProjet+"& TitreProjet="+TitreProjet+"& Description="+Description+"& Budget="+Budget,
  success: function(msg) {

    alert("Success");
  } 

});
}


function supprojet(){

var IdProjet= $('#id').val();
var TitreProjet= $('#id').val();  
var Description = $('#id').val(); 
var Budget = $('#id').val(); 

$.ajax({
  type: "POST",
  url : "function.php?p=sup"
  data : "IdProjet="+IdProjet+"& TitreProjet="+TitreProjet+"& Description="+Description+"& Budget="+Budget,
  success: function(msg) {

    alert("Success");
  } 

});


</script>





 <!--===============================================================================================-->
<script src="./vendor/bootstrap/js/bootstrap.js"></script>
<script src="./js/main.js"></script>

</body>
</html>