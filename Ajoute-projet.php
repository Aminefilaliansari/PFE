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

  $req_projet = "INSERT INTO `projet`(`IdProjet`, `TitreProjet`, `typeprojet`, `sujetprojet`, `textprojet`, `objectifprojet`, `specialiteprojet`, `champprojet`, `indicenrprojet`, `voteprojet`, `normeExcutprojet`, `indicesNRProjet`, `booleenPDR`, `SourcePDF`, `SourcePDF2`) 
  VALUES ( ".$IdProjet." ,'".$_POST['TitreProjet'] ."','". $_POST['typeprojet'] ."','". $_POST['sujetprojet'] ."','". $_POST['textprojet'] ."','". $_POST['objectifprojet'] ."','".$_POST['specialiteprojet'] ."','".$_POST['champprojet'] ."','".$_POST['indicenrprojet'] ."','". $_POST['voteprojet'] ."','". $_POST['normeExcutprojet'] ."','". $_POST['indicesNRProjet'] ."','". $_POST['booleenPDR'] ."',NULL,NULL)"; 
  mysqli_query($bdd,$req_projet);


 
    //DateProjet
  $req_dateprojet ="INSERT INTO `dateprojet`(`idprojet`, `dateAuthentif`, `dateDistribut`, `dateMark`, `dateExecut`) 
  VALUES (".$IdProjet.",'".$_POST['dateAuthentif']."','".$_POST['dateDistribut']."','".$_POST['dateMark']."','".$_POST['dateExecut']."')";   
  //echo "Req-dateprojet :".$req_dateprojet;           
  mysqli_query($bdd,$req_dateprojet);



    //ZONE
  $req_zone = "INSERT INTO `zone`(`idprojet`, `region`, `provaince`, `commune`, `Typecommune`) 
  VALUES (".$IdProjet.",'".$_POST['region']."','".$_POST['provaince']."','".$_POST['commune']."','".$_POST['Typecommune']."')";
  //echo "Req-dateprojet :".$req_zone;           
  mysqli_query($bdd,$req_zone);

   
   // distuber
  $sql = "SELECT idUser FROM `user` WHERE Nom='".$_POST['nomdistruber']."'";  
  $result = mysqli_query($bdd,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);      
  if ($_POST['roledistruber']=="Admin") {
          $Iduser= 'NULL';
  }
  else{
  $Iduser= $row["idUser"];}
  //echo "ID_USER est :".$Iduser;
            
  $req_distruberprojet = "INSERT INTO `distruberprojet`(`idprojet`, `idadmin`, `iduser`, `NomExcute`) 
  VALUES (".$IdProjet.",1,".$Iduser.",'".$_POST['nomdistruber']."')";
 // echo "Req-dateprojet :".$req_distruberprojet;           
  mysqli_query($bdd,$req_distruberprojet);         


    //Table Fin

  $req_fin = "INSERT INTO `financeprojet`(`idprojet`, `Contrib_Etat`, `Contrib_Etabli`, `NbrEtab`, `durAdmin`, `durEtabli`)
   VALUES (".$IdProjet.",'". $_POST['Contrib_Etat'] ."','". $_POST['Contrib_Etabli'] ."','". $_POST['NbrEtab'] ."','". $_POST['durAdmin'] ."','". $_POST['durEtabli'] ."')";
  //echo "Req-fin :".$req_fin;           
  mysqli_query($bdd,$req_fin);

  //Avancementprojet
    $req_Avnc = "INSERT INTO `avancementprojet`(`idprojet`, `iduser`, `Label`, `Etat`, `Commentaire`) 
    VALUES (".$IdProjet.",".$Iduser.",'".$_POST['TitreProjet'] ."',NULL,NULL)";
  //echo "Req-Avnc :".$req_Avnc;           
  mysqli_query($bdd,$req_Avnc);


   echo "<div class='alert alert-success' role='alert'>
  Le projet est ajouteé avec succèe
</div>";
  }
  
  
  ?>



  <div class="limiter">
    <div class="container-main100">
      <div class="wrap-main-body">

<form method="POST">

 <span class="main100-form-title p-b-70">
            Ajouter un projet
          </span>

  
<!--  TABLE  projet -->


