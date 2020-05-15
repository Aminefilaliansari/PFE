<!DOCTYPE html>
<html>
<head>
		<title> </title>
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
            Analyse
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
  
  <div class="tab-content">


                <div role="tabpanel" class="tab-pane active" id="analysepdr">

           <div class="row  justify-content-center p-b-15" >
           
              <?php  include "./analyse/req_pdr_01_pie.php";?>
               <?php  include "./analyse/req_pdr_02_pie.php";?>
               <?php  include "./analyse/req_pdr_03_pie.php";?>
               <?php  include "./analyse/req_pdr_04_pie.php";?>
               <?php  include "./analyse/req_pdr_05_pie.php";?>
            
           </div>


   
        
                </div>


                <div role="tabpanel" class="tab-pane" id="analyseprojet">


           <div class="row  justify-content-center p-b-15" >

           <?php  include "./analyse/req_projet_01_bar.php";?>
           <?php  include "./analyse/req_projet_02_bar.php";?>
           <?php  include "./analyse/req_projet_03_pie.php";?>
           <?php  include "./analyse/req_projet_04_pie.php";?>


           </div>
        
                </div>



                <div role="tabpanel" class="tab-pane" id="analysefinancement">

           <div class="row  justify-content-center p-b-15" >

              <?php  include "./analyse/req_fin_01_bar.php";?>
              <?php  include "./analyse/req_fin_02_bar.php";?>
              <?php  include "./analyse/req_fin_03_bar.php";?>
              <?php  include "./analyse/req_fin_04_bar.php";?>





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