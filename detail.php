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






  <div class="limiter">
    <div class="container-main100">
      <div class="wrap-main-body">


 <span class="main100-form-title p-b-70">
            Detail projet
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
            <input class="input100" type="text" name="TitreProjet" id="TitreProjet" placeholder="Titre de projet " >
            <span class="focus-input100 "></span>
              </div>
          </div>  
          </div>

           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Type de projet : </label></div>
           <div class="col-md-8">
            <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="typeprojet" id="typeprojet" placeholder="Type projet "  >
            <span class="focus-input100"></span>
          </div>
          </div>
          </div>

          


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Sujet de projet : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="sujetprojet" id="sujetprojet" placeholder="Sujet de projet " >
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
            <input class="input100" type="text" name="objectifprojet" id="objectifprojet" placeholder="Objectif du projet" >
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>

          
 

          



          
          
            <div class="row  justify-content-center p-b-40" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Specialite projet : </label></div>
           <div class="col-md-8">
            <select class="form-control" name="specialiteprojet" id="specialiteprojet" >
              <option>Unique</option>
              <option>Commune</option>
            </select>
          </div>
         </div>



  

              <div class="row  justify-content-center p-b-40" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Champ de projet : </label></div>
           <div class="col-md-8">
            <select class="form-control"  name="champprojet" id="champprojet">
                            <option></option>
              <option>Education</option>
              <option>Infrastructure</option>
              <option>Culturel</option>
              <option>Santé</option>
              <option>Secteur social</option>
              <option>Secteur economic</option>
              <option>Secteur sanitaire</option>
              <option>Secteur socioéconomie</option>
              <option>Autre</option>
            </select>
          </div>
         </div>

          
 

          


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Indicenrprojet ( number ) : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="indicenrprojet" id="indicenrprojet" placeholder="Indicenrprojet" >
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>

          
 

          


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Vote projet ( number ) : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="voteprojet" id="voteprojet" placeholder="Vote projet" >
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>

          
 

          


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Norme excute projet : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="normeExcutprojet" id="normeExcutprojet" placeholder="Norme excute projet" >
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>

          
 

          


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Indice NRP (num): </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="indicesNRProjet" id="indicesNRProjet" placeholder="Indice NRP " >
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



          

          
            

</div>


          <!--  TABLE zone  -->

<div role="tabpanel" class="tab-pane" id="zone">          

        <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Région : </label></div>
           <div class="col-md-8">
            <select class="form-control" name="region" id="region">
              <option value="NULL"></option>
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

            <input type="text" class="form-control" name="provaince" id="provaince" placeholder="">
          
          </div>
         </div>
         


 
        <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Commune : </label></div>
           <div class="col-md-8">
           <input type="text" name="commune" class="form-control" id="commune" placeholder="">
          </div> 
         </div> 


         <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Type : </label></div>
           <div class="col-md-8">
            <select class="form-control" class="form-control"  name="Typecommune" id="Typecommune">
              <option value="NULL"></option>
              <option>Rural</option>
              <option>Urbain</option>
              <option>National</option>
              <option>Régional</option>
              <option>Provincial</option>


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
            <select class="form-control" name="roledistruber" id="roledistruber">
              <option value="Admin">Admin</option>
              <option>Agence</option>
              <option>Etablissement</option>
            </select>
          </div> 
            

 

  <div class="col-md-2" style="text-align: center;margin-top: 9px;">
           <label>nom distruber : </label></div>
           <div class="col-md-3">
            
              <input type="text" class="form-control"  name="nomdistruber" id="nomdistruber" placeholder="">



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
            <input class="input100" type="number" name="Contrib_Etat" id="Contrib_Etat" placeholder="Contribution Etat " >
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>


           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;">
           <label>Contribution Etablissement : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="Contrib_Etabli" id="Contrib_Etabli" placeholder="Contribution Etablissement " >
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>




           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Nbr Etablissement: </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="NbrEtab" id="NbrEtab" placeholder="Nbr Etablissement " >
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>




           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>DurAdmin : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="durAdmin" id="durAdmin" placeholder="DurAdmin " >
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>



           <div class="row  justify-content-center p-b-15" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>DurEtablissement : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="durEtabli" id="durEtabli" placeholder="DurEtablissement " >
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>


             


</div>
         
</div>

      
        






</div>
</div>
</div>







 <!--===============================================================================================-->
<script src="./vendor/bootstrap/js/bootstrap.js"></script>
<script src="./js/main.js"></script>

</body>
</html>