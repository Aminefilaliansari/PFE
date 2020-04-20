<!DOCTYPE html>
<html>
<head>
		<title> Modifier </title>
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


<?php  
include ("database.php");
$page = $_GET['Modif'];
//echo "ID Modif : ".$page;
$ID_PROJET0=$page;
?>



<?php  
//LES CHAMPS

  $sql = "SELECT * FROM projet WHERE IdProjet = ".$ID_PROJET0;  
  $result = mysqli_query($bdd,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);  


?>




<?php
//MODIF  


  if (isset($_POST['Validerprojet'])  ) 
{

    //infoprojet

  $req_projet="UPDATE `projet` SET `TitreProjet`='".$_POST['TitreProjet'] ."',`typeprojet`='". $_POST['typeprojet'] ."',`sujetprojet`='". $_POST['sujetprojet'] ."',`textprojet`='". $_POST['textprojet'] ."',`objectifprojet`='". $_POST['objectifprojet'] ."',`specialiteprojet`='".$_POST['specialiteprojet'] ."',`champprojet`='".$_POST['champprojet'] ."',`indicenrprojet`='".$_POST['indicenrprojet'] ."',`voteprojet`='". $_POST['voteprojet'] ."',`normeExcutprojet`='". $_POST['normeExcutprojet'] ."',`indicesNRProjet`='". $_POST['indicesNRProjet'] ."',`booleenPDR`='". $_POST['booleenPDR'] ."',`SourcePDF`=NULL WHERE IdProjet = ".$ID_PROJET0;


//echo "Req_projet est :".$req_projet;
  mysqli_query($bdd,$req_projet);


 
    //DateProjet
  $req_dateprojet ="UPDATE `dateprojet` SET `dateAuthentif`='".$_POST['dateAuthentif']."',`dateDistribut`='".$_POST['dateDistribut']."',`dateMark`='".$_POST['dateMark']."',`dateExecut`='".$_POST['dateExecut']."' WHERE IdProjet =".$ID_PROJET0;

  //echo "Req-dateprojet :".$req_dateprojet;           
  mysqli_query($bdd,$req_dateprojet);



    //ZONE
 
  $req_zone = "UPDATE `zone` SET `region`='".$_POST['region']."',`provaince`='".$_POST['provaince']."',`commune`='".$_POST['commune']."' WHERE idprojet = ".$ID_PROJET0;

  //echo "Req-dateprojet :".$req_zone;           
  mysqli_query($bdd,$req_zone);

   
   // distuber
  $sql = "SELECT idUser FROM `user` WHERE Nom='".$_POST['nomdistruber']."'";  
  $result = mysqli_query($bdd,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);      
  $Iduser= $row["idUser"];
  //echo "ID_USER est :".$Iduser;
            

  $req_distruberprojet="UPDATE `distruberprojet` SET `idadmin`= 1,`iduser`='".$Iduser."',`NomExcute`='".$_POST['nomdistruber']."' WHERE idprojet =".$ID_PROJET0;

  //echo "Req-dateprojet :".$req_distruberprojet;           
  mysqli_query($bdd,$req_distruberprojet);         





   echo "<div class='alert alert-success' role='alert'>
  Le projet est modifier avec succèe
</div>";
  }
  
  
  ?>



  <div class="limiter">
    <div class="container-main100">
      <div class="wrap-main-body">

<form method="POST">

 <span class="main100-form-title p-b-26">
            Ajouter un projet
          </span>

  
<!--  TABLE  projet -->


<?php  
//LES CHAMPS TABLE PROJET

  $sql = "SELECT * FROM projet WHERE IdProjet = ".$ID_PROJET0;  
  $result = mysqli_query($bdd,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);  


