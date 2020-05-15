<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","BDPFE");

$sqlQuery = "


SELECT SUM(financeprojet.Contrib_Etat+financeprojet.Contrib_Etabli)AS sumfinancement, YEAR(dateprojet.dateAuthentif) as datee FROM `financeprojet`INNER JOIN dateprojet ON financeprojet.idprojet = dateprojet.idprojet
GROUP BY YEAR(dateprojet.dateAuthentif)
ORDER BY YEAR(dateprojet.dateAuthentif) DESC

";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>