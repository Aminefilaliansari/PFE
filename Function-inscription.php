 <?php
$id =  $_POST['id'];
  $nom = $_POST['nom'];
  $tel = $_POST['tel'];
  $adresse = $_POST['adr'];
  $mail = $_POST['mail'];
  $password = $_POST['pass'];
if (!empty($id) || !empty($nom) || !empty($tel) || !empty($adresse) || !empty($mail)|| !empty($password))  {
 
    //connection
	include('database.php');

    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT idAgence From agen Where idAgence = ? Limit 1";
     $INSERT = "INSERT Into agence (idAgence,nom,tel,adresse,mail,password) values(?,?,?,?,?,?)";
     //Prepare statement
	 $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("i", $id);
     $stmt->execute();
     $stmt->bind_result($id);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("isisss", $id, $nom, $tel, $adresse, $mail,$password);
      $stmt->execute();
      echo "Enregistrement réussi, <a href='authentification.php'>Authentification</a>
";
	  
     } else {
      echo "Id déja enregistré";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "Cases vides";
 die();
}
?>