?>

           <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="TitreProjet" id="TitreProjet" placeholder="Titre de projet *"
            value="<?php echo $row["TitreProjet"];?>" required>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="typeprojet" id="typeprojet" placeholder="Type projet *"  
            value="<?php echo $row["typeprojet"];?>" required>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="sujetprojet" id="sujetprojet" placeholder="Sujet de projet *" 
            value="<?php echo $row["sujetprojet"];?>" required>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="textprojet" id="textprojet" placeholder="Text de projet*" 
            value="<?php echo $row["textprojet"];?>" required>
            <span class="focus-input100"></span>
          </div> 

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="objectifprojet" id="objectifprojet" placeholder="Objectif du projet*" 
            value="<?php echo $row["objectifprojet"];?>" required>
            <span class="focus-input100"></span>
          </div> 

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="specialiteprojet" id="specialiteprojet" placeholder="Specialite projet*" 
            value="<?php echo $row["specialiteprojet"];?>" required>
            <span class="focus-input100"></span>
          </div> 

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="champprojet" id="champprojet" placeholder="champ de projet*" 
            value="<?php echo $row["champprojet"];?>" required>
            <span class="focus-input100"></span>
          </div> 

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="indicenrprojet" id="indicenrprojet" placeholder="Indicenrprojet*" 
            value="<?php echo $row["indicenrprojet"];?>" required>
            <span class="focus-input100"></span>
          </div> 

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="voteprojet" id="voteprojet" placeholder="Vote projet*" 
            value="<?php echo $row["voteprojet"];?>"required>
            <span class="focus-input100"></span>
          </div> 

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="normeExcutprojet" id="normeExcutprojet" placeholder="Norme excute projet*" 
            value="<?php echo $row["normeExcutprojet"];?>"required>
            <span class="focus-input100"></span>
          </div> 

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="indicesNRProjet" id="indicesNRProjet" placeholder="Indice NRP *" 
            value="<?php echo $row["indicesNRProjet"];?>"required>
            <span class="focus-input100"></span>
          </div> 

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="booleenPDR" id="booleenPDR" placeholder="booleen PDR*" 
            value="<?php echo $row["booleenPDR"];?>" required>
            <span class="focus-input100"></span>
          </div> 

          <div class="wrap-input100 validate-input" >
            <input  type="file" name="SourcePDF" id="SourcePDF" value="SOurce PDF">
            <span class="focus-input100"></span>
          </div> 



          <!--  TABLE Date de projet -->


          <?php  
      //LES CHAMPS TABLE dateprojet

  $sql = "SELECT * FROM dateprojet WHERE idprojet = ".$ID_PROJET0;  
  $result = mysqli_query($bdd,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC); 
           ?>

          <div class="wrap-input100 validate-input" >
          <label>Date d authentification</label>
          <br>
            <input  type="date" name="dateAuthentif" id="dateAuthentif"
            value="<?php echo $row["dateAuthentif"];?>" >
            <span class="focus-input100"></span>
          </div>   


          <div class="wrap-input100 validate-input" >
          <label>Date Disribution </label>
          <br>
            <input  type="date" name="dateDistribut" id="dateDistribut"
            value="<?php echo $row["dateDistribut"];?>" >
            <span class="focus-input100"></span>
          </div>   


          <div class="wrap-input100 validate-input" >
          <label>Date Mark</label>
          <br>
            <input  type="date" name="dateMark" id="dateMark"
            value="<?php echo $row["dateMark"];?>" >
            <span class="focus-input100"></span>
          </div>            

        <div class="wrap-input100 validate-input" >
          <label>Date execut</label>
          <br>
            <input  type="date" name="dateExecut" id="dateExecut"
            value="<?php echo $row["dateExecut"];?>" >
            <span class="focus-input100"></span>
          </div>            




          <!--  TABLE zone  -->



          <?php  
      //LES CHAMPS TABLE zone

  $sql = "SELECT * FROM zone WHERE idprojet = ".$ID_PROJET0;  
  $result = mysqli_query($bdd,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC); 
           ?>

        <span class="label-input100">region</span>
          <div>
            <select class="selection-2" name="region" id="region">
            <option><?php echo $row["region"];?></option>
              <option>---------------------------</option>
              <option>Tangier-Tétouan-Al Hoceima</option>
              <option>Oriental</option>
              <option>Fez-Meknés</option>
              <option>Rabat-Salé-Kénitra</option>
              <option>Beni Mellal-Khenifra</option>
              <option>Settat-Casablanca</option>
              <option>Marrakesh-Safi</option>
              <option>Drâa-Tafilalt</option>
              <option>Souss-Massa</option>
              <option>Guelmim-Oued Noun</option>
              <option>Laâyoune-SAkia El Hamra</option>
              <option>Dakhla-Oued Eddahab</option>
            </select>
          </div>

        <span class="label-input100">Provaince</span>
          <div>
            <select class="selection-2" name="provaince" id="provaince">
              <option><?php echo $row["provaince"];?></option>
              <option>----------</option>
              <option></option>
            </select>
          </div>
 
        <span class="label-input100">Commune</span>
          <div>
            <select class="selection-2" name="commune" id="commune">
            <option><?php echo $row["commune"];?></option>
              <option>--------</option>
              <option>Rural</option>
              <option>Ubrain</option>
            </select>
          </div> 




<!--  TABLE distruberprojet  -->
            

            <?php  
      //LES CHAMPS TABLE distru

  $sql = "SELECT * FROM distruberprojet WHERE idprojet = ".$ID_PROJET0;  
  $result = mysqli_query($bdd,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC); 
           ?>

     
     <span class="label-input100">Role distruber</span>
          <div>
            <select class="selection-2" name="roledistruber" id="roledistruber">
              <option>Admin</option>
              <option>Agence</option>
              <option>Etablissement</option>
            </select>
          </div>   


          <span class="label-input100">Nom distruber</span>
          <div>
            <select class="selection-2" name="nomdistruber" id="nomdistruber" onchange="">
           <option></option> 
          <option>AgenceX</option>
            </select>
          </div>  

   

         


      
        

		<div class="container-main-form-btn" style=" padding-top: 60px;">
            <div class="wrap-main100-form-btn">
              <div class="main100-form-bgbtn"></div>
              <button type="submit" class="main100-form-btn" name="Validerprojet">
                Ajouter
              </button>
            </div>
          </div>



</form>

</div>
</div>
</div>







 <!--===============================================================================================-->
<script src="./vendor/bootstrap/js/bootstrap.js"></script>
<script src="./js/main.js"></script>

</body>
</html>