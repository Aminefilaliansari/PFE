<?php  

include ("database.php");

$page = isset($_GET('Modif'));
echo "string".$page;



if ($page=='Modif') {
	
	$IdProjet= $_POST['IdProjet'];
	$TitreProjet= $_POST['TitreProjet'];
	$Description= $_POST['Description'];
	$Budget = $_POST['Budget'];

}


if ($page=='Supp') {
	
	$IdProjet= $_POST['IdProjet'];
	$TitreProjet= $_POST['TitreProjet'];
	$Description= $_POST['Description'];
	$Budget = $_POST['Budget'];

    

  $req = "INSERT INTO Projet ( TitreProjet , Description , Budget ) VALUES ('" . $TitreProjet . "' , '" . $Description . "' , '" . $Budgets .  " ') ";
                
   mysqli_query($bdd,$req);
   echo  "<p style='color:green;text-align:center;'>Le produit est ajouteé avec succès </p>";
  

}

?>




