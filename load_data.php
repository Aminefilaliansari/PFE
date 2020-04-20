 <?php  

  include ("database.php");

 ?> 




      <?php  
             if( isset(  $_POST["roledistruber"] )){
               $sql = "SELECT Nom FROM `user` WHERE Role ='".$_POST["roledistruber"]."'";
              $result = mysqli_query($bdd,$sql);

             }


             while ( $row = mysqli_fetch_array($result,MYSQLI_ASSOC) ) {  ?> 

             echo "<option><?php echo $row['Nom'];  ?></option>";



            <?php }  ?>
  
