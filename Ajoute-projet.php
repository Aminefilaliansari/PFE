<!DOCTYPE html>
<html>
<head>
		<title> Ajouter </title>
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
?>


<?php
  


  if (isset($_POST['Validerprojet'])  ) 
{

    //infoprojet
  $sql = "SELECT IdProjet FROM projet WHERE IdProjet IS NOT NULL ORDER BY IdProjet DESC";  
  $result = mysqli_query($bdd,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);      
  $IdProjet= $row["IdProjet"]+1;
  //echo "ID_PROJET est :".$IdProjet;

  $req_projet = "INSERT INTO `projet`(`IdProjet`, `TitreProjet`, `typeprojet`, `sujetprojet`, `textprojet`, `objectifprojet`, `specialiteprojet`, `champprojet`, `indicenrprojet`, `voteprojet`, `normeExcutprojet`, `indicesNRProjet`, `booleenPDR`, `SourcePDF`) 
  VALUES ( ".$IdProjet." ,'".$_POST['TitreProjet'] ."','". $_POST['typeprojet'] ."','". $_POST['sujetprojet'] ."','". $_POST['textprojet'] ."','". $_POST['objectifprojet'] ."','".$_POST['specialiteprojet'] ."','".$_POST['champprojet'] ."','".$_POST['indicenrprojet'] ."','". $_POST['voteprojet'] ."','". $_POST['normeExcutprojet'] ."','". $_POST['indicesNRProjet'] ."','". $_POST['booleenPDR'] ."',NULL)"; 
  mysqli_query($bdd,$req_projet);


 
    //DateProjet
  $req_dateprojet ="INSERT INTO `dateprojet`(`idprojet`, `dateAuthentif`, `dateDistribut`, `dateMark`, `dateExecut`) 
  VALUES (".$IdProjet.",'".$_POST['dateAuthentif']."','".$_POST['dateDistribut']."','".$_POST['dateMark']."','".$_POST['dateExecut']."')";   
  //echo "Req-dateprojet :".$req_dateprojet;           
  mysqli_query($bdd,$req_dateprojet);



    //ZONE
  $req_zone = "INSERT INTO `zone`(`idprojet`, `region`, `provaince`, `commune`) 
  VALUES (".$IdProjet.",'".$_POST['region']."','".$_POST['provaince']."','".$_POST['commune']."')";
  //echo "Req-dateprojet :".$req_zone;           
  mysqli_query($bdd,$req_zone);

   
   // distuber
  $sql = "SELECT idUser FROM `user` WHERE Nom='".$_POST['nomdistruber']."'";  
  $result = mysqli_query($bdd,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);      
  $Iduser= $row["idUser"];
  //echo "ID_USER est :".$Iduser;
            
  $req_distruberprojet = "INSERT INTO `distruberprojet`(`idprojet`, `idadmin`, `iduser`, `NomExcute`) 
  VALUES (".$IdProjet.",1,".$Iduser.",'".$_POST['nomdistruber']."')";
 // echo "Req-dateprojet :".$req_distruberprojet;           
  mysqli_query($bdd,$req_distruberprojet);         





   echo "<div class='alert alert-success' role='alert'>
  Le projet est ajouteé avec succèe
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

           <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="TitreProjet" id="TitreProjet" placeholder="Titre de projet *" required>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="typeprojet" id="typeprojet" placeholder="Type projet *"  required>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="sujetprojet" id="sujetprojet" placeholder="Sujet de projet *" required>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="textprojet" id="textprojet" placeholder="Text de projet*" required>
            <span class="focus-input100"></span>
          </div> 

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="objectifprojet" id="objectifprojet" placeholder="Objectif du projet*" required>
            <span class="focus-input100"></span>
          </div> 

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="specialiteprojet" id="specialiteprojet" placeholder="Specialite projet*" required>
            <span class="focus-input100"></span>
          </div> 

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="champprojet" id="champprojet" placeholder="champ de projet*" required>
            <span class="focus-input100"></span>
          </div> 

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="indicenrprojet" id="indicenrprojet" placeholder="Indicenrprojet*" required>
            <span class="focus-input100"></span>
          </div> 

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="voteprojet" id="voteprojet" placeholder="Vote projet*" required>
            <span class="focus-input100"></span>
          </div> 

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="normeExcutprojet" id="normeExcutprojet" placeholder="Norme excute projet*" required>
            <span class="focus-input100"></span>
          </div> 

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="indicesNRProjet" id="indicesNRProjet" placeholder="Indice NRP *" required>
            <span class="focus-input100"></span>
          </div> 

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="booleenPDR" id="booleenPDR" placeholder="booleen PDR*" required>
            <span class="focus-input100"></span>
          </div> 

          <div class="wrap-input100 validate-input" >
            <input  type="file" name="SourcePDF" id="SourcePDF" value="SOurce PDF">
            <span class="focus-input100"></span>
          </div> 



          <!--  TABLE Date de projet -->

          <div class="wrap-input100 validate-input" >
          <label>Date d authentification</label>
          <br>
            <input  type="date" name="dateAuthentif" id="dateAuthentif">
            <span class="focus-input100"></span>
          </div>   


          <div class="wrap-input100 validate-input" >
          <label>Date Disribution </label>
          <br>
            <input  type="date" name="dateDistribut" id="dateDistribut">
            <span class="focus-input100"></span>
          </div>   


          <div class="wrap-input100 validate-input" >
          <label>Date Mark</label>
          <br>
            <input  type="date" name="dateMark" id="dateMark">
            <span class="focus-input100"></span>
          </div>            

        <div class="wrap-input100 validate-input" >
          <label>Date execut</label>
          <br>
            <input  type="date" name="dateExecut" id="dateExecut">
            <span class="focus-input100"></span>
          </div>            




          <!--  TABLE zone  -->

        <span class="label-input100">region</span>
          <div>
            <select class="selection-2" name="region" id="region">
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
              <option>----------</option>
              <option></option>
            </select>
          </div>
 
        <span class="label-input100">Commune</span>
          <div>
            <select class="selection-2" name="commune" id="commune">
              <option>--------</option>
              <option>Rural</option>
              <option>Ubrain</option>
            </select>
          </div> 




<!--  TABLE distruberprojet  -->
     
     <span class="label-input100">Role distruber</span>
          <div>
            <select class="selection-2" name="roledistruber" id="roledistruber">
            <option></option>
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