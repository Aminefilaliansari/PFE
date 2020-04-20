 <?php
  $nom = $_POST['nom'];
  $role = $_POST['type'];
  $tel = $_POST['tel'];
  $mail = $_POST['mail'];
  $password = $_POST['pass'];
  $adresse = $_POST['adresse'];
if (!empty($nom) || !empty($tel) || !empty($mail)|| !empty($password)|| !empty($role) || !empty($adresse)){
 
    //connection
	include('database.php');

    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT idUser From user Where idUser = ? Limit 1";
     $INSERT = "INSERT Into user (role,nom,tel,email,password,adresse) values(?,?,?,?,?,?)";
     //Prepare statement
	 $stmt = $bdd->prepare($SELECT);
     $stmt->bind_param("s", $mail);
     $stmt->execute();
     $stmt->bind_result($mail);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $bdd->prepare($INSERT);
      $stmt->bind_param("ssisss",$role,$nom,$tel,$mail,$password,$adresse);
      $stmt->execute();
      echo "Enregistrement réussi, <a href='authentification.php'> Vous pouvez connecter au votre compte</a>";
	  
     } else {
      echo "Id déja enregistré";
     }
     $stmt->close();
     $bdd->close();
    }
} else {
 echo "Cases vides";
 die();
}
?>