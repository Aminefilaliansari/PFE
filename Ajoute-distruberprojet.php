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

<form method="POST">

 <span class="main100-form-title p-b-26">
            Ajouter un projet
          </span>

 <?php  

  include ("database.php");
  
 ?> 
  
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
            <select class="selection-2" name="nomdistruber" id="nomdistruber">
         
            </select>
          </div>  



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

// On reprend le même id que dans le précédent chapitre

 $(document).ready(function(){


$("#roledistruber").change(function(e){
   alert('La deuxième ');
   e.preventDefault();

    var roledistruber = $('#roledistruber').val();



     $.ajax({
            type: 'POST',
            url: 'load_data.php', 
            data: {roledistruber: roledistruber}
        })
        .done(function(data){
             
            // show the response
            //alert( "YES." );
            $('#nomdistruber').html(data);
             
        })
        .fail(function() {
         
            // just in case posting your form failed
            alert( "Posting failed." );
             
        });
 
        // to prevent refreshing the whole page page
        return false;


});

});

</script>


      
        

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


<?php
  




  if (isset($_POST['Validerprojet'])  ) 
{


  $sql = "SELECT IdProjet FROM projet WHERE IdProjet IS NOT NULL ORDER BY IdProjet DESC";  
  $result = mysqli_query($bdd,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);      
  $IdProjet= $row["IdProjet"];
  //echo "ID_PROJET est :".$IdProjet;
  

  $sql = "SELECT idUser FROM `user` WHERE Nom='".$_POST['nomdistruber']."'";  
  $result = mysqli_query($bdd,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);      
  $Iduser= $row["idUser"];
  //echo "ID_USER est :".$Iduser;
            
 

  $req_distruberprojet = "INSERT INTO `distruberprojet`(`idprojet`, `idadmin`, `iduser`, `NomExcute`) 
  VALUES (".$IdProjet.",1,".$Iduser.",'".$_POST['nomdistruber']."')";
  //echo "Req-dateprojet :".$req_distruberprojet;           
  mysqli_query($bdd,$req_distruberprojet);



   
           


   echo "<div class='alert alert-success' role='alert'>
  Le projet est ajouteé avec succèe
</div>";
  }
  
  
  ?>





 <!--===============================================================================================-->
<script src="./vendor/bootstrap/js/bootstrap.js"></script>
<script src="./js/main.js"></script>

</body>
</html>