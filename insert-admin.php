 <?php
  $nom = $_POST['nom'];
  $tel = $_POST['tel'];
  $mail = $_POST['mail'];
  $password = $_POST['pass'];
if (!empty($nom) || !empty($tel) || !empty($mail)|| !empty($password))  {
 
    //connection
	include('database.php');

    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT idAdmin From admin Where idAdmin = ? Limit 1";
     $INSERT = "INSERT Into admin (Nom,email,password,tel) values(?,?,?,?)";
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
      $stmt->bind_param("ssis",$nom,$mail,$password,$tel);
      $stmt->execute();
      echo "Enregistrement réussi, <a href='authentification.php'>Vous pouvez connecter au votre compte</a>";
	  
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