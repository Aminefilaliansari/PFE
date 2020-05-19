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

<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
 <thead>
   <tr>
     <th class="th-sm">ID Projet</th>
     <th class="th-sm">Titre de projet </th>
     <th class="th-sm">Etat d'avancement</th> 
     <th  class="th-sm" colspan="2">Action</th>
   </tr>


 </thead> 
 
 <?php  


include("database.php");
 $sql = "SELECT * FROM projet INNER JOIN avancementprojet on projet.IdProjet = avancementprojet.idprojet";
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
<td id="TitreProjet">

<?php if($row["Etat"]==NULL){echo "0%";}
      else {echo $row["Etat"]."%" ;}

 ?>

 </td>
<td>
  <a href="Etat_avancement.php?Etat=<?php echo $row["IdProjet"]; ?>" 
  class="btn btn-warning" name="<?php echo $row["IdProjet"]; ?>">Modifer Etat D'avancement</a>
  <a href="detail.php?idprojet=<?php echo $row["IdProjet"]; ?>" 
  class="btn btn-info" name="<?php echo $row["IdProjet"]; ?>">Detail de projet</a>
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



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
  
$(document).ready(function () {
  $('#dtBasicExample').DataTable({
    "pagingType": "simple" // "simple" option for 'Previous' and 'Next' buttons only
  });
  $('.dataTables_length').addClass('bs-select');
});

</script>



 <!--===============================================================================================-->
<script src="./vendor/bootstrap/js/bootstrap.js"></script>
<script src="./js/main.js"></script>

</body>
</html>