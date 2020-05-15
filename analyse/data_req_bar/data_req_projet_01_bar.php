<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","BDPFE");

$sqlQuery = "



SELECT zone.provaince, COUNT(zone.Typecommune) as cnt FROM `projet`INNER JOIN zone ON projet.IdProjet = zone.idprojet
GROUP BY zone.provaince



";

$result = mysqli_query($conn,$sqlQuery);

$data1 = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>