<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","BDPFE");

$sqlQuery = "


SELECT COUNT(zone.idprojet) as countprojet ,YEAR(dateprojet.dateAuthentif) AS annee FROM `dateprojet`INNER JOIN zone ON dateprojet.idprojet = zone.idprojet 
GROUP BY YEAR(dateprojet.dateAuthentif)

";

$result = mysqli_query($conn,$sqlQuery);

$data2 = array();
foreach ($result as $row) {
  $data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>