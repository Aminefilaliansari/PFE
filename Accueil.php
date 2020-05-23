<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./css/util.css">
  <link rel="stylesheet" type="text/css" href="./css/main.css">
  <link rel="stylesheet" type="text/css" href="./css/style.css">
<!--===============================================================================================-->
</head>


<header>
  
<?php  

   include "MenuDesign.php";

?>


</header>



<body>


<div>


  <div class="limiter">
    <div class="container-main100">
      <div class="wrap-main-body">
          


<div class="row justify-content-center">


<div class="col-md-6 col-xs-12 col-sm-12 ">

<!--====   MAP    ==========-->
<div class="map_accueil" >                 
<?php 
include "Map.php";
 ?>
</div>
  
</div>



</div>





<div class="row">
  



 <span class="main100-form-title p-b-70">
            Analyse         :   
          </span>

  



<ul class="nav nav-tabs" style="margin-bottom: 70px;">
            <li class="nav-item">
              <a href="#analysepdr" class="nav-link active" role="tab" data-toggle="tab">Analyse PDR</a>
            </li>

            <li class="nav-item">
              <a href="#analyseprojet" class="nav-link" role="tab" data-toggle="tab">Analyse Projet  </a>
            </li>

            <li class="nav-item">
              <a href="#analysefinancement" class="nav-link" role="tab" data-toggle="tab">Analyse financement</a>
            </li>

            </ul>

</div>


<div class="row">

  
  <div class="tab-content">


                <div role="tabpanel" class="tab-pane active" id="analysepdr">

           <div class="row  justify-content-center p-b-15" >


<fieldset class="scheduler-border">
    <legend class="scheduler-border"> 1 - Proportion de la relation de projet avec le PDR selon l'année :</legend>
    
     <?php  include "./analyse/req_pdr_01_pie.php";?>

</fieldset>


<fieldset class="scheduler-border">
    <legend class="scheduler-border"> 2 - Proportion de la relation de projet avec le PDR selon provaince :</legend>
    
     <?php  include "./analyse/req_pdr_02_pie.php";?>

</fieldset>


<fieldset class="scheduler-border">
    <legend class="scheduler-border"> 3 - Proportion de la relation de projet avec le PDR selon commune et provaince :</legend>
    
     <?php  include "./analyse/req_pdr_03_pie.php";?>

</fieldset>


<fieldset class="scheduler-border">
    <legend class="scheduler-border"> 4 - Proportion de la relation de projet avec le PDR selon type de commune :</legend>
    
     <?php  include "./analyse/req_pdr_04_pie.php";?>

</fieldset>


<fieldset class="scheduler-border">
    <legend class="scheduler-border"> 5 - Proportion de la relation de projet avec le PDR selon type de commune d'une provaince :</legend>
    
     <?php  include "./analyse/req_pdr_05_pie.php";?>

</fieldset>




           
            
            
           </div>


   
        
                </div>


                <div role="tabpanel" class="tab-pane" id="analyseprojet">


           <div class="row  justify-content-center p-b-15" >




<fieldset class="scheduler-border">
    <legend class="scheduler-border"> 1 - Proportion de projet selon l'année projet et champ de projet : </legend>
            <?php  include "./analyse/req_projet_03_pie.php";?>
</fieldset>

<fieldset class="scheduler-border">
    <legend class="scheduler-border"> 2 - Nombre de projet de chaque Provaince : </legend>
            <?php  include "./analyse/req_projet_01_bar.php";?>
</fieldset>




<fieldset class="scheduler-border">
    <legend class="scheduler-border"> 3 - Proportion de projet selon la specialite (Unique ou Commune) : </legend>
            <?php  include "./analyse/req_projet_04_pie.php";?>
</fieldset>            
         

<fieldset class="scheduler-border">
    <legend class="scheduler-border"> 4 - Nombre de projet de chaque année et provaince : </legend>
            <?php  include "./analyse/req_projet_02_bar.php";?>
</fieldset>          

           </div>
        
                </div>



                <div role="tabpanel" class="tab-pane" id="analysefinancement">

           <div class="row  justify-content-center p-b-15" >

<fieldset class="scheduler-border">
    <legend class="scheduler-border"> 1 - Financement du projet par l'année :</legend>
             <?php  include "./analyse/req_fin_11_pie.php";?>  
             <?php  include "./analyse/req_fin_01_bar.php";?>
             </fieldset>

<fieldset class="scheduler-border">
    <legend class="scheduler-border"> 2 - Financement du projet par Commune :</legend>      
             <?php  include "./analyse/req_fin_22_pie.php";?> 
             <?php  include "./analyse/req_fin_02_bar.php";?>
             </fieldset>

<fieldset class="scheduler-border">
    <legend class="scheduler-border"> 3 - Financement du projet par Type commune :</legend>             
              <?php  include "./analyse/req_fin_33_pie.php";?> 
              <?php  include "./analyse/req_fin_03_bar.php";?>
              </fieldset>



<fieldset class="scheduler-border">
    <legend class="scheduler-border"> 4 - Financement du projet par Champ de projet  :</legend>                 
              <?php  include "./analyse/req_fin_44_pie.php";?> 
              <?php  include "./analyse/req_fin_04_bar.php";?>
              </fieldset>

<fieldset class="scheduler-border">
    <legend class="scheduler-border"> 6 - Coût d'Admin ( RURAL & URBAIN ) :</legend>   
              <?php  include "./analyse/req_fin_66_pie.php";?> 
              </fieldset>

<fieldset class="scheduler-border">
    <legend class="scheduler-border"> 7 - Coût d'Etablissement ( RURAL & URBAIN ) :</legend>                 
              <?php  include "./analyse/req_fin_77_pie.php";?>
              </fieldset>

<fieldset class="scheduler-border">
    <legend class="scheduler-border"> 8 - Total financement ( RURAL & URBAIN ) :</legend>                  
              <?php  include "./analyse/req_fin_88_pie.php";?>
              </fieldset> 

           </div>
        
                </div>






  </div>

      
        



</div>



</div>










































      </div>
    </div>
  </div>
  

</div>



























<!--===============================================================================================-->
  <script src="./vendor/bootstrap/js/popper.js"></script>
  <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
</body>
</html>