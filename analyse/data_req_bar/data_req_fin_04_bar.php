<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","BDPFE");

$sqlQuery = "


SELECT SUM(financeprojet.Contrib_Etat+financeprojet.Contrib_Etabli)AS sumfinancement, projet.champprojet as champprojet FROM `financeprojet`INNER JOIN projet ON financeprojet.idprojet = projet.IdProjet
GROUP BY projet.champprojet

";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>