<ul class="nav nav-tabs" style="margin-bottom: 70px;">
            <li class="nav-item">
              <a href="#infoprojet" class="nav-link active" role="tab" data-toggle="tab">Information projet</a>
            </li>

            <li class="nav-item">
              <a href="#dateprojet" class="nav-link" role="tab" data-toggle="tab">Date projet </a>
            </li>

            <li class="nav-item">
              <a href="#zone" class="nav-link" role="tab" data-toggle="tab">La zone</a>
            </li>

            <li class="nav-item">
              <a href="#distribuer" class="nav-link" role="tab" data-toggle="tab">Distribuer</a>
            </li>

            <li class="nav-item">
              <a href="#financement" class="nav-link" role="tab" data-toggle="tab">Financement</a>
            </li>

            </ul>
  
  <div class="tab-content">


          <div role="tabpanel" class="tab-pane active" id="infoprojet">

           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Titre projet : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="TitreProjet" id="TitreProjet" placeholder="Titre de projet *" required>
            <span class="focus-input100 "></span>
              </div>
          </div>  
          </div>

           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Type de projet : </label></div>
           <div class="col-md-8">
            <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="typeprojet" id="typeprojet" placeholder="Type projet *"  required>
            <span class="focus-input100"></span>
          </div>
          </div>
          </div>

          


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Sujet de projet : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="sujetprojet" id="sujetprojet" placeholder="Sujet de projet *" required>
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>

          


          


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label> Text de projet : </label></div>
           <div class="col-md-8">
            <textarea class="form-control" type="text" name="textprojet" id="textprojet" placeholder="Text de projet">
            </textarea>              
          </div>
          </div>

          
 

          


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Objectif du projet : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="objectifprojet" id="objectifprojet" placeholder="Objectif du projet*" required>
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>

          
 

          



          
          
            <div class="row  justify-content-center p-b-40" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Specialite projet : </label></div>
           <div class="col-md-8">
            <select class="form-control" name="specialiteprojet" id="specialiteprojet" >
              <option>Personnelle</option>
              <option>Commune</option>
            </select>
          </div>
         </div>



  

              <div class="row  justify-content-center p-b-40" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Champ de projet : </label></div>
           <div class="col-md-8">
            <select class="form-control"  name="champprojet" id="champprojet">
              <option>Secteur sociale</option>
              <option>Secteur economique</option>
              <option>Secteur sanitaire</option>
              <option>Autre</option>
            </select>
          </div>
         </div>

          
 

          


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Indicenrprojet ( number ) : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="indicenrprojet" id="indicenrprojet" placeholder="Indicenrprojet*" required>
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>

          
 

          


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Vote projet ( number ) : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="voteprojet" id="voteprojet" placeholder="Vote projet*" required>
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>

          
 

          


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Norme excute projet : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="normeExcutprojet" id="normeExcutprojet" placeholder="Norme excute projet*" required>
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>

          
 

          


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Indice NRP (num): </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="indicesNRProjet" id="indicesNRProjet" placeholder="Indice NRP *" required>
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>

          
 

          





            <div class="row  justify-content-center p-b-40" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Booleen PDR : </label></div>
           <div class="col-md-8">
            <select class="form-control" name="booleenPDR" id="booleenPDR">
              <option value="1">OUI</option>
              <option value="0">NON</option>
            </select>
          </div>
         </div>

          
 

          


           <div class="row  justify-content-center p-b-30" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Source PDF : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input  type="file"  class="form-control-file" name="SourcePDF" id="SourcePDF" value="Source PDF">
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>

          <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Source PDF 2 : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input  type="file"  class="form-control-file" name="SourcePDF2" id="SourcePDF2" value="Source PDF2">
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>          


           <div class="container-main-form-btn" style="     display: none; padding-top: 60px;">
            <div class="wrap-main100-form-btn" style="width: 30%;float: right;">
              <div class="main100-form-bgbtn"></div>
              <button type="button" class="main100-form-btn" name="">
                SUIVANT
              </button>
            </div>
          </div>
 


</div>
          <!--  TABLE Date de projet -->
