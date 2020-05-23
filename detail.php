<!DOCTYPE html>
<html>
<head>
<?php include('database.php') ?>

		<title> Détails du projet </title>
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
$id = intval($_GET['idprojet']);

?>
</div>
</header>
<body>


<?php 
	$sql = "select * from projet,dateprojet,zone,distruberprojet,financeprojet where projet.IdProjet = dateprojet.idprojet and dateprojet.idprojet=zone.idprojet and zone.idprojet=distruberprojet.idprojet and distruberprojet.idprojet=financeprojet.idprojet and  distruberprojet.idprojet=$id "	;
	$rs = mysqli_query($bdd, $sql);
 
	$fetchRow = mysqli_fetch_assoc($rs);
	
?> 

<?php
if (isset($_POST['Valider'])  ) 
{

 $req_etat="

 update `projet`,`dateprojet`,`zone`,`distruberprojet`,`financeprojet` set `TitreProjet`='".$_POST['TitreProjet']."',`typeprojet`='".$_POST['typeprojet']."',`sujetprojet`='".$_POST['sujetprojet']."',`textprojet`='".$_POST['textprojet']."',`objectifprojet`='".$_POST['objectifprojet']."',`specialiteprojet`='".$_POST['specialiteprojet']."',`champprojet`='".$_POST['champprojet']."',`indicenrprojet`='".$_POST['indicenrprojet']."',`voteprojet`='".$_POST['voteprojet']."',`normeExcutprojet`='".$_POST['normeExcutprojet']."',`indicesNRProjet`='".$_POST['indicesNRProjet']."',`booleenPDR`='".$_POST['booleenPDR']."',`SourcePDF`='".$_POST['SourcePDF']."',`SourcePDF2`='".$_POST['SourcePDF2']."',`dateAuthentif`='".$_POST['dateAuthentif']."',`dateDistribut`='".$_POST['dateDistribut']."',`dateMark`='".$_POST['dateMark']."',`dateExecut`='".$_POST['dateExecut']."',`provaince`='".$_POST['¨provaince']."',`commune`='".$_POST['commune']."',`Typecommune`='".$_POST['Typecommune']."',`roledistruber`='".$_POST['roledistruber']."',`NomExcute`='".$_POST['NomExcute']."',`Contrib_Etat`='".$_POST['Contrib_Etat']."',`Contrib_Etabli`='".$_POST['Contrib_Etabli']."',`NbrEtab`='".$_POST['NbrEtab']."',`durAdmin`='".$_POST['durAdmin']."',`durEtabli`='".$_POST['durEtabli']."',`region`='".$_POST['region']."' where projet.IdProjet = dateprojet.idprojet and dateprojet.idprojet=zone.idprojet and zone.idprojet=distruberprojet.idprojet and distruberprojet.idprojet=financeprojet.idprojet and  distruberprojet.idprojet=$id 
 ";

 // echo "Req_ETAT est :".$req_etat;
  mysqli_query($bdd,$req_etat);




header('Location:User-projet.php');
exit();


}


?>

