 <?php
$id =  $_POST['id'];
  $nom = $_POST['nom'];
  $etat = $_POST['etat'];
  $autre = $_POST['autre'];
  $commentaire = $_POST['commentaire'];
if (!empty($id) || !empty($nom) || !empty($etat) || !empty($autre) || !empty($commentaire)) {
 
    //connection
  include('database.php');

    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT id From avancementprojet  Where id = ? Limit 1";
     $INSERT = "INSERT Into projet (id,nom,etat,autre,commentaire) values(?,?,?,?,?)";
     //Prepare statement
   $stmt = $bdd->prepare($SELECT);
     $stmt->bind_param("i", $id);
     $stmt->execute();
     $stmt->bind_result($id);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==1) {
      $stmt->close();
      $stmt = $bdd->prepare($INSERT);
      $stmt->bind_param("isiss", $id, $nom, $etat, $autre, $commentaire);
      $stmt->execute();
      echo "Insertion Succes";
     } else {
      echo "Erreur";
     }
     $stmt->close();
     $bdd->close();
    }
} else {
 echo "Cases vides";
 die();
}
?>