<div role="tabpanel" class="tab-pane" id="dateprojet">
          


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Date authentification : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
          
            <input  type="date" name="dateAuthentif" id="dateAuthentif">
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>

          
   


          


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Date Distribut : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
    
            <input  type="date" name="dateDistribut" id="dateDistribut">
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>

          
   


          


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Date Mark : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
       
            <input  type="date" name="dateMark" id="dateMark">
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>

          
            

        


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Date Execute : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">

            <input  type="date" name="dateExecut" id="dateExecut">
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>



           <div class="container-main-form-btn" style="     display: none; padding-top: 60px;">
            <div class="wrap-main100-form-btn" style="width: 30%;float: right;">
              <div class="main100-form-bgbtn"></div>
              <button type="button" class="main100-form-btn" name="">
                SUIVANT
              </button>
            </div>
          </div>

          
            

</div>


          <!--  TABLE zone  -->

<div role="tabpanel" class="tab-pane" id="zone">          

        <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Région : </label></div>
           <div class="col-md-8">
            <select class="form-control" name="region" id="region">
              <option value="NULL">---------------------------</option>
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
          </div>
          

        <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Provaince : </label></div>
           <div class="col-md-8">
            <select class="form-control" name="provaince" id="provaince">
              <option value="NULL">----------</option>
              <option></option>
            </select>
          </div>
         </div>
         


 
        <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Commune : </label></div>
           <div class="col-md-8">
            <select class="form-control" name="commune" id="commune">
              <option value="NULL">--------</option>
              <option></option>
              <option></option>
            </select>
          </div> 
         </div> 


         <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Type Commune : </label></div>
           <div class="col-md-8">
            <select class="form-control" name="Typecommune" id="Typecommune">
              <option value="NULL">--------</option>
              <option>Rural</option>
              <option>Ubrain</option>
            </select>
          </div> 
         </div> 




          <div class="container-main-form-btn" style="     display: none; padding-top: 60px;">
            <div class="wrap-main100-form-btn" style="width: 30%;float: right;">
              <div class="main100-form-bgbtn"></div>
              <button type="button" class="main100-form-btn" name="">
                SUIVANT
              </button>
            </div>
          </div>


</div>

<!--  TABLE distruberprojet  -->


<div role="tabpanel" class="tab-pane" id="distribuer">
     
     <div class="row  justify-content-center p-b-15" >
           <div class="col-md-2" style="text-align: center;margin-top: 9px;">
           <label>Role Distruber : </label></div>
           <div class="col-md-3">
            <select class="form-control" name="roledistruber" id="roledistruber">
              <option value="Admin">Admin</option>
              <option>Agence</option>
              <option>Etablissement</option>
            </select>
          </div> 
            




       
           <div class="col-md-2" style="text-align: center;margin-top: 9px;">
           <label>nom distruber : </label></div>
           <div class="col-md-3">
            <select class="form-control" name="nomdistruber" id="nomdistruber" onchange="">
            <option></option>
          <option>AgenceX</option>
            </select>
          </div> 
          </div> 




           <div class="container-main-form-btn" style="   display: none; padding-top: 60px;">
            <div class="wrap-main100-form-btn" style="width: 30%;float: right;">
              <div class="main100-form-bgbtn"></div>
              <button type="button" class="main100-form-btn" name="">
                SUIVANT
              </button>
            </div>
          </div>


</div>
   
<!--  TABLE financeprojet  -->



<div role="tabpanel" class="tab-pane " id="financement"> 


 <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;">
           <label>Contribution Etat : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="Contrib_Etat" id="Contrib_Etat" placeholder="Contribution Etat *" required>
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;">
           <label>Contribution Etablissement : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="Contrib_Etabli" id="Contrib_Etabli" placeholder="Contribution Etablissement *" required>
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>




           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Nbr Etablissement: </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="NbrEtab" id="NbrEtab" placeholder="Nbr Etablissement *" required>
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>




           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>DurAdmin : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="durAdmin" id="durAdmin" placeholder="DurAdmin *" required>
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>



           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>DurEtablissement : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="durEtabli" id="durEtabli" placeholder="DurEtablissement *" required>
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>


              <div class="container-main-form-btn" style=" padding-top: 60px;">
            <div class="wrap-main100-form-btn">
              <div class="main100-form-bgbtn"></div>
              <button type="submit" class="main100-form-btn" name="Validerprojet">
                Ajouter
              </button>
            </div>
          </div>



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