<form method="POST">

  <div class="limiter">
    <div class="container-main100">
      <div class="wrap-main-body">


 <span class="main100-form-title p-b-70">
            Détails du projet
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
           <label>Id : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="id" id="id" value="<?php echo $id?>" readonly>
            <span class="focus-input100 "></span>
              </div>
          </div>  
          </div>
           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Titre projet : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="TitreProjet" id="TitreProjet" value="<?php echo $fetchRow['TitreProjet']?>" disabled="disabled"  >
            <span class="focus-input100 "></span>
              </div>
          </div>  
          </div>

           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Type de projet : </label></div>
           <div class="col-md-8">
            <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="typeprojet" id="typeprojet" value="<?php echo $fetchRow['typeprojet']?>"  disabled="disabled" >
            <span class="focus-input100"></span>
          </div>
          </div>
          </div>

          


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Sujet de projet : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="sujetprojet" id="sujetprojet" value="<?php echo $fetchRow['sujetprojet']?>" disabled="disabled"  >
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>

          


          


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label> Text de projet : </label></div>
           <div class="col-md-8">
            <textarea class="form-control" type="text" name="textprojet" id="textprojet" disabled="disabled"  ><?php echo $fetchRow['textprojet'] ?>
            </textarea>              
          </div>
          </div>

          
 

          


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Objectif du projet : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="objectifprojet" id="objectifprojet" value="<?php echo $fetchRow['objectifprojet']?>"disabled="disabled"  >
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>

          
 

          



          
          
            <div class="row  justify-content-center p-b-40" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Specialite projet : </label></div>
           <div class="col-md-8">
            <select class="form-control" name="specialiteprojet" id="specialiteprojet" disabled="disabled" >
              <option value="Unique" <?php if ($fetchRow['specialiteprojet']=="Unique" ) echo "selected" ?>>Unique </option>
              <option value="Commune" <?php if ($fetchRow['specialiteprojet']=="Commune") echo "selected" ?>>Commune </option> 
            </select>
          </div>
         </div>



  

              <div class="row  justify-content-center p-b-40" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Champ de projet : </label></div>
           <div class="col-md-8">
            <select class="form-control"  name="champprojet" id="champprojet" disabled="disabled" >
                            <option></option>
              <option <?php if ($fetchRow['champprojet']=="Education") echo "selected" ?>>Education</option>
              <option <?php if ($fetchRow['champprojet']=="Infrastructure") echo "selected" ?>>Infrastructure</option>
              <option <?php if ($fetchRow['champprojet']=="Culturel") echo "selected" ?>>Culturel</option>
              <option <?php if ($fetchRow['champprojet']=="Santé") echo "selected" ?>>Santé</option>
              <option <?php if ($fetchRow['champprojet']=="Secteur social") echo "selected" ?>>Secteur social</option>
              <option <?php if ($fetchRow['champprojet']=="Secteur economic") echo "selected" ?>>Secteur economic</option>
              <option <?php if ($fetchRow['champprojet']=="Secteur sanitaire") echo "selected" ?>>Secteur sanitaire</option>
              <option <?php if ($fetchRow['champprojet']=="Secteur socioéconomie") echo "selected" ?>>Secteur socioéconomie</option>
              <option <?php if ($fetchRow['champprojet']=="Autre") echo "selected" ?>>Autre</option>
            </select>
          </div>
         </div>

          
 

          


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Indicenrprojet ( number ) : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="indicenrprojet" id="indicenrprojet" value="<?php echo $fetchRow['indicenrprojet']?>"disabled="disabled"  >
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>

          
 

          


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Vote projet ( number ) : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="voteprojet" id="voteprojet" value="<?php echo $fetchRow['voteprojet']?>"disabled="disabled"  >
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>

          
 

          


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Norme excute projet : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="normeExcutprojet" id="normeExcutprojet" value="<?php echo $fetchRow['normeExcutprojet']?>"disabled="disabled"  >
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>

          
 

          


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Indice NRP (num): </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="indicesNRProjet" id="indicesNRProjet" value="<?php echo $fetchRow['indicesNRProjet']?>"disabled="disabled"  >
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>

          
 

          





            <div class="row  justify-content-center p-b-40" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Booleen PDR : </label></div>
           <div class="col-md-8">
            <select class="form-control" name="booleenPDR" id="booleenPDR"disabled="disabled" >
              <option <?php if($fetchRow['booleenPDR']==1) echo "selected" ?>>OUI</option>
              <option <?php if($fetchRow['booleenPDR']==0) echo "selected" ?>>NON</option>
            </select>
          </div>
         </div>

          
 

          


           <div class="row  justify-content-center p-b-30" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Source PDF : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input  type="file"  class="form-control-file" name="SourcePDF" id="SourcePDF" value="<?php echo $fetchRow['SourcePDF']?>"disabled="disabled" >
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>

          <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Source PDF 2 : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input  type="file"  class="form-control-file" name="SourcePDF2" id="SourcePDF2" value="<?php echo $fetchRow['SourcePDF2']?>"disabled="disabled" >
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>          


        

</div>
          <!--  TABLE Date de projet -->
<div role="tabpanel" class="tab-pane" id="dateprojet"disabled="disabled" >
          


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Date authentification : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
          
            <input  type="date" name="dateAuthentif" id="dateAuthentif" value="<?php echo date('Y/m/d',strtotime($fetchRow['dateAuthentif'])); ?>"disabled="disabled"  >
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>

          
   


          


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Date Distribut : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
    
            <input  type="date" name="dateDistribut" id="dateDistribut"disabled="disabled" >
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>

          
   


          


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Date Mark : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
       
            <input  type="date" name="dateMark" id="dateMark"disabled="disabled" >
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>

          
            

        


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Date Execute : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">

            <input  type="date" name="dateExecut" id="dateExecut"disabled="disabled" >
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>



         
          
            

</div>


          <!--  TABLE zone  -->

