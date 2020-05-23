<?php  
include ("database.php");
$IDdelete = $_GET['delete'];
echo "ID delete : ".$IDdelete;





 $req="


    DELETE FROM `projet` WHERE IdProjet = ".$IDdelete."



 ";

  echo "Req est :".$req;
  mysqli_query($bdd,$req);


echo "<div class='alert alert-success' role='alert'>
  Supprimer avec succèe
</div>";


header('Location:Consultation-projet.php');
exit();







?>
