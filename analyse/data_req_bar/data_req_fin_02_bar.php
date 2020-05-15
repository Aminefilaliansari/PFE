<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","BDPFE");

$sqlQuery = "

SELECT SUM(financeprojet.Contrib_Etat+financeprojet.Contrib_Etabli)AS sumfinancement, zone.provaince as provaince FROM `financeprojet`INNER JOIN zone ON financeprojet.idprojet = zone.idprojet
GROUP BY zone.provaince

";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>