<div role="tabpanel" class="tab-pane" id="zone">          

        <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Région : </label></div>
           <div class="col-md-8">
            <select class="form-control" name="region" id="region"disabled="disabled" >
              <option value="NULL"></option>
              <option <?php if ($fetchRow['region']=="Tangier-Tétouan-Al Hoceima") echo "selected" ?>>Tangier-Tétouan-Al Hoceima</option>
              <option <?php if ($fetchRow['region']=="Oriental") echo "selected" ?>>Oriental</option>
              <option <?php if ($fetchRow['region']=="Fez-Meknés") echo "selected" ?>>Fez-Meknés</option>
              <option <?php if ($fetchRow['region']=="Rabat-Salé-Kénitra") echo "selected" ?>>Rabat-Salé-Kénitra</option>
              <option <?php if ($fetchRow['region']=="Beni Mellal-Khenifra") echo "selected" ?>>Beni Mellal-Khenifra</option>
              <option <?php if ($fetchRow['region']=="Settat-Casablanca") echo "selected" ?>>Settat-Casablanca</option>
              <option <?php if ($fetchRow['region']=="Marrakesh-Safi") echo "selected" ?>>Marrakesh-Safi</option>
              <option <?php if ($fetchRow['region']=="Drâa-Tafilalt") echo "selected" ?>>Drâa-Tafilalt</option>
              <option <?php if ($fetchRow['region']=="Souss-Massa") echo "selected" ?>>Souss-Massa</option>
              <option <?php if ($fetchRow['region']=="Guelmim-Oued Noun") echo "selected" ?>>Guelmim-Oued Noun</option>
              <option <?php if ($fetchRow['region']=="Laâyoune-SAkia El Hamra") echo "selected" ?>>Laâyoune-SAkia El Hamra</option>
              <option <?php if ($fetchRow['region']=="Dakhla-Oued Eddahab") echo "selected" ?>>Dakhla-Oued Eddahab</option>

            </select>
          </div>
          </div>
          

        <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Province : </label></div>
           <div class="col-md-8">

            <input type="text" class="form-control" name="provaince" id="provaince" value="<?php echo $fetchRow['provaince'] ?>"disabled="disabled" >
          
          </div>
         </div>
         


 
        <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Commune : </label></div>
           <div class="col-md-8">
           <input type="text" name="commune" class="form-control" id="commune" value="<?php echo $fetchRow['commune'] ?>"disabled="disabled" >
          </div> 
         </div> 


         <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Type : </label></div>
           <div class="col-md-8">
            <select class="form-control" class="form-control"  name="Typecommune" id="Typecommune"disabled="disabled" >
              <option value="NULL"></option>
              <option <?php if ($fetchRow['Typecommune']=="Rural") echo "selected" ?>>Rural</option>
              <option <?php if ($fetchRow['Typecommune']=="Urbain") echo "selected" ?>>Urbain</option>
              <option <?php if ($fetchRow['Typecommune']=="National") echo "selected" ?>>National</option>
              <option <?php if ($fetchRow['Typecommune']=="Régional") echo "selsected" ?>>Régional</option>
              <option <?php if ($fetchRow['Typecommune']=="Provincial") echo "selected" ?>>Provincial</option>


            </select>
          </div> 
         </div> 




   


</div>

<!--  TABLE distruberprojet  -->


<div role="tabpanel" class="tab-pane" id="distribuer">
     
     <div class="row  justify-content-center p-b-15" >
           <div class="col-md-2" style="text-align: center;margin-top: 9px;">
           <label>Role Distruber : </label></div>
           <div class="col-md-3">
            <select class="form-control" name="roledistruber" id="roledistruber"disabled="disabled" >
              <option value="Admin" >Admin</option>
              <option>Agence</option>
              <option>Etablissement</option>
            </select>
          </div> 
            

 

  <div class="col-md-2" style="text-align: center;margin-top: 9px;">
           <label>nom distruber : </label></div>
           <div class="col-md-3">
            
              <input type="text" class="form-control"  name="nomdistruber" id="nomdistruber"  value="<?php echo $fetchRow['NomExcute'] ?>"disabled="disabled" >



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
            <input class="input100" type="number" name="Contrib_Etat" id="Contrib_Etat" value="<?php echo $fetchRow['Contrib_Etat'] ?>" disabled="disabled" >
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;">
           <label>Contribution Etablissement : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="Contrib_Etabli" id="Contrib_Etabli" value="<?php echo $fetchRow['Contrib_Etabli'] ?>" disabled="disabled" >
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>




           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Nbr Etablissement: </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="NbrEtab" id="NbrEtab"  value="<?php echo $fetchRow['NbrEtab'] ?>"disabled="disabled" >
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>




           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>DurAdmin : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="durAdmin" id="durAdmin" value="<?php echo $fetchRow['durAdmin'] ?>" disabled="disabled" >
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>



           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>DurEtablissement : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="durEtabli" id="durEtabli" value="<?php echo $fetchRow['durEtabli'] ?>"disabled="disabled"  >
              <span class="focus-input100"></span>
          </div>
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